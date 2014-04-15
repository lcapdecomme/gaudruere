<?php

/* GaudruereGiteBundle:Menu:newmenu.html.twig */
class __TwigTemplate_f421e901640fb2d693189eaf06e1d12b extends Twig_Template
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

    // line 4
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
  ";
        // line 4
        $this->displayBlock('logocontent', $context, $blocks);
        // line 5
        echo "<div class=\"admin\">     

  <h2>Création d'un menu</h2>

";
        // line 9
        echo $this->env->getExtension('stfalcon_tinymce')->tinymce_init();
        echo "

<form action=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("adminMenu_create"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "form"));
        echo ">
    <!-- Les erreurs générales du formulaire. -->
    ";
        // line 13
        echo $this->env->getExtension('form')->renderErrors($this->getContext($context, "form"));
        echo "
    
    <div>
        ";
        // line 16
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "titre"), "Titre du menu");
        echo "
        ";
        // line 17
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "titre"));
        echo "                     
        ";
        // line 18
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "form"), "titre"));
        echo "
    </div>
    
    <div>
        ";
        // line 22
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "description"), "Description");
        echo "
        ";
        // line 23
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "description"));
        echo "               
        ";
        // line 24
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "form"), "description"));
        echo "
    </div>

    <div>
        ";
        // line 28
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "ordre"), "Ordre d'affichage");
        echo "
        ";
        // line 29
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "ordre"));
        echo "      
        ";
        // line 30
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "form"), "ordre"));
        echo "
    </div>

    <p>
    \t<button type=\"submit\">Valider</button>
    </p>
</form>  



  <a class=\"retour\" href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("adminMenu"), "html", null, true);
        echo "\">Retour à la liste des menus</a>
</div>

              
";
    }

    public function getTemplateName()
    {
        return "GaudruereGiteBundle:Menu:newmenu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
