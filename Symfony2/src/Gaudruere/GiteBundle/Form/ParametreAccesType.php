<?php

namespace Gaudruere\GiteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

use Gaudruere\GiteBundle\Entity\ParametresRepository;

class ParametreAccesType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('descriptionAcces', 'textarea', array('attr' => array('class' => 'tinymce','data-theme' => 'medium', 'required' => true)));
    }

    public function getName()
    {
        return 'gaudruere_gitebundle_parametreAccesType';
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
