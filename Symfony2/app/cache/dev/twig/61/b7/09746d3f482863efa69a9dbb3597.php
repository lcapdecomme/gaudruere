<?php

/* GaudruereGiteBundle:Menu:editsousmenu.html.twig */
class __TwigTemplate_61b709746d3f482863efa69a9dbb3597 extends Twig_Template
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

  <h2>Modification du sous-menu  : ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "titre"), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "id"), "html", null, true);
        echo ")</h2>


<form action=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("adminSousMenu_update", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "edit_form"));
        echo ">
    ";
        // line 11
        echo $this->env->getExtension('form')->renderErrors($this->getContext($context, "edit_form"));
        echo "
    
    <div>
        ";
        // line 14
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "edit_form"), "titre"), "Nom du sous-menu");
        echo "
        ";
        // line 15
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "edit_form"), "titre"));
        echo "
        ";
        // line 16
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "edit_form"), "titre"));
        echo "
    </div>

    <div>
        ";
        // line 20
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "edit_form"), "fichierUpload"), "Vignette");
        echo "
        <img  style=\"width:150px\" src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(((("uploads/vignettes/" . $this->getAttribute($this->getContext($context, "entity"), "id")) . "/") . $this->getAttribute($this->getContext($context, "entity"), "cheminPhoto"))), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "cheminPhoto"), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "cheminPhoto"), "html", null, true);
        echo "\" />
        ";
        // line 22
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "edit_form"), "fichierUpload"));
        echo "
    </div>    
        
    <div>
        ";
        // line 26
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "edit_form"), "fichierUpload"), "Photo");
        echo "
        ";
        // line 27
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "edit_form"), "fichierUpload"), array("attr" => array("size" => "75")));
        echo " 
        ";
        // line 28
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "edit_form"), "fichierUpload"));
        echo "
    </div>
          
    <div>
        ";
        // line 32
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "edit_form"), "ordre"), "Ordre");
        echo "
        ";
        // line 33
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "edit_form"), "ordre"));
        echo "
        ";
        // line 34
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "edit_form"), "ordre"));
        echo "
    </div>
      

    <div>
        ";
        // line 39
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "edit_form"), "ordre"), "Menu parent");
        echo "
        ";
        // line 40
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "edit_form"), "menuParent"));
        echo "
        ";
        // line 41
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "edit_form"), "menuParent"));
        echo "
    </div>     


    <p>
    \t<button type=\"submit\">Valider</button>
    </p>
</form>    



  
  <form action=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("adminSousMenu_delete", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\" method=\"post\">
      ";
        // line 54
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "delete_form"));
        echo "
      <p>
        <button type=\"submit\" onclick=\"return confirm('Supprimer cet objet ?');\">Supprimer ce sous-menu</button>
      </p>
  </form>

  <a class=\"retour\" href=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("adminMenu"), "html", null, true);
        echo "\">Retour à la liste des menus</a>
</div>

              
";
    }

    public function getTemplateName()
    {
        return "GaudruereGiteBundle:Menu:editsousmenu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
