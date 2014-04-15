<?php

namespace Gaudruere\GiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;  
  
use Symfony\Component\Security\Core\SecurityContext;


class AdminController extends GaudruereController
{
    /**
     * @Route("/admin", name="adminGaudruere")
     * @Template()
     */
    public function indexAction()
    {
        return $this->myRender(array("titreMenu" => "Administration"));
    } 
    
    /**
     * Login sur les pages d'administration 
     * Bon tuto : http://iabsis.com/FR/article/21-10/Mise-en-place-de-l-authentification     
     *         
     * @Route("/login", name="loginGaudruere")
     * @Template("GaudruereGiteBundle:Admin:login.html.twig")
     */
    public function loginAction()
    {
        $request = $this->getRequest();
        $session = $request->getSession();

        // get the login error if there is one
        if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
            //$error = $request->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
            $error= "Utilisateur ou mot de passe incorrect";
        } else {
            //$error = $session->get(SecurityContext::AUTHENTICATION_ERROR);
            $error= "Utilisateur ou mot de passe incorrectfff";
            $session->remove(SecurityContext::AUTHENTICATION_ERROR);
        }

         // On redirige vers la page de formulaire du login.
        // return $this->render('GaudruereGiteBundle:Admin:login.html.twig',  "error" => "", $this->myRender(array("titreMenu" => "login")));
        return $this->myRender(array("titreMenu" => "contact", "last_username" => "", "error" => ""));
    }
    
    /**
     * @Route("/login_check", name="loginCheckAdmin")
     * @Template()
     */
    public function loginCheckAction()
    {
        return $this->myRender(array("titreMenu" => "contact"));
    } 
    
    /**
     * @Route("/logout", name="logoutAdmin")
     * @Template()
     */
    public function logoutAction()
    {        
        return $this->myRender(array("titreMenu" => "contact"));
    }

}
