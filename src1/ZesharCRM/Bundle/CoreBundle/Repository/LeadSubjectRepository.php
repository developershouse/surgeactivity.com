<?php

namespace ZesharCRM\Bundle\CoreBundle\Repository;

use Doctrine\ORM\EntityRepository;
use ZesharCRM\Bundle\CoreBundle\Entity\Lead;
use ZesharCRM\Bundle\CoreBundle\Entity\LeadAttachment;
use \ZesharCRM\Bundle\CoreBundle\Entity\User;
use \ZesharCRM\Bundle\CoreBundle\Entity\Opportunity;
use ZesharCRM\Bundle\CoreBundle\Entity\OpportunityAttachment;
use ZesharCRM\Bundle\CoreBundle\Enum\DealStatus;
use ZesharCRM\Bundle\CoreBundle\Enum\OpportunityStatus;
use ZesharCRM\Bundle\CoreBundle\Enum\LeadType;

/**
 * LeadRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class LeadSubjectRepository extends EntityRepository
{
    
    /**
     * Close a lead with SUCCESS status and create new opportunity from it
     * @return \ZesharCRM\Bundle\CoreBundle\Entity\Opportunity
     * @throws \BadMethodCallException When the lead was already in SUCCESS state
     */
    public function createOpportunity(Lead $lead)
    {
        if (DealStatus::SUCCESS === $lead->getStatus()) {
            throw new \BadMethodCallException('This lead was already closed as success.');
        }

        $em = $this->getEntityManager();

        $lead->setStatus(DealStatus::SUCCESS);

        if (LeadType::COLD === $lead->getType()) {
            $lead->setType(LeadType::WARM);
        }

        $opportunity = new Opportunity();
        
        // copy all fields
        $opportunity
            ->setLead($lead)
            ->setName($lead->getName())
            ->setStatus(OpportunityStatus::PENDING_OPPORTUNITY)
            ->setCreator($lead->getCreator())
            ->setAssignee($lead->getAssignee())
            ->setContactCard($lead->getContactCard())
            ->setOpportunityCategory($lead->getLeadCategory())
            ->setPurchaseAmount($lead->getPurchaseAmount())
            ->setPurchasedAt($lead->getPurchasedAt())
            ->setEstimatedValue($lead->getEstimatedValue())
            ->setPreviousCarierName($lead->getPreviousCarrierName())
            ->setPreviousCarrierXDate($lead->getPreviousCarrierXDate())
            ->setPreviousCarrierPolice($lead->getPreviousCarrierPolice())
        ;

        $opportunity->setPrequalificationAutos($lead->getPrequalificationAutos());

        $opportunity->setPrequalificationDrivers($lead->getPrequalificationDrivers());

        $opportunity->setPrequalificationInsuredAddresses($lead->getPrequalificationInsuredAddresses());

        $opportunity->setAttachments($lead->getAttachments());

        $opportunity->setLeadEvents($lead->getLeadEvents());
        
        $em->persist($opportunity);
        $em->flush($lead);
        
        return $opportunity;
    }
    
    /**
     * Assigns a lead to a user
     * @param \ZesharCRM\Bundle\CoreBundle\Entity\Lead $lead
     * @param \ZesharCRM\Bundle\CoreBundle\Entity\User $assignee
     */
    public function assignLead(Lead $lead, User $assignee)
    {
        $em = $this->getEntityManager();
        $lead->setAssignee($assignee);
        $em->flush($lead);
    }
    
    /**
     * Switch a lead into CANCELLED status
     * @param \ZesharCRM\Bundle\CoreBundle\Entity\Lead $lead
     * @throws \BadMethodCallException When the lead was already in CANCELLED state
     */
    public function cancelLead(Lead $lead)
    {
        if (DealStatus::CANCELLED === $lead->getStatus()) {
            throw new \BadMethodCallException('This lead is already cancelled.');
        }
        
        $em = $this->getEntityManager();
        $lead->setStatus(DealStatus::CANCELLED);
        $em->flush($lead);
    }
    
    /**
     * Switch a lead into PENDING status
     * @param \ZesharCRM\Bundle\CoreBundle\Entity\Lead $lead
     * @throws \BadMethodCallException When the lead was already in PENDING state
     */
    public function reopenLead(Lead $lead)
    {
        if (DealStatus::PENDING === $lead->getStatus()) {
            throw new \BadMethodCallException('This lead is already open.');
        }
        
        $em = $this->getEntityManager();
        $lead->setStatus(DealStatus::PENDING);
        $em->flush($lead);
    }


    /**
     * Switch a lead into WARM type
     * @param \ZesharCRM\Bundle\CoreBundle\Entity\Lead $lead
     * @throws \BadMethodCallException
     */
    public function warmupLead(Lead $lead) {
        if (LeadType::WARM === $lead->getType()) {
            throw new \BadMethodCallException('This lead is already warm.');
        }
        if (DealStatus::PENDING !== $lead->getStatus()) {
            throw new \BadMethodCallException('This lead is closed.');
        }
        
        $em = $this->getEntityManager();
        $lead->setType(LeadType::WARM);
        $em->flush($lead);
    }

    public function createLead($contactCard, $product, $user)
    {
        $em = $this->getEntityManager();

        $lead = new Lead();

        $lead
            ->setName('X-Sell '.$product->getTitle())
            ->setStatus(DealStatus::PENDING)
            ->setType(LeadType::COLD)
            ->setCreator($user)
            ->setAssignee($user)
            ->setContactCard($contactCard)
            ->setLeadCategory($product)
        ;

        $em->persist($lead);

        $em->flush();

        return $lead;
    }

    public function fetchLeadsByAssignee(User $assignee, $count = 5)
    {
        $leads = $this->findBy(array('assignee' => $assignee->getId(), 'status' => DealStatus::PENDING), array('updatedAt' => 'DESC'), $count);
        return $leads;
    }

    public function getNextId(Lead $lead, $leadCampaign = '')
    {
        $em = $this->getEntityManager();
        $entityId = $lead->getId();
        $query = $em->createQueryBuilder()
            ->select('MIN(l.id)')
            ->from('ZesharCRMCoreBundle:Lead', 'l')
            ->where('l.id > :id')
            ->andWhere('l.status = :status')
            ->andWhere('l.deletedAt IS NULL')
            ->setParameter('id' , $entityId)
            ->setParameter('status', 1);
        if ($leadCampaign) {
            $query->andWhere('l.leadCampaign = :leadCampaign')
                ->setParameter('leadCampaign', $leadCampaign);
        }
        $id = $query
            ->getQuery()
            ->getSingleResult();

        return $id[1];
    }

    public function getFirstId(Lead $lead, $leadCampaign = '')
    {
        $em = $this->getEntityManager();
        $entityId = $lead->getId();
        $query = $em->createQueryBuilder()
            ->select('MIN(l.id)')
            ->from('ZesharCRMCoreBundle:Lead', 'l')
            ->where('l.id < :id')
            ->andWhere('l.status = :status')
            ->andWhere('l.deletedAt IS NULL')
            ->setParameter('id' , $entityId)
            ->setParameter('status', 1);
        if ($leadCampaign) {
            $query->andWhere('l.leadCampaign = :leadCampaign')
                ->setParameter('leadCampaign', $leadCampaign);
        }
        $id = $query
            ->getQuery()
            ->getSingleResult();

        return $id[1];
    }

    public function getSoldItemsByProducts()
    {
        $em = $this->getEntityManager();
        $query = $em->createQueryBuilder()
            ->select('IDENTITY(l.leadCategory) as product, COALESCE(SUM(DISTINCT l.quantity), 0) as soldItems, COALESCE(SUM(DISTINCT l.quotedAmount), 0) as quotedAmount' )
            ->from('ZesharCRMCoreBundle:Opportunity', 'l')
            ->where('l.status=:status')
            ->groupBy('l.leadCategory')
            ->setParameter('status', OpportunityStatus::SUCCESS_QUOTE);

        $result = $query->getQuery()->getResult();

        return $result;
    }
    
}
