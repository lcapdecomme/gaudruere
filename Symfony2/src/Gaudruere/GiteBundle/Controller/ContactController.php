<?php

namespace Gaudruere\GiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use Gaudruere\GiteBundle\Entity\Contact;
use Gaudruere\GiteBundle\Form\ContactType;

class ContactController extends GaudruereController
{
    /**
     * @Route("/contact", name="contactGaudruere")
     * @Template()
     */
    public function indexAction()
    {
        $contact = new Contact;

        // On ajoute les champs de l'entité que l'on veut à notre formulaire.
        $form = $this->createForm(new ContactType, $contact);    
                        
        // On récupère la requête.
        $request = $this->get('request');

        // On vérifie qu'elle est de type « POST ».
        if( $request->getMethod() == 'POST' )
        {
            // On fait le lien Requête <-> Formulaire.
            $form->bindRequest($request);
            
            // On vérifie que les valeurs rentrées sont correctes.
            if( $form->isValid() )
            {
                // On l'enregistre notre objet $contact dans la base de données.
                $em = $this->getDoctrine()->getEntityManager();
                $contact->setDate(new \Datetime());
                $em->persist($contact);
                $em->flush();
            
                // Envoi du mail
                $this->envoiMail($contact);   
                         
                // On redirige vers la page de réception du mail.
                return $this->render('GaudruereGiteBundle:Contact:mail.html.twig', $this->myRender(array("titreMenu" => "contact")));
                                                                                    
                //return $this->myRender(array("titreMenu" => "contact", "form" => $form->createView()));
                // return $this->redirect( $this->generateUrl('accueilGaudruere') );
            }
        }

        // À ce stade :
        // - soit la requête est de type « GET », donc le visiteur vient d'arriver sur la page et veut voir le formulaire ;
        // - soit la requête est de type « POST », mais le formulaire n'est pas valide, donc on l'affiche de nouveau.
        return $this->myRender(array("titreMenu" => "contact", "form" => $form->createView()));

    } 


    public function envoiMail($c)
    {
    	  $em = $this->getDoctrine()->getEntityManager();
		
     		// URL du site (utilisé pour générer des urls corrects
        $p = $em->getRepository('GaudruereGiteBundle:Parametres')->findUniqueParametre();
        	
        $message = \Swift_Message::newInstance()
              ->setSubject('Gite La Gaudruere - Contact')
              ->setFrom($c->getEmail())
              ->setTo($p->getEmail())
              ->setBody($c->getMessage() . "\n" . $c->getNom());
         
        $this->get('mailer')->send($message);    
    }
    
    /**
     * Lists all Contact entities.
     *
     * @Route("/adminContact", name="adminContact")
     * @Template()
     */
    public function listeAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        //$entities = $em->getRepository('GaudruereGiteBundle:Contact')->findAll();
        $entities = $em->getRepository('GaudruereGiteBundle:Contact')->findBy(array(),
                                      array('date' => 'desc'),
                                      null,
                                      null);
        
        return $this->myRender(array("titreMenu" => "contact",'entities' => $entities));
    }

    /**
     * Finds and displays a Contact entity.
     *
     * @Route("/adminContact/{id}/show", name="adminContact_show")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('GaudruereGiteBundle:Contact')->find($id);     

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Contact entity.');
        } 
        
        $deleteForm = $this->createDeleteForm($id);
        
        return $this->myRender(array("titreMenu" => "contact",'entity' => $entity, "delete_form" => $deleteForm->createView() ));
    }
    
    
    /**
     * Efface un contact
     *
     * @Route("/{id}/deletecontact", name="adminContact_delete")
     * @Method("post")
     */
    public function deletecontactAction($id)
    {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity = $em->getRepository('GaudruereGiteBundle:Contact')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Impossible de retrouver ce contact !');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('adminContact'));
    }

 
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }


}
