<?php

namespace Gaudruere\GiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Gaudruere\GiteBundle\Entity\Article;
use Gaudruere\GiteBundle\Form\ArticleType;


class ArticleController extends GaudruereController
{
	/**
	 * @Route("/article/{titreArticle}", name="articleGaudruere")
	 * @Template()
	 */
	public function indexAction($titreArticle)
	{
		$em = $this->getDoctrine()->getEntityManager();

		// Description de ce menu
		$monMenu = $em->getRepository('GaudruereGiteBundle:Menu')->findOneByNom($titreArticle);
		if (!$monMenu) {
			throw $this->createNotFoundException('Menu '.$menuName.' introuvable.');
		}
		$ident = $monMenu->getId();

		// Article de ce menu
		$articles = $em->getRepository('GaudruereGiteBundle:Article')->findByIdMenu($ident);
		if (!$articles) {
			throw $this->createNotFoundException('Article pour le menu numéro ' . $ident . ' introuvable.');
		}

		// Menu de même niveau
		$parentId = $monMenu->getMenuParent()->getId();
		$sousmenus = $em->getRepository('GaudruereGiteBundle:Menu')->findSameParentMenu($parentId);
		if (!$sousmenus) {
			throw $this->createNotFoundException('Sous-menus pour ce parent ' . $parentId . ' introuvable.');
		}

		return $this->myRender(array("titreMenu" => $titreArticle, "articles" => $articles, "sousmenus" => $sousmenus));

	}

     /**
     * Lists all Article entities.
     *
     * @Route("/adminArticle", name="adminArticle")
     * @Template()
     */
    public function listeAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('GaudruereGiteBundle:Article')->findAll();

       return $this->myRender(array("titreMenu" => "",'entities' => $entities));
    }

    /**
     * Finds and displays a Article entity.
     *
     * @Route("/adminArticle/{id}/show", name="adminArticle_show")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('GaudruereGiteBundle:Article')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Impossible de retrouver cet article !');
        }

        $deleteForm = $this->createDeleteForm($id); 

        return $this->myRender(array("titreMenu" => "", "entity" => $entity, "delete_form" => $deleteForm->createView(),));
    }

    /**
     * Displays a form to create a new Article entity.
     *
     * @Route("/adminArticle/new", name="adminArticle_new")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Article();
        $form   = $this->createForm(new ArticleType(), $entity);

        return $this->myRender(array("titreMenu" => "", 'entity' => $entity, 'form'  => $form->createView()));
    }

    /**
     * Creates a new Article entity.
     *
     * @Route("/adminArticle/create", name="adminArticle_create")
     * @Method("post")
     * @Template("GaudruereGiteBundle:Article:new.html.twig")
     */
    public function createAction()
    {
        $entity  = new Article();
        $request = $this->getRequest();
        $form    = $this->createForm(new ArticleType(), $entity);
        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();   
            if ($entity->getOrdre() === null) { $entity->setOrdre('1'); }  
            $em->persist($entity);
            $em->flush();
            
            // upload de l'image après le stockage en base afin d'avoir un id 
            // suivi d'une mise a jour en base 
            // FIXME: Solution + élégante à trouver !           
            $entity->uploadPicture();     
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('adminArticle_show', array('id' => $entity->getId())));
            
        }

        return $this->myRender(array("titreMenu" => "", "entity" => $entity, 'form'   => $form->createView()));
    }

    /**
     * Displays a form to edit an existing Article entity.
     *
     * @Route("/adminArticle/{id}/edit", name="adminArticle_edit")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('GaudruereGiteBundle:Article')->find($id);
        if (!$entity) {
            throw $this->createNotFoundException('Impossible de retrouver cet article !');
        }

        $editForm = $this->createForm(new ArticleType(), $entity);
        $deleteForm = $this->createDeleteForm($id);
 
        return $this->myRender(array("titreMenu" => "", "entity" => $entity, 'edit_form'   => $editForm->createView(), "delete_form" => $deleteForm->createView(),));
    }

    /**
     * Edits an existing Article entity.
     *
     * @Route("/adminArticle/{id}/update", name="adminArticle_update")
     * @Method("post")
     * @Template("GaudruereGiteBundle:Article:edit.html.twig")
     */
    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('GaudruereGiteBundle:Article')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Impossible de retrouver cet article !');
        }

        $editForm   = $this->createForm(new ArticleType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            //$entity->setDescription(stripslashes($entity->getDescription()));
            $entity->uploadPicture();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('adminArticle_edit', array('id' => $id)));
        }

        return $this->myRender(array("titreMenu" => "", 'entity' => $entity, 'edit_form'   => $editForm->createView(), 'delete_form' => $deleteForm->createView(),));
    }

    /**
     * Deletes a Article entity.
     *
     * @Route("/adminArticle/{id}/delete", name="adminArticle_delete")
     * @Method("post")
     */
    public function deleteAction($id)
    {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity = $em->getRepository('GaudruereGiteBundle:Article')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Impossible de retrouver cet article !');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('adminArticle'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
