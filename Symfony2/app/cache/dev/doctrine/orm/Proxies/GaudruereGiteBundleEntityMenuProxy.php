<?php

namespace Proxies;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class GaudruereGiteBundleEntityMenuProxy extends \Gaudruere\GiteBundle\Entity\Menu implements \Doctrine\ORM\Proxy\Proxy
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
    
    
    public function getId()
    {
        $this->__load();
        return parent::getId();
    }

    public function setTitre($titre)
    {
        $this->__load();
        return parent::setTitre($titre);
    }

    public function getTitre()
    {
        $this->__load();
        return parent::getTitre();
    }

    public function setDescription($description)
    {
        $this->__load();
        return parent::setDescription($description);
    }

    public function getDescription()
    {
        $this->__load();
        return parent::getDescription();
    }

    public function setNom($nom)
    {
        $this->__load();
        return parent::setNom($nom);
    }

    public function getNom()
    {
        $this->__load();
        return parent::getNom();
    }

    public function setOrdre($ordre)
    {
        $this->__load();
        return parent::setOrdre($ordre);
    }

    public function getOrdre()
    {
        $this->__load();
        return parent::getOrdre();
    }

    public function setType($type)
    {
        $this->__load();
        return parent::setType($type);
    }

    public function getType()
    {
        $this->__load();
        return parent::getType();
    }

    public function getCheminPhoto()
    {
        $this->__load();
        return parent::getCheminPhoto();
    }

    public function setCheminPhoto($cheminPhoto)
    {
        $this->__load();
        return parent::setCheminPhoto($cheminPhoto);
    }

    public function setSousMenus($sousMenus)
    {
        $this->__load();
        return parent::setSousMenus($sousMenus);
    }

    public function getSousMenus()
    {
        $this->__load();
        return parent::getSousMenus();
    }

    public function setMenuParent($menuParent)
    {
        $this->__load();
        return parent::setMenuParent($menuParent);
    }

    public function getMenuParent()
    {
        $this->__load();
        return parent::getMenuParent();
    }

    public function toUrl($string)
    {
        $this->__load();
        return parent::toUrl($string);
    }

    public function getPermalien()
    {
        $this->__load();
        return parent::getPermalien();
    }

    public function __toString()
    {
        $this->__load();
        return parent::__toString();
    }

    public function getFullPicturePath()
    {
        $this->__load();
        return parent::getFullPicturePath();
    }

    public function uploadPicture()
    {
        $this->__load();
        return parent::uploadPicture();
    }

    public function movePicture()
    {
        $this->__load();
        return parent::movePicture();
    }

    public function removePicture()
    {
        $this->__load();
        return parent::removePicture();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'titre', 'nom', 'type', 'description', 'ordre', 'sousMenus', 'menuParent', 'cheminPhoto');
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