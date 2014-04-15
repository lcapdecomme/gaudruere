<?php
namespace Gaudruere\GiteBundle\Entity; 
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

require_once('SimpleImage.php');

/**
 * Gaudruere\GiteBundle\Entity\Article
 *
 * @ORM\Table(name="article")
 * @ORM\HasLifecycleCallbacks 
 * @ORM\Entity(repositoryClass="Gaudruere\GiteBundle\Entity\ArticleRepository")
 */
class Article
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
	 * @var string $titre
	 *
	 * @ORM\Column(name="titre", type="string", length=255)
	 */
	private $titre;
	
	/**
	 * @var string $description
	 *
	 * @ORM\Column(name="description", type="string", length=2000)
	 */
	private $description;
	
	
	/**
	 * Nom du fichier qui sera stocké en base 
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
	 * @var integer $description
	 *
	 * @ORM\Column(name="ordre", type="integer")
	 */
	private $ordre;
	
	/**
	 * @var Menu $menu
	 *
	 * @ORM\ManyToOne(targetEntity="Menu")      
	 * @ORM\JoinColumn(name="menu_id", referencedColumnName="id", nullable=false)
	 */
	private $menu;
	
	/**           
	 * @ORM\OneToMany(targetEntity="Article", mappedBy="menu")
	 */
	private $articles;

	/**
	 * Taille de l'image à l'affichage : (N)on affiché, (P)etit, (M)oyen, (G)rand
	 *   	
	 * @var string $tailleImage
	 *
	 * @ORM\Column(name="tailleImage", type="string", length=1)
	 */
	private $tailleImage;
		
	/**
	 * Position de l'image dans l'article : (G)auche ou (D)roite
	 *   	
	 * @var string $positionImage
	 *
	 * @ORM\Column(name="positionImage", type="string", length=1)
	 */
	private $positionImage;

		
	/**
	 * Bordure de l'image dans l'article : (O)ui ou (N)on
	 *   	
	 * @var string $bordureImage
	 *
	 * @ORM\Column(name="bordureImage", type="string", length=1)
	 */
	private $bordureImage;
		
	
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
	public function getMenu()
	{
		return $this->menu;
	}
	public function setMenu($menu)
	{
		$this->menu = $menu;
	}
	
	public function getOrdre()
	{
		return $this->ordre;
	}
	
	public function setOrdre($ordre)
	{
		$this->ordre = $ordre;
	}
	
	    
  /**
   * Set tailleImage
   *
   * @param string $tailleImage
   */
  public function setTailleImage($tailleImage)
  {
      $this->tailleImage = $tailleImage;
  }

  /**
   * Get tailleImage
   *
   * @return string 
   */
  public function getTailleImage()
  {
      return $this->tailleImage;
  }

  /**
   * Set positionImage
   *
   * @param string $positionImage
   */
  public function setPositionImage($positionImage)
  {
      $this->positionImage = $positionImage;
  }

  /**
   * Get positionImage
   *
   * @return string 
   */
  public function getPositionImage()
  {
      return $this->positionImage;
  }

  /**
   * Set bordureImage
   *
   * @param string $bordureImage
   */
  public function setBordureImage($bordureImage)
  {
      $this->bordureImage = $bordureImage;
  }

  /**
   * Get bordureImage
   *
   * @return string 
   */
  public function getBordureImage()
  {
      return $this->bordureImage;
  }
	
	public function getCheminPhoto()
	{
		return $this->cheminPhoto;
	}
	
	public function setCheminPhoto($cheminPhoto)
	{
		$this->cheminPhoto = $cheminPhoto;
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
      // return __DIR__ . '/../../../../web/uploads/images/';
      $url_du_site = $_SERVER['SERVER_NAME'];
      if ($url_du_site != "localhost")
      {    
        	return __DIR__ . '/../../../../www/uploads/images/';
      }
      else
      {
         	return __DIR__ . '/../../../../web/uploads/images/';
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
   $image->resizeToHeight(500);
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