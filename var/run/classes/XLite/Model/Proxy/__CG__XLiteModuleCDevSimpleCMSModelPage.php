<?php

namespace XLite\Model\Proxy\__CG__\XLite\Module\CDev\SimpleCMS\Model;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Page extends \XLite\Module\CDev\SimpleCMS\Model\Page implements \Doctrine\ORM\Proxy\Proxy
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

    
    public function getOpenGraphMetaTags($preprocessed = true)
    {
        $this->__load();
        return parent::getOpenGraphMetaTags($preprocessed);
    }

    public function setShowSocialButtons($showSocialButtons)
    {
        $this->__load();
        return parent::setShowSocialButtons($showSocialButtons);
    }

    public function setOgMeta($ogMeta)
    {
        $this->__load();
        return parent::setOgMeta($ogMeta);
    }

    public function getOgMeta()
    {
        $this->__load();
        return parent::getOgMeta();
    }

    public function getShowSocialButtons()
    {
        $this->__load();
        return parent::getShowSocialButtons();
    }

    public function getFrontURL()
    {
        $this->__load();
        return parent::getFrontURL();
    }

    public function generateCleanURL()
    {
        $this->__load();
        return parent::generateCleanURL();
    }

    public function getId()
    {
        $this->__load();
        return parent::getId();
    }

    public function setEnabled($enabled)
    {
        $this->__load();
        return parent::setEnabled($enabled);
    }

    public function getEnabled()
    {
        $this->__load();
        return parent::getEnabled();
    }

    public function setCleanURL($cleanURL)
    {
        $this->__load();
        return parent::setCleanURL($cleanURL);
    }

    public function getCleanURL()
    {
        $this->__load();
        return parent::getCleanURL();
    }

    public function setImage(\XLite\Module\CDev\SimpleCMS\Model\Image\Page\Image $image = NULL)
    {
        $this->__load();
        return parent::setImage($image);
    }

    public function getImage()
    {
        $this->__load();
        return parent::getImage();
    }

    public function getName()
    {
        $this->__load();
        return parent::getName();
    }

    public function setName($value)
    {
        $this->__load();
        return parent::setName($value);
    }

    public function getTeaser()
    {
        $this->__load();
        return parent::getTeaser();
    }

    public function setTeaser($value)
    {
        $this->__load();
        return parent::setTeaser($value);
    }

    public function getBody()
    {
        $this->__load();
        return parent::getBody();
    }

    public function setBody($value)
    {
        $this->__load();
        return parent::setBody($value);
    }

    public function getMetaKeywords()
    {
        $this->__load();
        return parent::getMetaKeywords();
    }

    public function setMetaKeywords($value)
    {
        $this->__load();
        return parent::setMetaKeywords($value);
    }

    public function prepareBeforeSave()
    {
        $this->__load();
        return parent::prepareBeforeSave();
    }

    public function setEditLanguage($code)
    {
        $this->__load();
        return parent::setEditLanguage($code);
    }

    public function getTranslations()
    {
        $this->__load();
        return parent::getTranslations();
    }

    public function addTranslations(\XLite\Model\Base\Translation $translation)
    {
        $this->__load();
        return parent::addTranslations($translation);
    }

    public function getTranslation($code = NULL, $allowEmptyResult = false)
    {
        $this->__load();
        return parent::getTranslation($code, $allowEmptyResult);
    }

    public function getHardTranslation($code = NULL)
    {
        $this->__load();
        return parent::getHardTranslation($code);
    }

    public function getSoftTranslation($code = NULL)
    {
        $this->__load();
        return parent::getSoftTranslation($code);
    }

    public function hasTranslation($code = NULL)
    {
        $this->__load();
        return parent::hasTranslation($code);
    }

    public function getTranslationCodes()
    {
        $this->__load();
        return parent::getTranslationCodes();
    }

    public function detach()
    {
        $this->__load();
        return parent::detach();
    }

    public function cloneEntity()
    {
        $this->__load();
        return parent::cloneEntity();
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

    public function prepareEntityBeforeCommit($type)
    {
        $this->__load();
        return parent::prepareEntityBeforeCommit($type);
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'ogMeta', 'showSocialButtons', 'id', 'enabled', 'cleanURL', 'image', 'translations');
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