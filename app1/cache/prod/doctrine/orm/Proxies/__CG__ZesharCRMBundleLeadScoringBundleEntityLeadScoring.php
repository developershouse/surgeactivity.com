<?php

namespace Proxies\__CG__\ZesharCRM\Bundle\LeadScoringBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class LeadScoring extends \ZesharCRM\Bundle\LeadScoringBundle\Entity\LeadScoring implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', '' . "\0" . 'ZesharCRM\\Bundle\\LeadScoringBundle\\Entity\\LeadScoring' . "\0" . 'id', '' . "\0" . 'ZesharCRM\\Bundle\\LeadScoringBundle\\Entity\\LeadScoring' . "\0" . 'scoring', '' . "\0" . 'ZesharCRM\\Bundle\\LeadScoringBundle\\Entity\\LeadScoring' . "\0" . 'total', '' . "\0" . 'ZesharCRM\\Bundle\\LeadScoringBundle\\Entity\\LeadScoring' . "\0" . 'opportunity', '' . "\0" . 'ZesharCRM\\Bundle\\LeadScoringBundle\\Entity\\LeadScoring' . "\0" . 'lead');
        }

        return array('__isInitialized__', '' . "\0" . 'ZesharCRM\\Bundle\\LeadScoringBundle\\Entity\\LeadScoring' . "\0" . 'id', '' . "\0" . 'ZesharCRM\\Bundle\\LeadScoringBundle\\Entity\\LeadScoring' . "\0" . 'scoring', '' . "\0" . 'ZesharCRM\\Bundle\\LeadScoringBundle\\Entity\\LeadScoring' . "\0" . 'total', '' . "\0" . 'ZesharCRM\\Bundle\\LeadScoringBundle\\Entity\\LeadScoring' . "\0" . 'opportunity', '' . "\0" . 'ZesharCRM\\Bundle\\LeadScoringBundle\\Entity\\LeadScoring' . "\0" . 'lead');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (LeadScoring $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setScoring($scoring)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setScoring', array($scoring));

        return parent::setScoring($scoring);
    }

    /**
     * {@inheritDoc}
     */
    public function getScoring()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getScoring', array());

        return parent::getScoring();
    }

    /**
     * {@inheritDoc}
     */
    public function setTotal($total)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTotal', array($total));

        return parent::setTotal($total);
    }

    /**
     * {@inheritDoc}
     */
    public function getTotal()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTotal', array());

        return parent::getTotal();
    }

    /**
     * {@inheritDoc}
     */
    public function setOpportunity(\ZesharCRM\Bundle\CoreBundle\Entity\Opportunity $opportunity = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOpportunity', array($opportunity));

        return parent::setOpportunity($opportunity);
    }

    /**
     * {@inheritDoc}
     */
    public function getOpportunity()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOpportunity', array());

        return parent::getOpportunity();
    }

    /**
     * {@inheritDoc}
     */
    public function setLead(\ZesharCRM\Bundle\CoreBundle\Entity\Lead $lead = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLead', array($lead));

        return parent::setLead($lead);
    }

    /**
     * {@inheritDoc}
     */
    public function getLead()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLead', array());

        return parent::getLead();
    }

}
