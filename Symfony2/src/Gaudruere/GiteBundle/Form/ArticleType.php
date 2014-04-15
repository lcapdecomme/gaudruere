<?php

namespace Gaudruere\GiteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

use Gaudruere\GiteBundle\Entity\MenuRepository;

class ArticleType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('titre', 'text', array('max_length' => 250, 'required' => true, 'label' => 'titre', 'trim' => true, 'read_only' => false, 'error_bubbling' => false))
            ->add('description', 'textarea', array('attr' => array('class' => 'tinymce','data-theme' => 'medium', 'required' => true)))
            ->add('fichierUpload', 'file', array('required' => false))
            ->add('ordre','integer')
            ->add('tailleImage', 'choice', array('choices' => array('N' => "Non affiché", 'P' => "Petit", 'M' => "Moyen", 'G' => "Grand"),
                          'multiple' => false,
                          'expanded' => true,
                          'empty_value' => '- Choisissez une option -',
                          'empty_data'  => -1))
            ->add('positionImage', 'choice', array('choices' => array('G' => "Gauche", 'D' => "Droite"),
                          'multiple' => false,
                          'expanded' => true,
                          'empty_value' => '- Choisissez une option -',
                          'empty_data'  => -1))
            ->add('bordureImage', 'choice', array('choices' => array('A' => "Avec bordure", 'S' => "Sans bordure"),
                          'multiple' => false,
                          'expanded' => true,
                          'empty_value' => '- Choisissez une option -',
                          'empty_data'  => -1))
            ->add('menu', 'entity', array(
                      'class' => 'Gaudruere\GiteBundle\Entity\Menu',
                      'property' => 'titre',
                      'query_builder' => function(MenuRepository $er) {
                                              return $er->findMenusArticle("article");
                                          },
                      	'required' => true));
    }

    public function getName()
    {
        return 'gaudruere_gitebundle_articletype';
    }
    
    // Le but de la fonction getDefaultOptions est d'indiquer la classe de l'objet utilisé pour ce formulaire
    public function getDefaultOptions(array $options)
    {
        return array(
            'data_class' => 'Gaudruere\GiteBundle\Entity\Article',
            'csrf_protection' => false,
            'csrf_field_name' => '_token',
            // a unique key to help generate the secret token
            'intention'       => 'task_item',
        );
    }
}
