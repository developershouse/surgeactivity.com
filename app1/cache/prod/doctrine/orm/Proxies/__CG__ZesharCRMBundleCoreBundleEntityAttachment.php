<?php

namespace Proxies\__CG__\ZesharCRM\Bundle\CoreBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Attachment extends \ZesharCRM\Bundle\CoreBundle\Entity\Attachment implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'ZesharCRM\\Bundle\\CoreBundle\\Entity\\Attachment' . "\0" . 'id', '' . "\0" . 'ZesharCRM\\Bundle\\CoreBundle\\Entity\\Attachment' . "\0" . 'text', '' . "\0" . 'ZesharCRM\\Bundle\\CoreBundle\\Entity\\Attachment' . "\0" . 'file', '' . "\0" . 'ZesharCRM\\Bundle\\CoreBundle\\Entity\\Attachment' . "\0" . 'filename', '' . "\0" . 'ZesharCRM\\Bundle\\CoreBundle\\Entity\\Attachment' . "\0" . 'objectId', '' . "\0" . 'ZesharCRM\\Bundle\\CoreBundle\\Entity\\Attachment' . "\0" . 'objectType', '' . "\0" . 'ZesharCRM\\Bundle\\CoreBundle\\Entity\\Attachment' . "\0" . 'createdAt', '' . "\0" . 'ZesharCRM\\Bundle\\CoreBundle\\Entity\\Attachment' . "\0" . 'updatedAt', '' . "\0" . 'ZesharCRM\\Bundle\\CoreBundle\\Entity\\Attachment' . "\0" . 'creator', '' . "\0" . 'ZesharCRM\\Bundle\\CoreBundle\\Entity\\Attachment' . "\0" . 'leadAttachment', '' . "\0" . 'ZesharCRM\\Bundle\\CoreBundle\\Entity\\Attachment' . "\0" . 'opportunityAttachment');
        }

        return array('__isInitialized__', '' . "\0" . 'ZesharCRM\\Bundle\\CoreBundle\\Entity\\Attachment' . "\0" . 'id', '' . "\0" . 'ZesharCRM\\Bundle\\CoreBundle\\Entity\\Attachment' . "\0" . 'text', '' . "\0" . 'ZesharCRM\\Bundle\\CoreBundle\\Entity\\Attachment' . "\0" . 'file', '' . "\0" . 'ZesharCRM\\Bundle\\CoreBundle\\Entity\\Attachment' . "\0" . 'filename', '' . "\0" . 'ZesharCRM\\Bundle\\CoreBundle\\Entity\\Attachment' . "\0" . 'objectId', '' . "\0" . 'ZesharCRM\\Bundle\\CoreBundle\\Entity\\Attachment' . "\0" . 'objectType', '' . "\0" . 'ZesharCRM\\Bundle\\CoreBundle\\Entity\\Attachment' . "\0" . 'createdAt', '' . "\0" . 'ZesharCRM\\Bundle\\CoreBundle\\Entity\\Attachment' . "\0" . 'updatedAt', '' . "\0" . 'ZesharCRM\\Bundle\\CoreBundle\\Entity\\Attachment' . "\0" . 'creator', '' . "\0" . 'ZesharCRM\\Bundle\\CoreBundle\\Entity\\Attachment' . "\0" . 'leadAttachment', '' . "\0" . 'ZesharCRM\\Bundle\\CoreBundle\\Entity\\Attachment' . "\0" . 'opportunityAttachment');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Attachment $proxy) {
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
    public function getFilename()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFilename', array());

        return parent::getFilename();
    }

    /**
     * {@inheritDoc}
     */
    public function setFilename($filename)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFilename', array($filename));

        return parent::setFilename($filename);
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
    public function setText($text)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setText', array($text));

        return parent::setText($text);
    }

    /**
     * {@inheritDoc}
     */
    public function getText()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getText', array());

        return parent::getText();
    }

    /**
     * {@inheritDoc}
     */
    public function setFile($file = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFile', array($file));

        return parent::setFile($file);
    }

    /**
     * {@inheritDoc}
     */
    public function getFile()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFile', array());

        return parent::getFile();
    }

    /**
     * {@inheritDoc}
     */
    public function getDownloadUrl()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDownloadUrl', array());

        return parent::getDownloadUrl();
    }

    /**
     * {@inheritDoc}
     */
    public function upload()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'upload', array());

        return parent::upload();
    }

    /**
     * {@inheritDoc}
     */
    public function lifecycleFileUpload()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'lifecycleFileUpload', array());

        return parent::lifecycleFileUpload();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedAt($createdAt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedAt', array($createdAt));

        return parent::setCreatedAt($createdAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreatedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreatedAt', array());

        return parent::getCreatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdatedAt($updatedAt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdatedAt', array($updatedAt));

        return parent::setUpdatedAt($updatedAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getUpdatedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdatedAt', array());

        return parent::getUpdatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreator(\ZesharCRM\Bundle\CoreBundle\Entity\User $creator = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreator', array($creator));

        return parent::setCreator($creator);
    }

    /**
     * {@inheritDoc}
     */
    public function setLeadAttachment(\ZesharCRM\Bundle\CoreBundle\Entity\LeadAttachment $leadAttachment = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLeadAttachment', array($leadAttachment));

        return parent::setLeadAttachment($leadAttachment);
    }

    /**
     * {@inheritDoc}
     */
    public function getOpportunityAttachment()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOpportunityAttachment', array());

        return parent::getOpportunityAttachment();
    }

    /**
     * {@inheritDoc}
     */
    public function setOpportunityAttachment(\ZesharCRM\Bundle\CoreBundle\Entity\OpportunityAttachment $opportunityAttachment = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOpportunityAttachment', array($opportunityAttachment));

        return parent::setOpportunityAttachment($opportunityAttachment);
    }

    /**
     * {@inheritDoc}
     */
    public function getLeadAttachment()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLeadAttachment', array());

        return parent::getLeadAttachment();
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
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', array());

        return parent::__toString();
    }

    /**
     * {@inheritDoc}
     */
    public function getDownloadLink()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDownloadLink', array());

        return parent::getDownloadLink();
    }

}
