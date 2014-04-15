<?php

namespace Proxies;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class GaudruereGiteBundleEntityArticleProxy extends \Gaudruere\GiteBundle\Entity\Article implements \Doctrine\ORM\Proxy\Proxy
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

    public function getMenu()
    {
        $this->__load();
        return parent::getMenu();
    }

    public function setMenu($menu)
    {
        $this->__load();
        return parent::setMenu($menu);
    }

    public function getOrdre()
    {
        $this->__load();
        return parent::getOrdre();
    }

    public function setOrdre($ordre)
    {
        $this->__load();
        return parent::setOrdre($ordre);
    }

    public function setTailleImage($tailleImage)
    {
        $this->__load();
        return parent::setTailleImage($tailleImage);
    }

    public function getTailleImage()
    {
        $this->__load();
        return parent::getTailleImage();
    }

    public function setPositionImage($positionImage)
    {
        $this->__load();
        return parent::setPositionImage($positionImage);
    }

    public function getPositionImage()
    {
        $this->__load();
        return parent::getPositionImage();
    }

    public function setBordureImage($bordureImage)
    {
        $this->__load();
        return parent::setBordureImage($bordureImage);
    }

    public function getBordureImage()
    {
        $this->__load();
        return parent::getBordureImage();
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
        return array('__isInitialized__', 'id', 'titre', 'description', 'cheminPhoto', 'ordre', 'menu', 'articles', 'tailleImage', 'positionImage', 'bordureImage');
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