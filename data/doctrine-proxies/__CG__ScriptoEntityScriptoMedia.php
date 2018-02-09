<?php

namespace DoctrineProxies\__CG__\Scripto\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class ScriptoMedia extends \Scripto\Entity\ScriptoMedia implements \Doctrine\ORM\Proxy\Proxy
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
    public static $lazyPropertiesDefaults = [];



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
            return ['__isInitialized__', 'id', 'scriptoItem', 'media', 'position', 'completedBy', 'approvedBy', 'synced', 'edited', 'completed', 'approved', 'text'];
        }

        return ['__isInitialized__', 'id', 'scriptoItem', 'media', 'position', 'completedBy', 'approvedBy', 'synced', 'edited', 'completed', 'approved', 'text'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (ScriptoMedia $proxy) {
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
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
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


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setScriptoItem(\Scripto\Entity\ScriptoItem $scriptoItem)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setScriptoItem', [$scriptoItem]);

        return parent::setScriptoItem($scriptoItem);
    }

    /**
     * {@inheritDoc}
     */
    public function getScriptoItem()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getScriptoItem', []);

        return parent::getScriptoItem();
    }

    /**
     * {@inheritDoc}
     */
    public function setMedia(\Omeka\Entity\Media $media)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMedia', [$media]);

        return parent::setMedia($media);
    }

    /**
     * {@inheritDoc}
     */
    public function getMedia()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMedia', []);

        return parent::getMedia();
    }

    /**
     * {@inheritDoc}
     */
    public function setPosition($position)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPosition', [$position]);

        return parent::setPosition($position);
    }

    /**
     * {@inheritDoc}
     */
    public function getPosition()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPosition', []);

        return parent::getPosition();
    }

    /**
     * {@inheritDoc}
     */
    public function setCompletedBy($completedBy)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCompletedBy', [$completedBy]);

        return parent::setCompletedBy($completedBy);
    }

    /**
     * {@inheritDoc}
     */
    public function getCompletedBy()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCompletedBy', []);

        return parent::getCompletedBy();
    }

    /**
     * {@inheritDoc}
     */
    public function setApprovedBy(\Omeka\Entity\User $approvedBy = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setApprovedBy', [$approvedBy]);

        return parent::setApprovedBy($approvedBy);
    }

    /**
     * {@inheritDoc}
     */
    public function getApprovedBy()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getApprovedBy', []);

        return parent::getApprovedBy();
    }

    /**
     * {@inheritDoc}
     */
    public function setSynced(\DateTime $dateTime)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSynced', [$dateTime]);

        return parent::setSynced($dateTime);
    }

    /**
     * {@inheritDoc}
     */
    public function getSynced()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSynced', []);

        return parent::getSynced();
    }

    /**
     * {@inheritDoc}
     */
    public function setEdited(\DateTime $dateTime = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEdited', [$dateTime]);

        return parent::setEdited($dateTime);
    }

    /**
     * {@inheritDoc}
     */
    public function getEdited()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEdited', []);

        return parent::getEdited();
    }

    /**
     * {@inheritDoc}
     */
    public function setCompleted(\DateTime $dateTime = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCompleted', [$dateTime]);

        return parent::setCompleted($dateTime);
    }

    /**
     * {@inheritDoc}
     */
    public function getCompleted()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCompleted', []);

        return parent::getCompleted();
    }

    /**
     * {@inheritDoc}
     */
    public function setApproved(\DateTime $dateTime = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setApproved', [$dateTime]);

        return parent::setApproved($dateTime);
    }

    /**
     * {@inheritDoc}
     */
    public function getApproved()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getApproved', []);

        return parent::getApproved();
    }

    /**
     * {@inheritDoc}
     */
    public function setText($text)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setText', [$text]);

        return parent::setText($text);
    }

    /**
     * {@inheritDoc}
     */
    public function getText()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getText', []);

        return parent::getText();
    }

    /**
     * {@inheritDoc}
     */
    public function getMediawikiPageTitle()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMediawikiPageTitle', []);

        return parent::getMediawikiPageTitle();
    }

    /**
     * {@inheritDoc}
     */
    public function prePersist(\Doctrine\ORM\Event\LifecycleEventArgs $eventArgs)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'prePersist', [$eventArgs]);

        return parent::prePersist($eventArgs);
    }

    /**
     * {@inheritDoc}
     */
    public function getResourceId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getResourceId', []);

        return parent::getResourceId();
    }

}
