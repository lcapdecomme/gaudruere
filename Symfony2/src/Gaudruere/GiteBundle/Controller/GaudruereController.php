<?php

namespace Gaudruere\GiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

abstract class GaudruereController extends Controller
{
    protected function myRender($myArray)
    {
    	$em = $this->getDoctrine()->getEntityManager();
		
      // Recherche des menus principaux
      $menus = $em->getRepository('GaudruereGiteBundle:Menu')->findRootMenus();
      
      // URL du site (utilisé pour générer des urls corrects
      $url_du_site = $_SERVER['SERVER_NAME'];
      
      // URL du site (utilisé pour générer des urls corrects
      $parametres = $em->getRepository('GaudruereGiteBundle:Parametres')->findUniqueParametre();
      
      // Request http://api.symfony.com/2.0/Symfony/Component/HttpFoundation/Request.html
      // En fonction de l'url, le fond de page de l'entete est différent
      $request = $this->getRequest()->getPathInfo();
      if ($request=="/" || $request=="/accueil")
      {
          $classSite="accueil";
      }    
      else if  ($request=="/reservation")
      {
          $classSite="reservation";
      }     
      else if  ($request=="/acces")
      {
          $classSite="acces";
      }   
      else if  ($request=="/contact")
      {
          $classSite="contact";
      }   
      else
      {
          $classSite="site";
      }
      
      return array_merge($myArray, array("parametres" => $parametres, "menus" => $menus, "url_du_site" => $url_du_site, "stylepage" => $classSite));
    }

}
