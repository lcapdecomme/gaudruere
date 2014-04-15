<?php

/* GaudruereGiteBundle:Parametres:editAcces.html.twig */
class __TwigTemplate_f3b5b85d3d26c80207c66b768cc9d3fe extends Twig_Template
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
        echo "  <h2>Modification de la page accès</h2>
    
    ";
        // line 10
        echo $this->env->getExtension('stfalcon_tinymce')->tinymce_init();
        echo "
    
    <form action=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("adminArticleAcces_update"), "html", null, true);
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
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "edit_form"), "descriptionAcces"), "Description");
        echo "
            ";
        // line 18
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "edit_form"), "descriptionAcces"));
        echo "               
            ";
        // line 19
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "edit_form"), "descriptionAcces"));
        echo "
        </div>
        
        <p>
        \t<button type=\"submit\">Valider</button>
        </p>    
    </form>    
    
    <a class=\"retour\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("adminGaudruere"), "html", null, true);
        echo "\">Retour à la page d'administration</a>   
</div>

              
";
    }

    public function getTemplateName()
    {
        return "GaudruereGiteBundle:Parametres:editAcces.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
