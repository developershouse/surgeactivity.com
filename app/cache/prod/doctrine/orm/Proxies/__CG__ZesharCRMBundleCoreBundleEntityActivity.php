<?php

namespace Proxies\__CG__\ZesharCRM\Bundle\CoreBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Activity extends \ZesharCRM\Bundle\CoreBundle\Entity\Activity implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'ZesharCRM\\Bundle\\CoreBundle\\Entity\\Activity' . "\0" . 'id', '' . "\0" . 'ZesharCRM\\Bundle\\CoreBundle\\Entity\\Activity' . "\0" . 'title', '' . "\0" . 'ZesharCRM\\Bundle\\CoreBundle\\Entity\\Activity' . "\0" . 'startsAt', '' . "\0" . 'ZesharCRM\\Bundle\\CoreBundle\\Entity\\Activity' . "\0" . 'finishesAt', '' . "\0" . 'ZesharCRM\\Bundle\\CoreBundle\\Entity\\Activity' . "\0" . 'startTime', '' . "\0" . 'ZesharCRM\\Bundle\\CoreBundle\\Entity\\Activity' . "\0" . 'endTime', '' . "\0" . 'ZesharCRM\\Bundle\\CoreBundle\\Entity\\Activity' . "\0" . 'creator', '' . "\0" . 'ZesharCRM\\Bundle\\CoreBundle\\Entity\\Activity' . "\0" . 'assignee', '' . "\0" . 'ZesharCRM\\Bundle\\CoreBundle\\Entity\\Activity' . "\0" . 'type', '' . "\0" . 'ZesharCRM\\Bundle\\CoreBundle\\Entity\\Activity' . "\0" . 'customType', '' . "\0" . 'ZesharCRM\\Bundle\\CoreBundle\\Entity\\Activity' . "\0" . 'lead', '' . "\0" . 'ZesharCRM\\Bundle\\CoreBundle\\Entity\\Activity' . "\0" . 'quantity', '' . "\0" . 'ZesharCRM\\Bundle\\CoreBundle\\Entity\\Activity' . "\0" . 'frequency', '' . "\0" . 'ZesharCRM\\Bundle\\CoreBundle\\Entity\\Activity' . "\0" . 'slot', '' . "\0" . 'ZesharCRM\\Bundle\\CoreBundle\\Entity\\Activity' . "\0" . 'slotString', '' . "\0" . 'ZesharCRM\\Bundle\\CoreBundle\\Entity\\Activity' . "\0" . 'frequenceString');
        }

        return array('__isInitialized__', '' . "\0" . 'ZesharCRM\\Bundle\\CoreBundle\\Entity\\Activity' . "\0" . 'id', '' . "\0" . 'ZesharCRM\\Bundle\\CoreBundle\\Entity\\Activity' . "\0" . 'title', '' . "\0" . 'ZesharCRM\\Bundle\\CoreBundle\\Entity\\Activity' . "\0" . 'startsAt', '' . "\0" . 'ZesharCRM\\Bundle\\CoreBundle\\Entity\\Activity' . "\0" . 'finishesAt', '' . "\0" . 'ZesharCRM\\Bundle\\CoreBundle\\Entity\\Activity' . "\0" . 'startTime', '' . "\0" . 'ZesharCRM\\Bundle\\CoreBundle\\Entity\\Activity' . "\0" . 'endTime', '' . "\0" . 'ZesharCRM\\Bundle\\CoreBundle\\Entity\\Activity' . "\0" . 'creator', '' . "\0" . 'ZesharCRM\\Bundle\\CoreBundle\\Entity\\Activity' . "\0" . 'assignee', '' . "\0" . 'ZesharCRM\\Bundle\\CoreBundle\\Entity\\Activity' . "\0" . 'type', '' . "\0" . 'ZesharCRM\\Bundle\\CoreBundle\\Entity\\Activity' . "\0" . 'customType', '' . "\0" . 'ZesharCRM\\Bundle\\CoreBundle\\Entity\\Activity' . "\0" . 'lead', '' . "\0" . 'ZesharCRM\\Bundle\\CoreBundle\\Entity\\Activity' . "\0" . 'quantity', '' . "\0" . 'ZesharCRM\\Bundle\\CoreBundle\\Entity\\Activity' . "\0" . 'frequency', '' . "\0" . 'ZesharCRM\\Bundle\\CoreBundle\\Entity\\Activity' . "\0" . 'slot', '' . "\0" . 'ZesharCRM\\Bundle\\CoreBundle\\Entity\\Activity' . "\0" . 'slotString', '' . "\0" . 'ZesharCRM\\Bundle\\CoreBundle\\Entity\\Activity' . "\0" . 'frequenceString');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Activity $proxy) {
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
    public function addLead(\ZesharCRM\Bundle\CoreBundle\Entity\LeadSubject $lead)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addLead', array($lead));

        return parent::addLead($lead);
    }

    /**
     * {@inheritDoc}
     */
    public function removeLead(\ZesharCRM\Bundle\CoreBundle\Entity\LeadSubject $lead)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeLead', array($lead));

        return parent::removeLead($lead);
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
    public function setTitle($title)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTitle', array($title));

        return parent::setTitle($title);
    }

    /**
     * {@inheritDoc}
     */
    public function getTitle()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTitle', array());

        return parent::getTitle();
    }

    /**
     * {@inheritDoc}
     */
    public function setStartsAt($startsAt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStartsAt', array($startsAt));

        return parent::setStartsAt($startsAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getStartsAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStartsAt', array());

        return parent::getStartsAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setFinishesAt($finishesAt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFinishesAt', array($finishesAt));

        return parent::setFinishesAt($finishesAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getFinishesAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFinishesAt', array());

        return parent::getFinishesAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreator($creator)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreator', array($creator));

        return parent::setCreator($creator);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreator()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreator', array());

        return parent::getCreator();
    }

    /**
     * {@inheritDoc}
     */
    public function setAssignee($assignee)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAssignee', array($assignee));

        return parent::setAssignee($assignee);
    }

    /**
     * {@inheritDoc}
     */
    public function getAssignee()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAssignee', array());

        return parent::getAssignee();
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
    public function setCustomType($customType)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCustomType', array($customType));

        return parent::setCustomType($customType);
    }

    /**
     * {@inheritDoc}
     */
    public function getCustomType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCustomType', array());

        return parent::getCustomType();
    }

    /**
     * {@inheritDoc}
     */
    public function getTypeString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTypeString', array());

        return parent::getTypeString();
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', array());

        return parent::__toString();
    }

    /**
     * {@inheritDoc}
     */
    public function setEndTime($endTime)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEndTime', array($endTime));

        return parent::setEndTime($endTime);
    }

    /**
     * {@inheritDoc}
     */
    public function getEndTime()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEndTime', array());

        return parent::getEndTime();
    }

    /**
     * {@inheritDoc}
     */
    public function getFrequencyString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFrequencyString', array());

        return parent::getFrequencyString();
    }

    /**
     * {@inheritDoc}
     */
    public function setFrequency($frequency)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFrequency', array($frequency));

        return parent::setFrequency($frequency);
    }

    /**
     * {@inheritDoc}
     */
    public function getFrequency()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFrequency', array());

        return parent::getFrequency();
    }

    /**
     * {@inheritDoc}
     */
    public function getQuantity()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getQuantity', array());

        return parent::getQuantity();
    }

    /**
     * {@inheritDoc}
     */
    public function setStartTime($startTime)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStartTime', array($startTime));

        return parent::setStartTime($startTime);
    }

    /**
     * {@inheritDoc}
     */
    public function getStartTime()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStartTime', array());

        return parent::getStartTime();
    }

    /**
     * {@inheritDoc}
     */
    public function setSlot($slot)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSlot', array($slot));

        return parent::setSlot($slot);
    }

    /**
     * {@inheritDoc}
     */
    public function getSlot()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSlot', array());

        return parent::getSlot();
    }

    /**
     * {@inheritDoc}
     */
    public function setSlotString($slotString)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSlotString', array($slotString));

        return parent::setSlotString($slotString);
    }

    /**
     * {@inheritDoc}
     */
    public function getSlotString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSlotString', array());

        return parent::getSlotString();
    }

}
