<?php

namespace XLite\Model\Proxy\__CG__\XLite\Model;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Zone extends \XLite\Model\Zone implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;

            if (method_exists($this, "__wakeup")) {
                // call this after __isInitialized__to avoid infinite recursion
                // but before loading to emulate what ClassMetadata::newInstance()
                // provides.
                $this->__wakeup();
            }

            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }

    /** @private */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    
    public function getZoneCountries($excluded = false)
    {
        $this->__load();
        return parent::getZoneCountries($excluded);
    }

    public function getZoneStates($excluded = false)
    {
        $this->__load();
        return parent::getZoneStates($excluded);
    }

    public function getZoneCities($asString = false)
    {
        $this->__load();
        return parent::getZoneCities($asString);
    }

    public function getZoneZipCodes($asString = false)
    {
        $this->__load();
        return parent::getZoneZipCodes($asString);
    }

    public function getZoneAddresses($asString = false)
    {
        $this->__load();
        return parent::getZoneAddresses($asString);
    }

    public function hasZoneElements()
    {
        $this->__load();
        return parent::hasZoneElements();
    }

    public function getElementsByType($elementType)
    {
        $this->__load();
        return parent::getElementsByType($elementType);
    }

    public function getZoneWeight($address)
    {
        $this->__load();
        return parent::getZoneWeight($address);
    }

    public function getZoneId()
    {
        $this->__load();
        return parent::getZoneId();
    }

    public function setZoneName($zoneName)
    {
        $this->__load();
        return parent::setZoneName($zoneName);
    }

    public function getZoneName()
    {
        $this->__load();
        return parent::getZoneName();
    }

    public function setIsDefault($isDefault)
    {
        $this->__load();
        return parent::setIsDefault($isDefault);
    }

    public function getIsDefault()
    {
        $this->__load();
        return parent::getIsDefault();
    }

    public function addZoneElements(\XLite\Model\ZoneElement $zoneElements)
    {
        $this->__load();
        return parent::addZoneElements($zoneElements);
    }

    public function getZoneElements()
    {
        $this->__load();
        return parent::getZoneElements();
    }

    public function addShippingMarkups(\XLite\Model\Shipping\Markup $shippingMarkups)
    {
        $this->__load();
        return parent::addShippingMarkups($shippingMarkups);
    }

    public function getShippingMarkups()
    {
        $this->__load();
        return parent::getShippingMarkups();
    }

    public function map(array $data)
    {
        $this->__load();
        return parent::map($data);
    }

    public function __get($name)
    {
        $this->__load();
        return parent::__get($name);
    }

    public function __set($name, $value)
    {
        $this->__load();
        return parent::__set($name, $value);
    }

    public function __isset($name)
    {
        $this->__load();
        return parent::__isset($name);
    }

    public function __unset($name)
    {
        $this->__load();
        return parent::__unset($name);
    }

    public function getRepository()
    {
        $this->__load();
        return parent::getRepository();
    }

    public function checkCache()
    {
        $this->__load();
        return parent::checkCache();
    }

    public function detach()
    {
        $this->__load();
        return parent::detach();
    }

    public function __call($method, array $args = array (
))
    {
        $this->__load();
        return parent::__call($method, $args);
    }

    public function setterProperty($property, $value)
    {
        $this->__load();
        return parent::setterProperty($property, $value);
    }

    public function getterProperty($property)
    {
        $this->__load();
        return parent::getterProperty($property);
    }

    public function isPersistent()
    {
        $this->__load();
        return parent::isPersistent();
    }

    public function isDetached()
    {
        $this->__load();
        return parent::isDetached();
    }

    public function getUniqueIdentifierName()
    {
        $this->__load();
        return parent::getUniqueIdentifierName();
    }

    public function getUniqueIdentifier()
    {
        $this->__load();
        return parent::getUniqueIdentifier();
    }

    public function update()
    {
        $this->__load();
        return parent::update();
    }

    public function create()
    {
        $this->__load();
        return parent::create();
    }

    public function delete()
    {
        $this->__load();
        return parent::delete();
    }

    public function processFiles($field, array $data)
    {
        $this->__load();
        return parent::processFiles($field, $data);
    }

    public function cloneEntity()
    {
        $this->__load();
        return parent::cloneEntity();
    }

    public function prepareEntityBeforeCommit($type)
    {
        $this->__load();
        return parent::prepareEntityBeforeCommit($type);
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'zone_id', 'zone_name', 'is_default', 'zone_elements', 'shipping_markups');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields AS $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}