<?php
namespace Gaudruere\GiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class ArticlesController extends GaudruereController
{
    /**
     * @Route("/articles/{titreMenu}")
     * @Template()
     */
    public function indexAction($titreMenu)
    {
    	$em = $this->getDoctrine()->getEntityManager();

 			// Description de ce menu
  		$monMenu = $em->getRepository('GaudruereGiteBundle:Menu')->findOneByNom($titreMenu);
  		if (!$monMenu) {
  			throw $this->createNotFoundException('Menu '.$menuName.' introuvable.');
  		}

    	// Articles de ce menu
//    	$articles = $em->getRepository('GaudruereGiteBundle:Article')->findByPermalienMenu($monMenu->getId());
//  		if (!$articles) {
//  			throw $this->createNotFoundException('Article introuvable.');
//  		}
    	// Articles de ce menu
    	$sousmenus = $em->getRepository('GaudruereGiteBundle:Menu')->findSameParentMenu($monMenu->getId());
  		if (!$sousmenus) {
  			throw $this->createNotFoundException('Sous-menu introuvable.');
  		}
        		
    	return $this->myRender(array("titreMenu" => $titreMenu, "menu" => $monMenu, 'sousmenus' => $sousmenus));
    }
}
