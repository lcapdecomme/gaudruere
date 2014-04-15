<?php

namespace Gaudruere\GiteBundle\Entity;

// Namespace pour les annotations de la validation.
use Symfony\Component\Validator\Constraints as Assert;

// Namespace pour les annotations de l'ORM.
use Doctrine\ORM\Mapping as ORM;

/**
 * Gaudruere\GiteBundle\Entity\Contact
 *
 * @ORM\Table(name="contact")
 * @ORM\Entity(repositoryClass="Gaudruere\GiteBundle\Entity\ContactRepository")
 */
class Contact
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
     * @var string $nom
     *
     * @ORM\Column(name="nom", type="string", length=255)
     * @Assert\NotBlank()     
     */
    private $nom;

    /**
     * @var datetime $date
     *
     * @ORM\Column(name="date", type="datetime")      
     * @Assert\DateTime()
     */
    private $date;

    /**
     * @var string $email
     *
     * @ORM\Column(name="email", type="string", length=255)
     * @Assert\Email()     
     */
    private $email;

    /**
     * @var text $message
     *
     * @ORM\Column(name="message", type="text")
     * @Assert\NotBlank()     
     */
    private $message;


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
     * Set date
     *
     * @param datetime $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * Get date
     *
     * @return datetime 
     */
    public function getDate()
    {
        return $this->date;
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
     * Set message
     *
     * @param text $message
     */
    public function setMessage($message)
    {
        $this->message = $message;
    }

    /**
     * Get message
     *
     * @return text 
     */
    public function getMessage()
    {
        return $this->message;
    }
}