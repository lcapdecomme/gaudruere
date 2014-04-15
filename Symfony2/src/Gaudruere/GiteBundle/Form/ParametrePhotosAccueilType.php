<?php

namespace Gaudruere\GiteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

use Gaudruere\GiteBundle\Entity\ParametresRepository;

class ParametrePhotosAccueilType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('photoAccueil1', 'file', array('required' => false))
            ->add('photoAccueil2', 'file', array('required' => false))
            ->add('photoAccueil3', 'file', array('required' => false))
            ->add('photoAccueil4', 'file', array('required' => false));
    }

    public function getName()
    {
        return 'gaudruere_gitebundle_parametrePhotosAccueilType';
    }
    
    // Le but de la fonction getDefaultOptions est d'indiquer la classe de l'objet utilisé pour ce formulaire
    public function getDefaultOptions(array $options)
    {
        return array(
            'data_class' => 'Gaudruere\GiteBundle\Entity\Parametres',
            'csrf_protection' => false,
            'csrf_field_name' => '_token',
            // a unique key to help generate the secret token
            'intention'       => 'task_item',
        );
    }
}
