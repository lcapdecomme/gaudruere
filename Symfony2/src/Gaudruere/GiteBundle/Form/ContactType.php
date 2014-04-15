<?php

namespace Gaudruere\GiteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
	    $builder
            ->add('date',     'date')
            ->add('nom',      'text')
            ->add('message',  'textarea')
            ->add('email',    'text');

    }

    public function getName()
    {
        return 'gaudruere_gitebundle_contacttype';
    }

    // Le but de la fonction getDefaultOptions est d'indiquer la classe de l'objet utilisé pour ce formulaire
    public function getDefaultOptions(array $options)
    {
        return array(
            'data_class' => 'Gaudruere\GiteBundle\Entity\Contact',
            'csrf_protection' => false,
            'csrf_field_name' => '_token',
            // a unique key to help generate the secret token
            'intention'       => 'task_item',
        );
    }
}
