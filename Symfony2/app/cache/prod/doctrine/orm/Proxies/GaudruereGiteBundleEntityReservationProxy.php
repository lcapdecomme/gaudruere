<?php

namespace Proxies;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class GaudruereGiteBundleEntityReservationProxy extends \Gaudruere\GiteBundle\Entity\Reservation implements \Doctrine\ORM\Proxy\Proxy
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

    public function setDateDebut($dateDebut)
    {
        $this->__load();
        return parent::setDateDebut($dateDebut);
    }

    public function getDateDebut()
    {
        $this->__load();
        return parent::getDateDebut();
    }

    public function setDateFin($dateFin)
    {
        $this->__load();
        return parent::setDateFin($dateFin);
    }

    public function getDateFin()
    {
        $this->__load();
        return parent::getDateFin();
    }

    public function setReservationValidee($reservationValidee)
    {
        $this->__load();
        return parent::setReservationValidee($reservationValidee);
    }

    public function getReservationValidee()
    {
        $this->__load();
        return parent::getReservationValidee();
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

    public function setPrenom($prenom)
    {
        $this->__load();
        return parent::setPrenom($prenom);
    }

    public function getPrenom()
    {
        $this->__load();
        return parent::getPrenom();
    }

    public function setRue1($rue1)
    {
        $this->__load();
        return parent::setRue1($rue1);
    }

    public function getRue1()
    {
        $this->__load();
        return parent::getRue1();
    }

    public function setRue2($rue2)
    {
        $this->__load();
        return parent::setRue2($rue2);
    }

    public function getRue2()
    {
        $this->__load();
        return parent::getRue2();
    }

    public function setRue3($rue3)
    {
        $this->__load();
        return parent::setRue3($rue3);
    }

    public function getRue3()
    {
        $this->__load();
        return parent::getRue3();
    }

    public function setCodePostal($codePostal)
    {
        $this->__load();
        return parent::setCodePostal($codePostal);
    }

    public function getCodePostal()
    {
        $this->__load();
        return parent::getCodePostal();
    }

    public function setVille($ville)
    {
        $this->__load();
        return parent::setVille($ville);
    }

    public function getVille()
    {
        $this->__load();
        return parent::getVille();
    }

    public function setPays($pays)
    {
        $this->__load();
        return parent::setPays($pays);
    }

    public function getPays()
    {
        $this->__load();
        return parent::getPays();
    }

    public function setNbAdultes($nbAdultes)
    {
        $this->__load();
        return parent::setNbAdultes($nbAdultes);
    }

    public function getNbAdultes()
    {
        $this->__load();
        return parent::getNbAdultes();
    }

    public function setNbEnfants($nbEnfants)
    {
        $this->__load();
        return parent::setNbEnfants($nbEnfants);
    }

    public function getNbEnfants()
    {
        $this->__load();
        return parent::getNbEnfants();
    }

    public function setNbBebes($nbBebes)
    {
        $this->__load();
        return parent::setNbBebes($nbBebes);
    }

    public function getNbBebes()
    {
        $this->__load();
        return parent::getNbBebes();
    }

    public function setTel($tel)
    {
        $this->__load();
        return parent::setTel($tel);
    }

    public function getTel()
    {
        $this->__load();
        return parent::getTel();
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

    public function setCommentaire($commentaire)
    {
        $this->__load();
        return parent::setCommentaire($commentaire);
    }

    public function getCommentaire()
    {
        $this->__load();
        return parent::getCommentaire();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'dateDebut', 'dateFin', 'reservationValidee', 'titre', 'nom', 'prenom', 'rue1', 'rue2', 'rue3', 'codePostal', 'ville', 'pays', 'nbAdultes', 'nbEnfants', 'nbBebes', 'tel', 'email', 'commentaire');
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