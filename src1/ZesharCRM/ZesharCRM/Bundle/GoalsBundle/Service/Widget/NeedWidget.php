<?php

namespace ZesharCRM\Bundle\GoalsBundle\Service\Widget;

use Symfony\Component\DependencyInjection\ContainerInterface;
use ZesharCRM\Bundle\CoreBundle\Enum\LeadType;
use ZesharCRM\Bundle\CoreBundle\Enum\OperationType;
use ZesharCRM\Bundle\CoreBundle\Enum\OpportunityStatus;
use ZesharCRM\Bundle\CoreBundle\Enum\DealStatus;
use ZesharCRM\Bundle\CoreBundle\Enum\GoalKind;
use ZesharCRM\Bundle\GoalsBundle\Service\Widget\WidgetCalculator;
use ZesharCRM\Bundle\CoreBundle\Enum\GoalStatus;
use ZesharCRM\Bundle\CoreBundle\Repository\WidgetRepository;
use ZesharCRM\Bundle\CoreBundle\Repository\OperationRepository;

class NeedWidget extends CommonWidget
{
    protected $container;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    public function render($user,$persons)
    {
        $em = $this->container->get('doctrine.orm.entity_manager');
        $operations = $em->getRepository('ZesharCRMCoreBundle:Operation')->getCountByTypeOperationData($user);
        $allOperations = $em->getRepository('ZesharCRMCoreBundle:Operation')->getCountByTypeAllOperationData($user);

        $performance = OperationType::getEmptyOperationArray();
        $allPerformance = OperationType::getEmptyOperationArray();

        foreach ($allOperations as $operation) {

            $allPerformance[$operation['operationType']] = $operation[1];
        }
        foreach ($operations as $operation) {
            $performance[$operation['operationType']] = $operation[1];
        }

        $isAll = WidgetRepository::isShowAllData($user);

        if($isAll){
            $leads = $em->getRepository('ZesharCRMGoalsBundle:GoalAssignment')->getLeads($user, LeadType::COLD, DealStatus::PENDING);
            $warmLeads = $em->getRepository('ZesharCRMGoalsBundle:GoalAssignment')->getLeads($user, LeadType::WARM, DealStatus::PENDING);
            $opportunity = $em->getRepository('ZesharCRMGoalsBundle:GoalAssignment')->getLeads($user, null, OpportunityStatus::PENDING_OPPORTUNITY);
            $quote = $em->getRepository('ZesharCRMGoalsBundle:GoalAssignment')->getLeads($user, null, OpportunityStatus::PENDING_QUOTE);
        }else{
            $leads = $em->getRepository('ZesharCRMCoreBundle:Lead')->findBy(array('assignee' => $user, 'type' => LeadType::COLD, 'status' => DealStatus::PENDING));
            $warmLeads = $em->getRepository('ZesharCRMCoreBundle:Lead')->findBy(array('assignee' => $user, 'type' => LeadType::WARM, 'status' => DealStatus::PENDING));
            $opportunity = $em->getRepository('ZesharCRMCoreBundle:Opportunity')->findBy(array('assignee' => $user, 'status' => OpportunityStatus::PENDING_OPPORTUNITY));
            $quote = $em->getRepository('ZesharCRMCoreBundle:Opportunity')->findBy(array('assignee' => $user, 'status' => OpportunityStatus::PENDING_QUOTE));
        }

        $totalColdLead = (count($leads) + $performance[OperationType::CANCELLED_LEAD] + $performance[OperationType::COLD_TO_WARM_LEAD]);
        $totalWarmLead = (count($warmLeads) + $performance[OperationType::CANCELLED_LEAD] + $performance[OperationType::LEAD_TO_OPPORTUNITY]);
        $totalOpportunity = (count($opportunity) + $performance[OperationType::CANCELLED_OPPORTUNITY] + $performance[OperationType::OPPORTUNITY_TO_QUOTE]);
        $totalQuote = (count($quote) + $allPerformance[OperationType::CANCELLED_QUOTE] + $allPerformance[OperationType::SUCCESS_QUOTE]);

        $done = array();
        $done[GoalKind::COLD_TO_WARM_LEAD] = $this->division($allPerformance[OperationType::COLD_TO_WARM_LEAD], $totalColdLead);
        $done[GoalKind::LEAD_TO_OPPORTUNITY] = $this->division($allPerformance[OperationType::LEAD_TO_OPPORTUNITY], $totalWarmLead);
        $done[GoalKind::OPPORTUNITY_TO_QUOTE] = $this->division($allPerformance[OperationType::OPPORTUNITY_TO_QUOTE], $totalOpportunity);
        $done[GoalKind::SUCCESS_QUOTE] = $this->division($allPerformance[OperationType::SUCCESS_QUOTE], $totalQuote);

        $goalOpen = $this->container->get('doctrine.orm.entity_manager')->getRepository('ZesharCRMGoalsBundle:GoalAssignment')->assignGoal($user);
        $goalOpen = WidgetCalculator::getGoalMonth($goalOpen, $user);

        /** @var $operationRepository OperationRepository */
        $operationRepository = $em->getRepository('ZesharCRMCoreBundle:Operation');

        $total = array('estimated' => 0,'current' => 0);
        foreach ($goalOpen as $key1=>$value1) {
            if($isAll){
                $total['estimated'] += $value1['estimated'];
                $total['current'] += $value1['current'];
            } else {
                $goalAssignment = $em->getRepository('ZesharCRMGoalsBundle:GoalAssignment')->findOneBy(array('id' => $value1['id']));
                $goalAssign = $em->getRepository('ZesharCRMGoalsBundle:GoalAssign')->findOneBy(array('goal' => $goalAssignment->getGoal(), 'user' => $user));
                $total['estimated'] += round($goalAssign->getItems());
                $sales = $operationRepository->getSoldItemsByUser($user);
                if(!empty($sales) && $total['current'] == 0) {
                    foreach($sales as $sale){
                        $total['current'] += $sale['soldItems'];
                    }
                }
            }
        }

        $needSales = array();
        $needSales['count'] = $total['estimated'] - $total['current'];
        $needSales['percent'] = $this->division($total['current'], $total['estimated']);
        $needSales['color'] = '35b16f';

        $result = array();
        $result['Sales'] = $needSales;

        // for Quotes
        $count = round(self::division($needSales['count'], $done[GoalKind::SUCCESS_QUOTE]));
        $total = $count + $performance[OperationType::OPPORTUNITY_TO_QUOTE];
        $current = $performance[OperationType::OPPORTUNITY_TO_QUOTE];
        //
        $result['Quotes'] = array(
            'count' => $count,
            'percent' => self::division($current, $total),
            'color' => '3393ff'
        );

        // for Opportunities
        $count = round(self::division($result['Quotes']['count'], $done[GoalKind::OPPORTUNITY_TO_QUOTE]));
        $total = $count + $performance[OperationType::LEAD_TO_OPPORTUNITY];
        $current = $performance[OperationType::LEAD_TO_OPPORTUNITY];
        //
        $result['Opportunities'] = array(
            'count' => $count,
            'percent' => self::division($current,$total),
            'color' => 'd62020');

        // for Warm Leads
        $count = round(self::division($result['Opportunities']['count'], $done[GoalKind::LEAD_TO_OPPORTUNITY]));
        $total = $count + $performance[OperationType::COLD_TO_WARM_LEAD];
        $current = $performance[OperationType::COLD_TO_WARM_LEAD];
        //
        $result['Warm Leads'] = array(
            'count' => $count,
            'percent' => self::division($current,$total),
            'color' => 'a7d40b');

        // for Cold Leads
        $count = round(self::division ($result['Warm Leads']['count'], $done[GoalKind::COLD_TO_WARM_LEAD])) ;
        $total = $count + $performance[OperationType::COLD_LEAD];
        $current = $performance[OperationType::COLD_LEAD];
        //
        $result['Cold Leads'] = array(
            'count' => $count,
            'percent' => self::division($current, $total),
            'color' => 'e86107');

        $result = array_reverse($result);
        return $this->container->get('templating')->render('ZesharCRMGoalsBundle:Widget:need.html.twig', array('data' => $result, 'persons' => $persons, 'selectedUser' => $user->getUsername()));
    }

    private function division ($current, $total)
    {
        return ($total == 0) ? 0 : $current/$total;
    }

}
