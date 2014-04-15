<?php

namespace Gaudruere\GiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

require_once('SimpleImage.php');


/**
 * Gaudruere\GiteBundle\Entity\Parametres
 *
 * @ORM\Table(name="parametres")  
 * @ORM\Entity(repositoryClass="Gaudruere\GiteBundle\Entity\ParametresRepository")
 */
class Parametres
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
     * @var text $descriptionContact
     *
     * @ORM\Column(name="descriptionContact", type="text")
     */
    private $descriptionContact;

    /**
     * @var text $descriptionAcces
     *
     * @ORM\Column(name="descriptionAcces", type="text")
     */
    private $descriptionAcces;

    /**
     * @var string $email
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var integer $nbMoisCalendrier
     *
     * @ORM\Column(name="nbMoisCalendrier", type="integer")
     */
    private $nbMoisCalendrier;

    /**
     * @var string $phraseBandeau
     *
     * @ORM\Column(name="phraseBandeau", type="string", length=255)
     */
    private $phraseBandeau;

    /**
     * @var string $phraseRemerciement
     *
     * @ORM\Column(name="phraseRemerciement", type="string", length=255)
     */
    private $phraseRemerciement;


    private $photoAccueil1;
    public function setPhotoAccueil1($tmp)
    {
        $this->photoAccueil1 = $tmp;
    }
    public function getPhotoAccueil1()
    {
        return "photo1.jpg";
    }
    private $photoAccueil2; 
    public function setPhotoAccueil2($tmp)
    {
        $this->photoAccueil2 = $tmp;
    }
    public function getPhotoAccueil2()
    {
        return "photo2.jpg";
    }
    private $photoAccueil3; 
    public function setPhotoAccueil3($tmp)
    {
        $this->photoAccueil3 = $tmp;
    }
    public function getPhotoAccueil3()
    {
        return "photo3.jpg";
    }
    private $photoAccueil4;  
    public function setPhotoAccueil4($tmp)
    {
        $this->photoAccueil4 = $tmp;
    }
    public function getPhotoAccueil4()
    {
        return "photo4.jpg";
    }




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
     * Set descriptionContact
     *
     * @param text $descriptionContact
     */
    public function setDescriptionContact($descriptionContact)
    {
        $this->descriptionContact = $descriptionContact;
    }

    /**
     * Get descriptionContact
     *
     * @return text 
     */
    public function getDescriptionContact()
    {
        return $this->descriptionContact;
    }

    /**
     * Set descriptionAcces
     *
     * @param text $descriptionAcces
     */
    public function setDescriptionAcces($descriptionAcces)
    {
        $this->descriptionAcces = $descriptionAcces;
    }

    /**
     * Get descriptionAcces
     *
     * @return text 
     */
    public function getDescriptionAcces()
    {
        return $this->descriptionAcces;
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
     * Set nbMoisCalendrier
     *
     * @param integer $nbMoisCalendrier
     */
    public function setNbMoisCalendrier($nbMoisCalendrier)
    {
        $this->nbMoisCalendrier = $nbMoisCalendrier;
    }

    /**
     * Get nbMoisCalendrier
     *
     * @return integer 
     */
    public function getNbMoisCalendrier()
    {
        return $this->nbMoisCalendrier;
    }

    /**
     * Set phraseBandeau
     *
     * @param string $phraseBandeau
     */
    public function setPhraseBandeau($phraseBandeau)
    {
        $this->phraseBandeau = $phraseBandeau;
    }

    /**
     * Get phraseBandeau
     *
     * @return string 
     */
    public function getPhraseBandeau()
    {
        return $this->phraseBandeau;
    }
    
    
    /**
     * Set phraseRemerciement
     *
     * @param string $phraseRemerciement
     */
    public function setPhraseRemerciement($phraseRemerciement)
    {
        $this->phraseRemerciement = $phraseRemerciement;
    }

    /**
     * Get phraseRemerciement
     *
     * @return string 
     */
    public function getPhraseRemerciement()
    {
        return $this->phraseRemerciement;
    }
    
    
    
    /************************ UPLOAD PHOTO *******************/
      protected function getUploadRootDir() {
          // the absolute directory path where uploaded documents should be saved
          // return __DIR__ . '/../../../../web/uploads/images/';
          $url_du_site = $_SERVER['SERVER_NAME'];
          if ($url_du_site != "localhost")
          {    
            	return __DIR__ . '/../../../../www/uploads/accueil/';
          }
          else
          {
             	return __DIR__ . '/../../../../web/uploads/accueil/';
          }    
      }

  public function uploadPictures() {
    if (null !== $this->photoAccueil1) {
        $this->photoAccueil1->move($this->getUploadRootDir(), $this->photoAccueil1->getClientOriginalName());
    
        //redimension image
        $image = new SimpleImage();
        $image->load($this->getUploadRootDir().$this->photoAccueil1->getClientOriginalName());
        $image->resizeToWidth(980);
        $image->save($this->getUploadRootDir().'photo1.jpg');
        unlink($this->getUploadRootDir().$this->photoAccueil1->getClientOriginalName());

         // clean up the file property as you won't need it anymore
        $this->photoAccueil1 = null;
    }

    if (null !== $this->photoAccueil2) {
        $this->photoAccueil2->move($this->getUploadRootDir(), $this->photoAccueil2->getClientOriginalName());
    
        //redimension image
        $image = new SimpleImage();
        $image->load($this->getUploadRootDir().$this->photoAccueil2->getClientOriginalName());
        $image->resizeToWidth(980);
        $image->save($this->getUploadRootDir().'photo2.jpg');
        unlink($this->getUploadRootDir().$this->photoAccueil2->getClientOriginalName());

         // clean up the file property as you won't need it anymore
        $this->photoAccueil2 = null;
    }
    
    if (null !== $this->photoAccueil3) {
        $this->photoAccueil3->move($this->getUploadRootDir(), $this->photoAccueil3->getClientOriginalName());
    
        //redimension image
        $image = new SimpleImage();
        $image->load($this->getUploadRootDir().$this->photoAccueil3->getClientOriginalName());
        $image->resizeToWidth(980);
        $image->save($this->getUploadRootDir().'photo3.jpg');
        unlink($this->getUploadRootDir().$this->photoAccueil3->getClientOriginalName());

         // clean up the file property as you won't need it anymore
        $this->photoAccueil3 = null;
    }
    
    if (null !== $this->photoAccueil4) {
        $this->photoAccueil4->move($this->getUploadRootDir(), $this->photoAccueil4->getClientOriginalName());
    
        //redimension image
        $image = new SimpleImage();
        $image->load($this->getUploadRootDir().$this->photoAccueil4->getClientOriginalName());
        $image->resizeToWidth(980);
        $image->save($this->getUploadRootDir().'photo4.jpg');
        unlink($this->getUploadRootDir().$this->photoAccueil4->getClientOriginalName());

         // clean up the file property as you won't need it anymore
        $this->photoAccueil4 = null;
    }
    
  }
  

}