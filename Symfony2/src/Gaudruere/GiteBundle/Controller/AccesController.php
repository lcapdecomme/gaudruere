<?php

namespace Gaudruere\GiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class AccesController extends GaudruereController
{
    /**
     * @Route("/acces", name="accesGaudruere")
     * @Template()
     */
    public function indexAction()
    {
        return $this->myRender(array("titreMenu"=> "acces"));
    }
}
