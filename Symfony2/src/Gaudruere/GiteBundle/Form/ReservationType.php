<?php

namespace Gaudruere\GiteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class ReservationType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('dateDebut')
            ->add('dateFin')
            ->add('reservationValidee', 'checkbox', array('required' => false))
            ->add('titre')
            ->add('nom')
            ->add('prenom')
            ->add('rue1','text', array('required' => false))
            ->add('rue2','text', array('required' => false))
            ->add('rue3','text', array('required' => false))
            ->add('codePostal')
            ->add('ville')
            ->add('pays')
            ->add('nbAdultes')
            ->add('nbEnfants')
            ->add('nbBebes')
            ->add('tel','text', array('required' => false))
            ->add('email','text', array('required' => false))
            ->add('commentaire', 'textarea', array('required' => false))
        ;
    }

    public function getName()
    {
        return 'gaudruere_gitebundle_reservationtype';
    }
        
    // Le but de la fonction getDefaultOptions est d'indiquer la classe de l'objet utilisé pour ce formulaire
    public function getDefaultOptions(array $options)
    {
        return array(
            'data_class' => 'Gaudruere\GiteBundle\Entity\Reservation',
            'csrf_protection' => false,
            'csrf_field_name' => '_token',
            // a unique key to help generate the secret token
            'intention'       => 'task_item',
        );
    }
}
