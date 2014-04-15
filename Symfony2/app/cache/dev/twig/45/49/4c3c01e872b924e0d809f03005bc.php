<?php

/* GaudruereGiteBundle:Article:edit.html.twig */
class __TwigTemplate_45494c3c01e872b924e0d809f03005bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'logocontent' => array($this, 'block_logocontent'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "GaudruereGiteBundle::layouts/gaudruerebaselayout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_logocontent($context, array $blocks = array())
    {
        echo "  <a class=\"logoadmin\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("adminGaudruere"), "html", null, true);
        echo "\"></a>";
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        echo " 

<div class=\"admin\">     

  ";
        // line 7
        $this->displayBlock('logocontent', $context, $blocks);
        // line 8
        echo "  <h2>Modification de l'article : ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "titre"), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "id"), "html", null, true);
        echo ")</h2>

";
        // line 10
        echo $this->env->getExtension('stfalcon_tinymce')->tinymce_init();
        echo "

<form action=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("adminArticle_update", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "edit_form"));
        echo ">
    <!-- Les erreurs générales du formulaire. -->
    ";
        // line 14
        echo $this->env->getExtension('form')->renderErrors($this->getContext($context, "edit_form"));
        echo "
    
    <div>
        ";
        // line 17
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "edit_form"), "titre"), "Titre de l'article");
        echo "
        ";
        // line 18
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "edit_form"), "titre"));
        echo "                     
        ";
        // line 19
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "edit_form"), "titre"));
        echo "
    </div>
    
    <div>
        ";
        // line 23
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "edit_form"), "description"), "Description");
        echo "
        ";
        // line 24
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "edit_form"), "description"));
        echo "               
        ";
        // line 25
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "edit_form"), "description"));
        echo "
    </div>
    
    <div>
        ";
        // line 29
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "edit_form"), "fichierUpload"), "Photo");
        echo "
        ";
        // line 30
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "edit_form"), "fichierUpload"), array("attr" => array("size" => "75")));
        echo " 
        ";
        // line 31
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "edit_form"), "fichierUpload"));
        echo "
    </div>
    
    <div>
        ";
        // line 35
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "edit_form"), "tailleImage"), "Affichage");
        echo "
        ";
        // line 36
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "edit_form"), "tailleImage"));
        echo " 
        ";
        // line 37
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "edit_form"), "tailleImage"));
        echo "
    </div>
    
    <div>
        ";
        // line 41
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "edit_form"), "positionImage"), "Position de l'image");
        echo "
        ";
        // line 42
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "edit_form"), "positionImage"));
        echo " 
        ";
        // line 43
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "edit_form"), "positionImage"));
        echo "
    </div>
    
    <div>
        ";
        // line 47
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "edit_form"), "bordureImage"), "Bordure sur l'image");
        echo "
        ";
        // line 48
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "edit_form"), "bordureImage"));
        echo " 
        ";
        // line 49
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "edit_form"), "bordureImage"));
        echo "
    </div>
       
    <div>
        ";
        // line 53
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "edit_form"), "ordre"), "Ordre d'affichage");
        echo "
        ";
        // line 54
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "edit_form"), "ordre"));
        echo "      
        ";
        // line 55
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "edit_form"), "ordre"));
        echo "
    </div>
    
    <div>
        ";
        // line 59
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "edit_form"), "menu"), "Menu associé ");
        echo "
        ";
        // line 60
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "edit_form"), "menu"));
        echo "       
        ";
        // line 61
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "edit_form"), "menu"));
        echo "
    </div>

            
    <h2>Rendu</h2>
    <div class=\"renduArticle\">

        <h2>";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "getTitre", array(), "method"), "html", null, true);
        echo "</h2>
        ";
        // line 69
        if (($this->getAttribute($this->getContext($context, "entity"), "getTailleImage", array(), "method") != "N")) {
            // line 70
            echo "            <img class=\"
            ";
            // line 71
            if (($this->getAttribute($this->getContext($context, "entity"), "getBordureImage", array(), "method") == "A")) {
                echo "    
            bordure 
            ";
            }
            // line 74
            echo "            ";
            if (($this->getAttribute($this->getContext($context, "entity"), "getPositionImage", array(), "method") == "G")) {
                echo "    
            gauche   
            ";
            } else {
                // line 77
                echo "            droite    
            ";
            }
            // line 79
            echo "            ";
            if (($this->getAttribute($this->getContext($context, "entity"), "getTailleImage", array(), "method") == "P")) {
                // line 80
                echo "            petit     
            ";
            } elseif (($this->getAttribute($this->getContext($context, "entity"), "getTailleImage", array(), "method") == "M")) {
                // line 82
                echo "            moyen  
            ";
            } elseif (($this->getAttribute($this->getContext($context, "entity"), "getTailleImage", array(), "method") == "G")) {
                // line 84
                echo "            grand 
            ";
            }
            // line 85
            echo "      
            \" src=\"";
            // line 86
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(((("uploads/images/" . $this->getAttribute($this->getContext($context, "entity"), "id")) . "/") . $this->getAttribute($this->getContext($context, "entity"), "cheminPhoto"))), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "cheminPhoto"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "cheminPhoto"), "html", null, true);
            echo "\" />
       ";
        }
        // line 87
        echo "     
       <p>";
        // line 88
        echo $this->getAttribute($this->getContext($context, "entity"), "getDescription", array(), "method");
        echo "</p>
    </div>

    <p>
    \t<button type=\"submit\">Valider</button>
    </p>    
</form>    

<form action=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("adminArticle_delete", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\" method=\"post\">
    ";
        // line 97
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "delete_form"));
        echo "                                
    <p>
      <button type=\"submit\" onclick=\"return confirm('Supprimer cet objet ?');\" >Supprimer cet article</button>
    </p>
</form>

<a class=\"retour\" href=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("adminArticle"), "html", null, true);
        echo "\">Retour à la liste des articles</a>

</div>

              
";
    }

    public function getTemplateName()
    {
        return "GaudruereGiteBundle:Article:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
