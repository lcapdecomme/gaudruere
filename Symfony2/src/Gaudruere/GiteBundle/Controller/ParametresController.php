<?php

namespace Gaudruere\GiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use Gaudruere\GiteBundle\Entity\Parametres;
use Gaudruere\GiteBundle\Form\ParametreContactType;
use Gaudruere\GiteBundle\Form\ParametreAccesType;
use Gaudruere\GiteBundle\Form\ParametresGenerauxType;
use Gaudruere\GiteBundle\Form\ParametrePhotosAccueilType;



/**
 * Menu controller.
 *
 */
class ParametresController extends GaudruereController
{

    //   ************************** MODIFICATION PAGE CONTACT *************************** //

    /**
     * Modification de l'écran Contact
     *
     * @Route("/adminArticleContact/edit", name="adminArticleContact_edit")
     * @Template("GaudruereGiteBundle:Parametres:editContact.html.twig")
     */
    public function editContactAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('GaudruereGiteBundle:Parametres')->findUniqueParametre();
        if (!$entity) {
            throw $this->createNotFoundException('Impossible de retrouver ce parametre !');
        }

        $editForm = $this->createForm(new ParametreContactType(), $entity);
 
        return $this->myRender(array("titreMenu" => "", "entity" => $entity, 'edit_form'   => $editForm->createView()));
    }
    
    /**
     * Edits an existing Article entity.
     *
     * @Route("/adminArticleContact/update", name="adminArticleContact_update")
     * @Method("post")
     * @Template("GaudruereGiteBundle:Parametres:editContact.html.twig")
     */
    public function updateContactAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('GaudruereGiteBundle:Parametres')->findUniqueParametre();

        if (!$entity) {
            throw $this->createNotFoundException('Impossible de retrouver ce parametre !');
        }

        $editForm   = $this->createForm(new ParametreContactType(), $entity);

        $request = $this->getRequest();

        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('adminArticleContact_edit'));
        }

        return $this->myRender(array("titreMenu" => "", 'entity' => $entity, 'edit_form'   => $editForm->createView()));
    }    



    //   ************************** MODIFICATION PAGE ACCES *************************** //

    /**
     * Modification de l'écran Accès
     *
     * @Route("/adminArticleAcces/edit", name="adminArticleAcces_edit")
     * @Template("GaudruereGiteBundle:Parametres:editAcces.html.twig")
     */
    public function editAccesAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('GaudruereGiteBundle:Parametres')->findUniqueParametre();
        if (!$entity) {
            throw $this->createNotFoundException('Impossible de retrouver ce parametre !');
        }

        $editForm = $this->createForm(new ParametreAccesType(), $entity);
 
        return $this->myRender(array("titreMenu" => "", "entity" => $entity, 'edit_form'   => $editForm->createView()));
    }
    
    /**
     * Edits an existing Article entity.
     *
     * @Route("/adminArticleAcces/update", name="adminArticleAcces_update")
     * @Method("post")
     * @Template("GaudruereGiteBundle:Parametres:editAcces.html.twig")
     */
    public function updateAccesAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('GaudruereGiteBundle:Parametres')->findUniqueParametre();

        if (!$entity) {
            throw $this->createNotFoundException('Impossible de retrouver ce parametre !');
        }

        $editForm   = $this->createForm(new ParametreAccesType(), $entity);

        $request = $this->getRequest();

        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('adminArticleAcces_edit'));
        }

        return $this->myRender(array("titreMenu" => "", 'entity' => $entity, 'edit_form'   => $editForm->createView()));
    }    
 

    //   ************************** MODIFICATION PAGE PARAMETRES GENERAUX  *************************** //

    /**
     * Modification de l'écran de paramétrage global
     *
     * @Route("/adminParametreGeneral/edit", name="adminParametreGeneral_edit")
     * @Template("GaudruereGiteBundle:Parametres:editParametresGeneraux.html.twig")
     */
    public function editParametreGeneralAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('GaudruereGiteBundle:Parametres')->findUniqueParametre();
        if (!$entity) {
            throw $this->createNotFoundException('Impossible de retrouver ce parametre !');
        }

        $editForm = $this->createForm(new ParametresGenerauxType(), $entity);
 
        return $this->myRender(array("titreMenu" => "", "entity" => $entity, 'edit_form'   => $editForm->createView()));
    }
    
    /**
     * Enregistre les modifications sur les paramètres généraux 
     *
     * @Route("/adminParametreGeneral/update", name="adminParametreGeneral_update")
     * @Method("post")
     * @Template("GaudruereGiteBundle:Parametres:editParametresGeneraux.html.twig")
     */
    public function updateParametreGeneralAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('GaudruereGiteBundle:Parametres')->findUniqueParametre();

        if (!$entity) {
            throw $this->createNotFoundException('Impossible de retrouver ce parametre !');
        }

        $editForm   = $this->createForm(new ParametresGenerauxType(), $entity);

        $request = $this->getRequest();

        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('adminParametreGeneral_edit'));
        }

        return $this->myRender(array("titreMenu" => "", 'entity' => $entity, 'edit_form'   => $editForm->createView()));
    }    


    //   ************************** MODIFICATION 4 PHOTOS PAGE ACCUEIL *************************** //

    /**
     * Modification de l'écran Contact
     *
     * @Route("/adminPhotosAccueil/edit", name="adminPhotosAccueil")
     * @Template("GaudruereGiteBundle:Parametres:editPhotosAccueil.html.twig")
     */
    public function editPhotosAccueilAction()
    {
        $editForm = $this->createForm(new ParametrePhotosAccueilType());
 
        return $this->myRender(array("titreMenu" => "", 'edit_form'   => $editForm->createView()));
    }
    
    /**
     * Edits an existing Article entity.
     *
     * @Route("/adminPhotosAccueil/update", name="adminPhotosAccueil_update")
     * @Method("post")
     * @Template("GaudruereGiteBundle:Parametres:editPhotosAccueil.html.twig")
     */
    public function updatePhotosAccueilAction()
    {

        $entity   = new Parametres();   
        $editForm = $this->createForm(new ParametrePhotosAccueilType(), $entity);

        $request = $this->getRequest();

        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
              // Upload des images
              $entity->uploadPictures();   
             return $this->redirect($this->generateUrl('adminPhotosAccueil'));
        }

        return $this->myRender(array("titreMenu" => "", 'edit_form'   => $editForm->createView()));
   }    



 
}
