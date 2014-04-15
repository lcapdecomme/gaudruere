<?php

namespace Gaudruere\GiteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

use Gaudruere\GiteBundle\Entity\ParametresRepository;

class ParametresGenerauxType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
           ->add('phraseBandeau', 'text', array('max_length' => 250, 'required' => true, 'label' => 'Pharse du Bandeau', 'trim' => true, 'read_only' => false, 'error_bubbling' => false))
            ->add('email', 'email', array('required' => true))
            ->add('nbMoisCalendrier','integer')
           ->add('phraseRemerciement', 'text', array('max_length' => 250, 'required' => true, 'label' => 'Pharse du Bandeau', 'trim' => true, 'read_only' => false, 'error_bubbling' => false));
    }

    public function getName()
    {
        return 'gaudruere_gitebundle_parametresgenerauxType';
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
