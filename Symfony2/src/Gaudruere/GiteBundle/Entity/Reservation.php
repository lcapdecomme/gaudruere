<?php

namespace Gaudruere\GiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Gaudruere\GiteBundle\Entity\Reservation
 *
 * @ORM\Table(name="reservation")
 * @ORM\Entity(repositoryClass="Gaudruere\GiteBundle\Entity\ReservationRepository")
 */
class Reservation
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var date $dateDebut
     *
     * @ORM\Column(name="dateDebut", type="date")
     */
    private $dateDebut;

    /**
     * @var date $dateFin
     *
     * @ORM\Column(name="dateFin", type="date")
     */
    private $dateFin;

    /**
     * @var boolean $reservationValidee
     *
     * @ORM\Column(name="reservationValidee", type="boolean")
     */
    private $reservationValidee;

    /**
     * @var string $titre
     *
     * @ORM\Column(name="titre", type="string", length=3)
     */
    private $titre;

    /**
     * @var string $nom
     *
     * @ORM\Column(name="nom", type="string", length=50)
     */
    private $nom;

    /**
     * @var string $prenom
     *
     * @ORM\Column(name="prenom", type="string", length=50)
     */
    private $prenom;

    /**
     * @var string $rue1
     *
     * @ORM\Column(name="rue1", type="string", length=75)
     */
    private $rue1;

    /**
     * @var string $rue2
     *
     * @ORM\Column(name="rue2", type="string", length=75)
     */
    private $rue2;

    /**
     * @var string $rue3
     *
     * @ORM\Column(name="rue3", type="string", length=75)
     */
    private $rue3;

    /**
     * @var string $codePostal
     *
     * @ORM\Column(name="codePostal", type="string", length=20)
     */
    private $codePostal;

    /**
     * @var string $ville
     *
     * @ORM\Column(name="ville", type="string", length=50)
     */
    private $ville;

    /**
     * @var string $pays
     *
     * @ORM\Column(name="pays", type="string", length=50)
     */
    private $pays;

    /**
     * @var smallint $nbAdultes
     *
     * @ORM\Column(name="nbAdultes", type="smallint")
     */
    private $nbAdultes;

    /**
     * @var smallint $nbEnfants
     *
     * @ORM\Column(name="nbEnfants", type="smallint")
     */
    private $nbEnfants;

    /**
     * @var smallint $nbBebes
     *
     * @ORM\Column(name="nbBebes", type="smallint")
     */
    private $nbBebes;

    /**
     * @var string $tel
     *
     * @ORM\Column(name="tel", type="string", length=20)
     */
    private $tel;

    /**
     * @var string $email
     *
     * @ORM\Column(name="email", type="string", length=100)
     */
    private $email;

    /**
     * @var string $commentaire
     *
     * @ORM\Column(name="commentaire", type="string", length=2000)
     */
    private $commentaire;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set dateDebut
     *
     * @param date $dateDebut
     */
    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;
    }

    /**
     * Get dateDebut
     *
     * @return date 
     */
    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    /**
     * Set dateFin
     *
     * @param date $dateFin
     */
    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;
    }

    /**
     * Get dateFin
     *
     * @return date 
     */
    public function getDateFin()
    {
        return $this->dateFin;
    }

    /**
     * Set reservationValidee
     *
     * @param boolean $reservationValidee
     */
    public function setReservationValidee($reservationValidee)
    {
        $this->reservationValidee = $reservationValidee;
    }

    /**
     * Get reservationValidee
     *
     * @return boolean 
     */
    public function getReservationValidee()
    {
        return $this->reservationValidee;
    }

    /**
     * Set titre
     *
     * @param string $titre
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;
    }

    /**
     * Get titre
     *
     * @return string 
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set nom
     *
     * @param string $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set rue1
     *
     * @param string $rue1
     */
    public function setRue1($rue1)
    {
        $this->rue1 = $rue1;
    }

    /**
     * Get rue1
     *
     * @return string 
     */
    public function getRue1()
    {
        return $this->rue1;
    }

    /**
     * Set rue2
     *
     * @param string $rue2
     */
    public function setRue2($rue2)
    {
        $this->rue2 = $rue2;
    }

    /**
     * Get rue2
     *
     * @return string 
     */
    public function getRue2()
    {
        return $this->rue2;
    }

    /**
     * Set rue3
     *
     * @param string $rue3
     */
    public function setRue3($rue3)
    {
        $this->rue3 = $rue3;
    }

    /**
     * Get rue3
     *
     * @return string 
     */
    public function getRue3()
    {
        return $this->rue3;
    }

    /**
     * Set codePostal
     *
     * @param string $codePostal
     */
    public function setCodePostal($codePostal)
    {
        $this->codePostal = $codePostal;
    }

    /**
     * Get codePostal
     *
     * @return string 
     */
    public function getCodePostal()
    {
        return $this->codePostal;
    }

    /**
     * Set ville
     *
     * @param string $ville
     */
    public function setVille($ville)
    {
        $this->ville = $ville;
    }

    /**
     * Get ville
     *
     * @return string 
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set pays
     *
     * @param string $pays
     */
    public function setPays($pays)
    {
        $this->pays = $pays;
    }

    /**
     * Get pays
     *
     * @return string 
     */
    public function getPays()
    {
        return $this->pays;
    }

    /**
     * Set nbAdultes
     *
     * @param smallint $nbAdultes
     */
    public function setNbAdultes($nbAdultes)
    {
        $this->nbAdultes = $nbAdultes;
    }

    /**
     * Get nbAdultes
     *
     * @return smallint 
     */
    public function getNbAdultes()
    {
        return $this->nbAdultes;
    }

    /**
     * Set nbEnfants
     *
     * @param smallint $nbEnfants
     */
    public function setNbEnfants($nbEnfants)
    {
        $this->nbEnfants = $nbEnfants;
    }

    /**
     * Get nbEnfants
     *
     * @return smallint 
     */
    public function getNbEnfants()
    {
        return $this->nbEnfants;
    }

    /**
     * Set nbBebes
     *
     * @param smallint $nbBebes
     */
    public function setNbBebes($nbBebes)
    {
        $this->nbBebes = $nbBebes;
    }

    /**
     * Get nbBebes
     *
     * @return smallint 
     */
    public function getNbBebes()
    {
        return $this->nbBebes;
    }

    /**
     * Set tel
     *
     * @param string $tel
     */
    public function setTel($tel)
    {
        $this->tel = $tel;
    }

    /**
     * Get tel
     *
     * @return string 
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set email
     *
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set commentaire
     *
     * @param string $commentaire
     */
    public function setCommentaire($commentaire)
    {
        $this->commentaire = $commentaire;
    }

    /**
     * Get commentaire
     *
     * @return string 
     */
    public function getCommentaire()
    {
        return $this->commentaire;
    }
}