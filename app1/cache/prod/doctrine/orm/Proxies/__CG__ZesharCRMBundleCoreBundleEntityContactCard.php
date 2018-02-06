<?php

namespace Proxies\__CG__\ZesharCRM\Bundle\CoreBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class ContactCard extends \ZesharCRM\Bundle\CoreBundle\Entity\ContactCard implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'ZesharCRM\\Bundle\\CoreBundle\\Entity\\ContactCard' . "\0" . 'id', '' . "\0" . 'ZesharCRM\\Bundle\\CoreBundle\\Entity\\ContactCard' . "\0" . 'networkType', '' . "\0" . 'ZesharCRM\\Bundle\\CoreBundle\\Entity\\ContactCard' . "\0" . 'type', '' . "\0" . 'ZesharCRM\\Bundle\\CoreBundle\\Entity\\ContactCard' . "\0" . 'name', '' . "\0" . 'ZesharCRM\\Bundle\\CoreBundle\\Entity\\ContactCard' . "\0" . 'value', '' . "\0" . 'ZesharCRM\\Bundle\\CoreBundle\\Entity\\ContactCard' . "\0" . 'contacts', '' . "\0" . 'ZesharCRM\\Bundle\\CoreBundle\\Entity\\ContactCard' . "\0" . 'relatedLeads', '' . "\0" . 'ZesharCRM\\Bundle\\CoreBundle\\Entity\\ContactCard' . "\0" . 'relatedOpportunities', '' . "\0" . 'ZesharCRM\\Bundle\\CoreBundle\\Entity\\ContactCard' . "\0" . 'streetAddress', '' . "\0" . 'ZesharCRM\\Bundle\\CoreBundle\\Entity\\ContactCard' . "\0" . 'city', '' . "\0" . 'ZesharCRM\\Bundle\\CoreBundle\\Entity\\ContactCard' . "\0" . 'state', '' . "\0" . 'ZesharCRM\\Bundle\\CoreBundle\\Entity\\ContactCard' . "\0" . 'zip', '' . "\0" . 'ZesharCRM\\Bundle\\CoreBundle\\Entity\\ContactCard' . "\0" . 'firstName', '' . "\0" . 'ZesharCRM\\Bundle\\CoreBundle\\Entity\\ContactCard' . "\0" . 'lastName', '' . "\0" . 'ZesharCRM\\Bundle\\CoreBundle\\Entity\\ContactCard' . "\0" . 'isOpportunity', '' . "\0" . 'ZesharCRM\\Bundle\\CoreBundle\\Entity\\ContactCard' . "\0" . 'fullName', '' . "\0" . 'ZesharCRM\\Bundle\\CoreBundle\\Entity\\ContactCard' . "\0" . 'middleInitial', '' . "\0" . 'ZesharCRM\\Bundle\\CoreBundle\\Entity\\ContactCard' . "\0" . 'other');
        }

        return array('__isInitialized__', '' . "\0" . 'ZesharCRM\\Bundle\\CoreBundle\\Entity\\ContactCard' . "\0" . 'id', '' . "\0" . 'ZesharCRM\\Bundle\\CoreBundle\\Entity\\ContactCard' . "\0" . 'networkType', '' . "\0" . 'ZesharCRM\\Bundle\\CoreBundle\\Entity\\ContactCard' . "\0" . 'type', '' . "\0" . 'ZesharCRM\\Bundle\\CoreBundle\\Entity\\ContactCard' . "\0" . 'name', '' . "\0" . 'ZesharCRM\\Bundle\\CoreBundle\\Entity\\ContactCard' . "\0" . 'value', '' . "\0" . 'ZesharCRM\\Bundle\\CoreBundle\\Entity\\ContactCard' . "\0" . 'contacts', '' . "\0" . 'ZesharCRM\\Bundle\\CoreBundle\\Entity\\ContactCard' . "\0" . 'relatedLeads', '' . "\0" . 'ZesharCRM\\Bundle\\CoreBundle\\Entity\\ContactCard' . "\0" . 'relatedOpportunities', '' . "\0" . 'ZesharCRM\\Bundle\\CoreBundle\\Entity\\ContactCard' . "\0" . 'streetAddress', '' . "\0" . 'ZesharCRM\\Bundle\\CoreBundle\\Entity\\ContactCard' . "\0" . 'city', '' . "\0" . 'ZesharCRM\\Bundle\\CoreBundle\\Entity\\ContactCard' . "\0" . 'state', '' . "\0" . 'ZesharCRM\\Bundle\\CoreBundle\\Entity\\ContactCard' . "\0" . 'zip', '' . "\0" . 'ZesharCRM\\Bundle\\CoreBundle\\Entity\\ContactCard' . "\0" . 'firstName', '' . "\0" . 'ZesharCRM\\Bundle\\CoreBundle\\Entity\\ContactCard' . "\0" . 'lastName', '' . "\0" . 'ZesharCRM\\Bundle\\CoreBundle\\Entity\\ContactCard' . "\0" . 'isOpportunity', '' . "\0" . 'ZesharCRM\\Bundle\\CoreBundle\\Entity\\ContactCard' . "\0" . 'fullName', '' . "\0" . 'ZesharCRM\\Bundle\\CoreBundle\\Entity\\ContactCard' . "\0" . 'middleInitial', '' . "\0" . 'ZesharCRM\\Bundle\\CoreBundle\\Entity\\ContactCard' . "\0" . 'other');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (ContactCard $proxy) {
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
     * {@inheritDoc}
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());

        parent::__clone();
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
    public function setNetworkType($networkType)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNetworkType', array($networkType));

        return parent::setNetworkType($networkType);
    }

    /**
     * {@inheritDoc}
     */
    public function getNetworkType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNetworkType', array());

        return parent::getNetworkType();
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
    public function setName($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', array($name));

        return parent::setName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', array());

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function setValue($value)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setValue', array($value));

        return parent::setValue($value);
    }

    /**
     * {@inheritDoc}
     */
    public function getValue()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getValue', array());

        return parent::getValue();
    }

    /**
     * {@inheritDoc}
     */
    public function addContact(\ZesharCRM\Bundle\CoreBundle\Entity\Contact $contacts)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addContact', array($contacts));

        return parent::addContact($contacts);
    }

    /**
     * {@inheritDoc}
     */
    public function removeContact(\ZesharCRM\Bundle\CoreBundle\Entity\Contact $contacts)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeContact', array($contacts));

        return parent::removeContact($contacts);
    }

    /**
     * {@inheritDoc}
     */
    public function getContacts()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getContacts', array());

        return parent::getContacts();
    }

    /**
     * {@inheritDoc}
     */
    public function addRelatedLead(\ZesharCRM\Bundle\CoreBundle\Entity\Lead $relatedLeads)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addRelatedLead', array($relatedLeads));

        return parent::addRelatedLead($relatedLeads);
    }

    /**
     * {@inheritDoc}
     */
    public function removeRelatedLead(\ZesharCRM\Bundle\CoreBundle\Entity\Lead $relatedLeads)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeRelatedLead', array($relatedLeads));

        return parent::removeRelatedLead($relatedLeads);
    }

    /**
     * {@inheritDoc}
     */
    public function getRelatedLeads()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRelatedLeads', array());

        return parent::getRelatedLeads();
    }

    /**
     * {@inheritDoc}
     */
    public function addRelatedOpportunity(\ZesharCRM\Bundle\CoreBundle\Entity\Opportunity $relatedOpportunities)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addRelatedOpportunity', array($relatedOpportunities));

        return parent::addRelatedOpportunity($relatedOpportunities);
    }

    /**
     * {@inheritDoc}
     */
    public function removeRelatedOpportunity(\ZesharCRM\Bundle\CoreBundle\Entity\Opportunity $relatedOpportunities)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeRelatedOpportunity', array($relatedOpportunities));

        return parent::removeRelatedOpportunity($relatedOpportunities);
    }

    /**
     * {@inheritDoc}
     */
    public function getRelatedOpportunities()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRelatedOpportunities', array());

        return parent::getRelatedOpportunities();
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
    public function setStreetAddress($streetAddress)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStreetAddress', array($streetAddress));

        return parent::setStreetAddress($streetAddress);
    }

    /**
     * {@inheritDoc}
     */
    public function getStreetAddress()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStreetAddress', array());

        return parent::getStreetAddress();
    }

    /**
     * {@inheritDoc}
     */
    public function setCity($city)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCity', array($city));

        return parent::setCity($city);
    }

    /**
     * {@inheritDoc}
     */
    public function getCity()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCity', array());

        return parent::getCity();
    }

    /**
     * {@inheritDoc}
     */
    public function setState($state)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setState', array($state));

        return parent::setState($state);
    }

    /**
     * {@inheritDoc}
     */
    public function getState()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getState', array());

        return parent::getState();
    }

    /**
     * {@inheritDoc}
     */
    public function setZip($zip)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setZip', array($zip));

        return parent::setZip($zip);
    }

    /**
     * {@inheritDoc}
     */
    public function getZip()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getZip', array());

        return parent::getZip();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsOpportunity($isOpportunity)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsOpportunity', array($isOpportunity));

        return parent::setIsOpportunity($isOpportunity);
    }

    /**
     * {@inheritDoc}
     */
    public function getIsOpportunity()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsOpportunity', array());

        return parent::getIsOpportunity();
    }

    /**
     * {@inheritDoc}
     */
    public function getMiddleInitial()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMiddleInitial', array());

        return parent::getMiddleInitial();
    }

    /**
     * {@inheritDoc}
     */
    public function setMiddleInitial($middleInitial)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMiddleInitial', array($middleInitial));

        return parent::setMiddleInitial($middleInitial);
    }

    /**
     * {@inheritDoc}
     */
    public function setFirstName($firstName)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFirstName', array($firstName));

        return parent::setFirstName($firstName);
    }

    /**
     * {@inheritDoc}
     */
    public function getFirstName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFirstName', array());

        return parent::getFirstName();
    }

    /**
     * {@inheritDoc}
     */
    public function setLastName($lastName)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLastName', array($lastName));

        return parent::setLastName($lastName);
    }

    /**
     * {@inheritDoc}
     */
    public function getLastName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLastName', array());

        return parent::getLastName();
    }

    /**
     * {@inheritDoc}
     */
    public function getPhone()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPhone', array());

        return parent::getPhone();
    }

    /**
     * {@inheritDoc}
     */
    public function getGenericPhone()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGenericPhone', array());

        return parent::getGenericPhone();
    }

    /**
     * {@inheritDoc}
     */
    public function getCellPhone()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCellPhone', array());

        return parent::getCellPhone();
    }

    /**
     * {@inheritDoc}
     */
    public function getWorkPhone()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getWorkPhone', array());

        return parent::getWorkPhone();
    }

    /**
     * {@inheritDoc}
     */
    public function getEmail()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmail', array());

        return parent::getEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function getSkype()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSkype', array());

        return parent::getSkype();
    }

    /**
     * {@inheritDoc}
     */
    public function getTwitter()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTwitter', array());

        return parent::getTwitter();
    }

    /**
     * {@inheritDoc}
     */
    public function getCustomContacts()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCustomContacts', array());

        return parent::getCustomContacts();
    }

    /**
     * {@inheritDoc}
     */
    public function getCustomContactsString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCustomContactsString', array());

        return parent::getCustomContactsString();
    }

    /**
     * {@inheritDoc}
     */
    public function getCallStatusString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCallStatusString', array());

        return parent::getCallStatusString();
    }

    /**
     * {@inheritDoc}
     */
    public function getFullName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFullName', array());

        return parent::getFullName();
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
    public function getTypeStringWithNetworkType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTypeStringWithNetworkType', array());

        return parent::getTypeStringWithNetworkType();
    }

    /**
     * {@inheritDoc}
     */
    public function getNetworkTypeString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNetworkTypeString', array());

        return parent::getNetworkTypeString();
    }

    /**
     * {@inheritDoc}
     */
    public function setOther($other)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOther', array($other));

        return parent::setOther($other);
    }

    /**
     * {@inheritDoc}
     */
    public function getOther()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOther', array());

        return parent::getOther();
    }

    /**
     * {@inheritDoc}
     */
    public function zipCodeValidation(\Symfony\Component\Validator\ExecutionContext $context)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'zipCodeValidation', array($context));

        return parent::zipCodeValidation($context);
    }

}
