<?php

namespace Gaudruere\GiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class AccueilController extends GaudruereController
{
    /**
     * @Route("/", name="accueilGaudruere")
     * @Route("/accueil")
     * @Template()
     */
    public function indexAction()
    {  
      return $this->myRender(array("titreMenu" => "accueil"));
    }
}
