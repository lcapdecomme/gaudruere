<?php

namespace Gaudruere\GiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Gaudruere\GiteBundle\Entity\Menu;
use Gaudruere\GiteBundle\Form\MenuType;
use Gaudruere\GiteBundle\Form\SousMenuType;

/**
 * Menu controller.
 *
 * @Route("/adminMenu")
 */
class MenuController extends GaudruereController
{
    /**
     * Lists all Menu entities.
     *
     * @Route("/", name="adminMenu")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        // Récupère les menus root
        $entities       = $this->myRender(array());
        // Récupère la liste de tous les menus/sous-menus correctement triés
        $menusTries     = $this->getSortedMenu($em, $entities);

        return array_merge($entities, array("titreMenu" => "","menusTries" => $menusTries));  
    }

    /**
     * Fonction privée qui liste les menus et sous-menus triès en fonction du parent et de l'ordre de tri
     *
     */               
    private function getSortedMenu($em, $entities)
    {
        $menus = $entities['menus'];
        $count = count($menus);
        for ($i = 0; $i < $count; $i++) {
            $menu = $menus[$i];
            // Ajoute ce menu au nouveau tableau
            $menusTries[] = $menu;
            $sousmenus = $em->getRepository('GaudruereGiteBundle:Menu')->findSameParentMenu($menu->getId()); 
            $count2 = count($sousmenus);
            for ($j = 0; $j < $count2; $j++) {
               $sousmenu = $sousmenus[$j];        
              // Ajoute ce menu au nouveau tableau
              $menusTries[] = $sousmenu;
            }
        }
        return $menusTries;
    }






    //   ************************** S O U S - M E N U *************************** //



