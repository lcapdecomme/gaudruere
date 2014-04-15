<?php

namespace Proxies;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class GaudruereGiteBundleEntityParametresProxy extends \Gaudruere\GiteBundle\Entity\Parametres implements \Doctrine\ORM\Proxy\Proxy
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
    
    
    public function setPhotoAccueil1($tmp)
    {
        $this->__load();
        return parent::setPhotoAccueil1($tmp);
    }

    public function getPhotoAccueil1()
    {
        $this->__load();
        return parent::getPhotoAccueil1();
    }

    public function setPhotoAccueil2($tmp)
    {
        $this->__load();
        return parent::setPhotoAccueil2($tmp);
    }

    public function getPhotoAccueil2()
    {
        $this->__load();
        return parent::getPhotoAccueil2();
    }

    public function setPhotoAccueil3($tmp)
    {
        $this->__load();
        return parent::setPhotoAccueil3($tmp);
    }

    public function getPhotoAccueil3()
    {
        $this->__load();
        return parent::getPhotoAccueil3();
    }

    public function setPhotoAccueil4($tmp)
    {
        $this->__load();
        return parent::setPhotoAccueil4($tmp);
    }

    public function getPhotoAccueil4()
    {
        $this->__load();
        return parent::getPhotoAccueil4();
    }

    public function getId()
    {
        $this->__load();
        return parent::getId();
    }

    public function setDescriptionContact($descriptionContact)
    {
        $this->__load();
        return parent::setDescriptionContact($descriptionContact);
    }

    public function getDescriptionContact()
    {
        $this->__load();
        return parent::getDescriptionContact();
    }

    public function setDescriptionAcces($descriptionAcces)
    {
        $this->__load();
        return parent::setDescriptionAcces($descriptionAcces);
    }

    public function getDescriptionAcces()
    {
        $this->__load();
        return parent::getDescriptionAcces();
    }

    public function setEmail($email)
    {
        $this->__load();
        return parent::setEmail($email);
    }

    public function getEmail()
    {
        $this->__load();
        return parent::getEmail();
    }

    public function setNbMoisCalendrier($nbMoisCalendrier)
    {
        $this->__load();
        return parent::setNbMoisCalendrier($nbMoisCalendrier);
    }

    public function getNbMoisCalendrier()
    {
        $this->__load();
        return parent::getNbMoisCalendrier();
    }

    public function setPhraseBandeau($phraseBandeau)
    {
        $this->__load();
        return parent::setPhraseBandeau($phraseBandeau);
    }

    public function getPhraseBandeau()
    {
        $this->__load();
        return parent::getPhraseBandeau();
    }

    public function setPhraseRemerciement($phraseRemerciement)
    {
        $this->__load();
        return parent::setPhraseRemerciement($phraseRemerciement);
    }

    public function getPhraseRemerciement()
    {
        $this->__load();
        return parent::getPhraseRemerciement();
    }

    public function uploadPictures()
    {
        $this->__load();
        return parent::uploadPictures();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'descriptionContact', 'descriptionAcces', 'email', 'nbMoisCalendrier', 'phraseBandeau', 'phraseRemerciement');
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