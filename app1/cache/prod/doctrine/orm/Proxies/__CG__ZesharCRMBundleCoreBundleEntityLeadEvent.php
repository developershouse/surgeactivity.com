<?php

namespace Proxies\__CG__\ZesharCRM\Bundle\CoreBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class LeadEvent extends \ZesharCRM\Bundle\CoreBundle\Entity\LeadEvent implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'ZesharCRM\\Bundle\\CoreBundle\\Entity\\LeadEvent' . "\0" . 'id', '' . "\0" . 'ZesharCRM\\Bundle\\CoreBundle\\Entity\\LeadEvent' . "\0" . 'happensAt', '' . "\0" . 'ZesharCRM\\Bundle\\CoreBundle\\Entity\\LeadEvent' . "\0" . 'location', '' . "\0" . 'ZesharCRM\\Bundle\\CoreBundle\\Entity\\LeadEvent' . "\0" . 'type', '' . "\0" . 'ZesharCRM\\Bundle\\CoreBundle\\Entity\\LeadEvent' . "\0" . 'goal', '' . "\0" . 'ZesharCRM\\Bundle\\CoreBundle\\Entity\\LeadEvent' . "\0" . 'lead');
        }

        return array('__isInitialized__', '' . "\0" . 'ZesharCRM\\Bundle\\CoreBundle\\Entity\\LeadEvent' . "\0" . 'id', '' . "\0" . 'ZesharCRM\\Bundle\\CoreBundle\\Entity\\LeadEvent' . "\0" . 'happensAt', '' . "\0" . 'ZesharCRM\\Bundle\\CoreBundle\\Entity\\LeadEvent' . "\0" . 'location', '' . "\0" . 'ZesharCRM\\Bundle\\CoreBundle\\Entity\\LeadEvent' . "\0" . 'type', '' . "\0" . 'ZesharCRM\\Bundle\\CoreBundle\\Entity\\LeadEvent' . "\0" . 'goal', '' . "\0" . 'ZesharCRM\\Bundle\\CoreBundle\\Entity\\LeadEvent' . "\0" . 'lead');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (LeadEvent $proxy) {
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
    public function setGoal($goal)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGoal', array($goal));

        return parent::setGoal($goal);
    }

    /**
     * {@inheritDoc}
     */
    public function getGoal()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGoal', array());

        return parent::getGoal();
    }

    /**
     * {@inheritDoc}
     */
    public function setType($type)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setType', array($type));

        return parent::setType($type);
    }

    /**
     * {@inheritDoc}
     */
    public function getType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getType', array());

        return parent::getType();
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
    public function setHappensAt($happensAt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setHappensAt', array($happensAt));

        return parent::setHappensAt($happensAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getHappensAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHappensAt', array());

        return parent::getHappensAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setLocation($location)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLocation', array($location));

        return parent::setLocation($location);
    }

    /**
     * {@inheritDoc}
     */
    public function getLocation()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLocation', array());

        return parent::getLocation();
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

    /**
     * {@inheritDoc}
     */
    public function getGoalString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGoalString', array());

        return parent::getGoalString();
    }

}