    /**
     * Affiche un sous-menu
     *
     * @Route("/{id}/showsousmenu", name="adminSousMenu_show")
     * @Template()
     */
    public function showsousmenuAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('GaudruereGiteBundle:Menu')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Impossible de retrouver ce sous-menu !');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->myRender(array("titreMenu" => "", "entity" => $entity, "delete_form" => $deleteForm->createView(),));
    }


    /**
     * Affiche le formulaire de création d'un sous-menu
     *
     * @Route("/newsousmenu", name="adminSousMenu_new")
     * @Template()
     */
    public function newsousmenuAction()
    {
        $entity = new Menu();
        $form   = $this->createForm(new SousMenuType(), $entity);

        return $this->myRender(array("titreMenu" => "", 'entity' => $entity, 'form'   => $form->createView()));

    }

    /**
     * Créé un sous-menu
     *
     * @Route("/createsousmenu", name="adminSousMenu_create")
     * @Method("post")
     * @Template("GaudruereGiteBundle:Menu:newsousmenu.html.twig")
     */
    public function createsousmenuAction()
    {
        $logger = $this->get('logger');      
        $entity  = new Menu();
        $request = $this->getRequest();
        $form    = $this->createForm(new SousMenuType(), $entity);
        $form->bindRequest($request);                            

        if ($form->isValid()) {    
            $em = $this->getDoctrine()->getEntityManager(); 
            // Le nom de l'url est basé sur le titre du menu 
            $entity->setType("article");           
            $entity->setNom($entity->toUrl($entity->getTitre()));  
            $entity->setDescription("");            
            $logger->debug("*** Fichier".$entity->getFullPicturePath());     
            $em->persist($entity);
            $em->flush();
            
            // upload de l'image après le stockage en base afin d'avoir un id 
            // suivi d'une mise a jour en base 
            // FIXME: Solution + élégante à trouver !           
            $entity->uploadPicture();          
            $logger->debug("*** Fichier".$entity->getFullPicturePath());     
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('adminSousMenu_show', array('id' => $entity->getId())));      
            
        }

        return $this->myRender(array('entity' => $entity, 'form'   => $form->createView()));
    }

    /**
     * Affiche le formulaire pour modifier un sous-menu
     *
     * @Route("/{id}/editsousmenu", name="adminSousMenu_edit")
     * @Template()
     */
    public function editsousmenuAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('GaudruereGiteBundle:Menu')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Impossible de retrouver ce sous-menu !');
        }

        $editForm = $this->createForm(new SousMenuType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->myRender(array("titreMenu" => "", "entity" => $entity, 'edit_form'   => $editForm->createView(), "delete_form" => $deleteForm->createView(),));


    }

    /**
     * Modifie un sous-menu.
     *
     * @Route("/{id}/updatesousmenu", name="adminSousMenu_update")
     * @Method("post")
     * @Template("GaudruereGiteBundle:Menu:editsousmenu.html.twig")
     */
    public function updatesousmenuAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('GaudruereGiteBundle:Menu')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Impossible de retrouver ce sous-menu !');
        }

        $editForm   = $this->createForm(new SousMenuType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            $entity->setNom($entity->toUrl($entity->getTitre()));  
            $entity->uploadPicture();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('adminSousMenu_edit', array('id' => $id)));
        }

       return $this->myRender(array("titreMenu" => "", 'entity' => $entity, 'edit_form'   => $editForm->createView(), 'delete_form' => $deleteForm->createView(),));
    }


    /**
     * Efface un sous-menu
     *
     * @Route("/{id}/deletesousmenu", name="adminSousMenu_delete")
     * @Method("post")
     */
    public function deletesousmenuAction($id)
    {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity = $em->getRepository('GaudruereGiteBundle:Menu')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Impossible de retrouver ce menu !');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('adminMenu'));
    }





    //   **************************  M E N U *************************** //



    /**
     * Affiche un menu
     *
     * @Route("/{id}/showmenu", name="adminMenu_show")
     * @Template()
     */
    public function showmenuAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('GaudruereGiteBundle:Menu')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Impossible de retrouver ce menu !');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->myRender(array("titreMenu" => "", "entity" => $entity, "delete_form" => $deleteForm->createView(),));
    }


    /**
     * Affiche le formulaire de création d'un menu
     *
     * @Route("/newmenu", name="adminMenu_new")
     * @Template()
     */
    public function newmenuAction()
    {
        $entity = new Menu();
        $form   = $this->createForm(new MenuType(), $entity);

        return $this->myRender(array("titreMenu" => "", 'entity' => $entity, 'form'   => $form->createView()));

    }

    /**
     * Créé un menu
     *
     * @Route("/createmenu", name="adminMenu_create")
     * @Method("post")
     * @Template("GaudruereGiteBundle:Menu:newmenu.html.twig")
     */
    public function createmenuAction()
    {
        $logger = $this->get('logger');  
        $logger->info("*** Fonction createMenuAction");        
        $entity  = new Menu();
        $request = $this->getRequest();
        $form    = $this->createForm(new MenuType(), $entity);
        $form->bindRequest($request);                            

        if ($form->isValid()) {    
            $em = $this->getDoctrine()->getEntityManager();
            // Le nom de l'url est basé sur le titre du menu 
            $entity->setType("articles");            
            $entity->setNom($entity->toUrl($entity->getTitre())); 
            $logger->info("*** Titre du menu".$entity->getTitre()); 
            $logger->info("*** Nom du menu".$entity->getNom());  
            $logger->info("*** Description du menu".$entity->getDescription());  
            $logger->info("*** Ordre du menu".$entity->getOrdre());  
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('adminMenu_show', array('id' => $entity->getId())));
            
        }

        return $this->myRender(array('entity' => $entity, 'form'   => $form->createView()));
    }

    /**
     * Affiche le formulaire pour modifier un menu
     *
     * @Route("/{id}/editmenu", name="adminMenu_edit")
     * @Template()
     */
    public function editmenuAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('GaudruereGiteBundle:Menu')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Impossible de retrouver ce menu !');
        }

        $editForm = $this->createForm(new MenuType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->myRender(array("titreMenu" => "", "entity" => $entity, 'edit_form'   => $editForm->createView(), "delete_form" => $deleteForm->createView(),));


    }

    /**
     * Modifie un menu.
     *
     * @Route("/{id}/updatemenu", name="adminMenu_update")
     * @Method("post")
     * @Template("GaudruereGiteBundle:Menu:editmenu.html.twig")
     */
    public function updatemenuAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('GaudruereGiteBundle:Menu')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Impossible de retrouver ce menu !');
        }

        $editForm   = $this->createForm(new MenuType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            $entity->setNom($entity->toUrl($entity->getTitre()));  
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('adminMenu_edit', array('id' => $id)));
        }

       return $this->myRender(array("titreMenu" => "", 'entity' => $entity, 'edit_form'   => $editForm->createView(), 'delete_form' => $deleteForm->createView(),));
    }


    /**
     * Efface un menu
     *
     * @Route("/{id}/deletemenu", name="adminMenu_delete")
     * @Method("post")
     */
    public function deletemenuAction($id)
    {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity = $em->getRepository('GaudruereGiteBundle:Menu')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Impossible de retrouver ce menu !');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('adminMenu'));
    }







    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
