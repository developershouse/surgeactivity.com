<?php

namespace Proxies\__CG__\ZesharCRM\Bundle\GoalsBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class GoalAssign extends \ZesharCRM\Bundle\GoalsBundle\Entity\GoalAssign implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'ZesharCRM\\Bundle\\GoalsBundle\\Entity\\GoalAssign' . "\0" . 'id', '' . "\0" . 'ZesharCRM\\Bundle\\GoalsBundle\\Entity\\GoalAssign' . "\0" . 'user', '' . "\0" . 'ZesharCRM\\Bundle\\GoalsBundle\\Entity\\GoalAssign' . "\0" . 'goal', '' . "\0" . 'ZesharCRM\\Bundle\\GoalsBundle\\Entity\\GoalAssign' . "\0" . 'point', '' . "\0" . 'ZesharCRM\\Bundle\\GoalsBundle\\Entity\\GoalAssign' . "\0" . 'percent', '' . "\0" . 'ZesharCRM\\Bundle\\GoalsBundle\\Entity\\GoalAssign' . "\0" . 'items');
        }

        return array('__isInitialized__', '' . "\0" . 'ZesharCRM\\Bundle\\GoalsBundle\\Entity\\GoalAssign' . "\0" . 'id', '' . "\0" . 'ZesharCRM\\Bundle\\GoalsBundle\\Entity\\GoalAssign' . "\0" . 'user', '' . "\0" . 'ZesharCRM\\Bundle\\GoalsBundle\\Entity\\GoalAssign' . "\0" . 'goal', '' . "\0" . 'ZesharCRM\\Bundle\\GoalsBundle\\Entity\\GoalAssign' . "\0" . 'point', '' . "\0" . 'ZesharCRM\\Bundle\\GoalsBundle\\Entity\\GoalAssign' . "\0" . 'percent', '' . "\0" . 'ZesharCRM\\Bundle\\GoalsBundle\\Entity\\GoalAssign' . "\0" . 'items');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (GoalAssign $proxy) {
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
    public function setUser($user)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUser', array($user));

        return parent::setUser($user);
    }

    /**
     * {@inheritDoc}
     */
    public function getUser()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUser', array());

        return parent::getUser();
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
    public function setPoint($point)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPoint', array($point));

        return parent::setPoint($point);
    }

    /**
     * {@inheritDoc}
     */
    public function getPoint()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPoint', array());

        return parent::getPoint();
    }

    /**
     * {@inheritDoc}
     */
    public function setPercent($percent)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPercent', array($percent));

        return parent::setPercent($percent);
    }

    /**
     * {@inheritDoc}
     */
    public function getPercent()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPercent', array());

        return parent::getPercent();
    }

    /**
     * {@inheritDoc}
     */
    public function setItems($items)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setItems', array($items));

        return parent::setItems($items);
    }

    /**
     * {@inheritDoc}
     */
    public function getItems()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getItems', array());

        return parent::getItems();
    }

}
