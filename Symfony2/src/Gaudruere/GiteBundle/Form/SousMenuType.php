<?php

namespace Gaudruere\GiteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;  

use Gaudruere\GiteBundle\Entity\MenuRepository;


class SousMenuType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('titre')
            ->add('ordre')    
            ->add('fichierUpload', 'file', array('required' => true))
            ->add('menuParent', 'entity', array(
                      'class' => 'Gaudruere\GiteBundle\Entity\Menu',
                      'property' => 'titre',
                      'query_builder' => function(MenuRepository $er) {
                                              return $er->getQueryRootMenus();
                                          },
                      	'required' => true));
    }

    public function getName()
    {
        return 'gaudruere_gitebundle_sousmenutype';
    }
    
    // Le but de la fonction getDefaultOptions est d'indiquer la classe de l'objet utilisé pour ce formulaire
    public function getDefaultOptions(array $options)
    {
        return array(
            'data_class' => 'Gaudruere\GiteBundle\Entity\Menu',
            'csrf_protection' => false,
            'csrf_field_name' => '_token',
            // a unique key to help generate the secret token
            'intention'       => 'task_item',
        );
    }
}
