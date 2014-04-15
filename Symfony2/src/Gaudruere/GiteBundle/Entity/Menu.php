<?php

namespace Gaudruere\GiteBundle\Entity; 
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

require_once('SimpleImage.php');


/**
 * Gaudruere\GiteBundle\Entity\Menu
 *
 * @ORM\Table(name="menu")    
 * @ORM\HasLifecycleCallbacks
 * @ORM\Entity(repositoryClass="Gaudruere\GiteBundle\Entity\MenuRepository")
 */
class Menu
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
	 * Nom du menu affiché sur le site
	 *   	
	 * @var string $titre
	 *
	 * @ORM\Column(name="titre", type="string", length=255)
	 */
	private $titre;
	
	/**
	 *
	 * Url du menu 
	 *       	
	 * @var string $nom
	 *
	 * @ORM\Column(name="nom", type="string", length=255)
	 */
	private $nom;

	/**
	 * pour l'instant, c'est une chaine ? En faire une table ? Pas sûr.
	 * @var string $type
	 *
	 * @ORM\Column(name="type", type="string", length=255, nullable=false)
	 */
	private $type;

	/**
	 * @var string $description
	 *
	 * @ORM\Column(name="description", type="string", length=2000, nullable=true)
	 */
	private $description;

	/**
	 * @var integer $ordre
	 *
	 * @ORM\Column(name="ordre", type="integer")
	 */
	private $ordre;

	/**
	 * @ORM\OneToMany(targetEntity="Menu", mappedBy="menuParent")
	 * @ORM\OrderBy({"ordre" = "ASC"})
	 */
	private $sousMenus;

	/**
	 * @ORM\ManyToOne(targetEntity="Menu", inversedBy="sousMenus")
	 * @ORM\JoinColumn(name="parent_id", referencedColumnName="id")
	 */
	private $menuParent;

	
	/**
	 * Nom de la vignette qui sera stocké en base 
	 *   	
	 * @var string $cheminPhoto
	 *
	 * @ORM\Column(name="chemin_photo", type="string", length=200, nullable=true)
	 */                     
	private $cheminPhoto;
	
    /**
     * Champ 'virtuel' non stocké en base et permettant de récupérer le fichier uploadé 
     *     
     * Pour + d'info., la doc. de symfony : http://symfony.com/doc/current/cookbook/doctrine/file_uploads.html     
     *              
     * @Assert\File(maxSize="6000000")
     */
    public $fichierUpload;	
    

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
	 * Set description
	 *
	 * @param string $description
	 */
	public function setDescription($description)
	{
		$this->description = $description;
	}

	/**
	 * Get description
	 *
	 * @return string
	 */
	public function getDescription()
	{
		return $this->description;
	}

	/**
	 * Set nom
	 *
	 * @param string $titre
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
	 * Set ordre
	 *
	 * @param integer $ordre
	 */
	public function setOrdre($ordre)
	{
		$this->ordre = $ordre;
	}

	/**
	 * Get ordre
	 *
	 * @return integer
	 */
	public function getOrdre()
	{
		return $this->ordre;
	}

	public function setType($type)
	{
		$this->type = $type;
	}

	public function getType()
	{
		return $this->type;
	}
	
	public function getCheminPhoto()
	{
		return $this->cheminPhoto;
	}
	
	public function setCheminPhoto($cheminPhoto)
	{
		$this->cheminPhoto = $cheminPhoto;
	}

	public function setSousMenus($sousMenus)
	{
		$this->sousMenus = $sousMenus;
	}

	public function getSousMenus()
	{
		return $this->sousMenus;
	}

	public function setMenuParent($menuParent)
	{
		$this->menuParent = $menuParent;
	}

	public function getMenuParent()
	{
		return $this->menuParent;
	}


	public function toUrl($string)
	{
		$a = 'ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûýýþÿŔŕ ';
		$b = 'aaaaaaaceeeeiiiidnoooooouuuuybsaaaaaaaceeeeiiiidnoooooouuuyybyRr-';
		$string = utf8_decode($string);
		$string = strtr($string, utf8_decode($a), $b);
		$string = strtolower($string);
		return utf8_encode($string);
	}

  /**
   * Utilisé par le menuFilter
   * Retourne une url complète, cad le type de menu suivi de son nom    
   */    
	public function getPermalien()
	{
		$permalien = $this->getType();
		if( strpos($this->getType(),'article') !== false )
		{
			$permalien .= '/'.$this->getNom();
		}
//		return $this->toUrl($permalien);
		return $permalien;
	}

	// Fonction utilisée pour afficher le menu dans le combobox de création de l'article
	// en attendant de mieux comprendre Symfony
	// En effet, ça me plait moyen de mettre une méthode destinée à la présentation
	// dans un objet du domaine.
	public function __toString()
	{
		return $this->getTitre();
	}
	

	public function getFullPicturePath() {
        return null === $this->cheminPhoto ? null : $this->getUploadRootDir(). $this->getCheminPhoto();
  }
  protected function getUploadRootDir() {
      // the absolute directory path where uploaded documents should be saved
      return $this->getTmpUploadRootDir().$this->getId()."/";
  }
  protected function getTmpUploadRootDir() {
      // the absolute directory path where uploaded documents should be saved
      $url_du_site = $_SERVER['SERVER_NAME'];
      if ($url_du_site != "localhost")
      {    
        	return __DIR__ . '/../../../../www/uploads/vignettes/';
      }
      else
      {
         	return __DIR__ . '/../../../../web/uploads/vignettes/';
      }        
  }


  public function uploadPicture() {
    // the file property can be empty if the field is not required
    if (null === $this->fichierUpload) {
        return;
    } 

    if(!$this->id){
        $this->fichierUpload->move($this->getTmpUploadRootDir(), $this->fichierUpload->getClientOriginalName());
    }else{
        $this->fichierUpload->move($this->getUploadRootDir(), $this->fichierUpload->getClientOriginalName());
    }
    // set the path property to the filename where you'ved saved the file
    $this->cheminPhoto = $this->fichierUpload->getClientOriginalName();
    
    
    //redimension image
   $image = new SimpleImage();
   $image->load($this->getFullPicturePath());
   $image->resizeToHeight(110);
   $image->save($this->getFullPicturePath());
    
    // clean up the file property as you won't need it anymore
    $this->fichierUpload = null;
  }
  
  /**
   * @ORM\PostPersist()
   */
  public function movePicture()
  {
      if (null === $this->cheminPhoto) {
          return;
      }
      if(!is_dir($this->getUploadRootDir())){
          mkdir($this->getUploadRootDir());
      }
      copy($this->getTmpUploadRootDir().$this->cheminPhoto, $this->getFullPicturePath());
      unlink($this->getTmpUploadRootDir().$this->cheminPhoto);
  }
  
  /**
   * @ORM\PreRemove()
   */
  public function removePicture()
  {
//      unlink($this->getFullPicturePath());       
        if ($file = $this->getFullPicturePath()) {
            unlink($file);
        }
  }
		
	
	
}