<?php

namespace Gaudruere\GiteBundle\Extensions;

use Twig_Extension;
use Twig_Filter_Method;

class MenuFilter extends Twig_Extension
{
	private $container;
	public function __construct($container)
	{
		$this->container = $container;
	}
	       
	public function getName()
	{
		return "printTree";	
	}
	
    public function getFilters()
    {
        return array(
            "printTree" => new Twig_Filter_Method($this,'printTree'),
            "printSubTree" => new Twig_Filter_Method($this,'printSubTree'),
        );
    }
    
    /** 
     * Affiche le menu et ces sous-menus
     * Le menu actif est repéré par la class menuactif
     *          
     */
    public function printTree($menus, $monMenu)
    {  
     	$result ='<ul class="navigation">';
    	foreach($menus as $menu)
    	{
    		$texte = $menu->getTitre();
    		$lien = $this->getBundleRoot().'/'.$menu->getPermalien();
    		$result .= "<li><a ";
    		if ($monMenu == $menu->getNom() && $menu->getPermalien() != "reservation") {
					$result .= " class=\"menuactif\""; 
				}
    		if ($menu->getPermalien() == "reservation") {
					$result .= " class=\"menureservation\""; 
				}
        $result .= " href='$lien'>$texte</a>";
    		if(count($menu->getSousMenus())>0)
    		{
    		  // Affichage des sous-menus   
    			$result .= $this->printTree($menu->getSousMenus(),$monMenu);
    		}
    		$result .= '</li>';
    	}
    	$result .= "</ul>";
    	return $result;
    }

    
    /**
     * Liste des menus dans la partie droite des pages article
     * 
     */               
    public function printSubTree($menus, $monMenu)
    {   
      $sousMenusTries = $menus;
      $result ='<ul class="navigationArticle">';
    	foreach($menus as $menu)
    	{  
    		$texte =  $menu->getTitre();
        $idParentCeMenu = $menu->getMenuParent();
    		$lien = $this->getBundleRoot().'/'.$menu->getPermalien();  
    		
    		$result .= "<li><a ";
    		if ($monMenu == $menu->getNom()) {
					$result .= " class=\"menuactif\""; 
				}
        $result .= " href='$lien'>$texte</a>";
    		$result .= '</li>';
    	}
    	$result .= "</ul>";
    	return $result;
    }
    
    
    private function getBundleRoot()
    {
    	// FIXME: comment on recupère ça, mais pas en dur ?
//    	return $this->container->get('kernel')->getRootDir().'/../web';
    	 $url_du_site = $_SERVER['SERVER_NAME'];
        if ($url_du_site != "localhost")
        {    
          	return "http://www.lagaudruere.fr";
        }
        else
        {
           	return "/gaudruere/web/app_dev.php";
        }        
    	//return "{{ path('gaudruere_gite_accueil_index') }}";
    }
}