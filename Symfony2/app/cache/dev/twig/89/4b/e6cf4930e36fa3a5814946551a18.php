<?php

/* GaudruereGiteBundle:Menu:editmenu.html.twig */
class __TwigTemplate_894be6cf4930e36fa3a5814946551a18 extends Twig_Template
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
        echo "\">&nbsp;</a>";
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

  <h2>Modification du menu : ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "titre"), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "id"), "html", null, true);
        echo ")</h2>
  
";
        // line 9
        echo $this->env->getExtension('stfalcon_tinymce')->tinymce_init();
        echo "

<form action=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("adminMenu_update", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "edit_form"));
        echo ">
    ";
        // line 12
        echo $this->env->getExtension('form')->renderErrors($this->getContext($context, "edit_form"));
        echo "
    
    <div>
        ";
        // line 15
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "edit_form"), "titre"), "Nom du menu");
        echo "
        ";
        // line 16
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "edit_form"), "titre"));
        echo "
        ";
        // line 17
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "edit_form"), "titre"));
        echo "
    </div>
   
    ";
        // line 20
        if (($this->getAttribute($this->getContext($context, "entity"), "type") == "articles")) {
            // line 21
            echo "        <div>
            ";
            // line 22
            echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "edit_form"), "description"), "Description");
            echo "
            ";
            // line 23
            echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "edit_form"), "description"));
            echo "
            ";
            // line 24
            echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "edit_form"), "description"));
            echo "
        </div>
    ";
        }
        // line 27
        echo "      
    <div>
        ";
        // line 29
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "edit_form"), "ordre"), "Ordre");
        echo "
        ";
        // line 30
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "edit_form"), "ordre"));
        echo "
        ";
        // line 31
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "edit_form"), "ordre"));
        echo "
    </div>


    <p>
    \t<button type=\"submit\">Valider</button>
    </p>
</form>    



  
  <form action=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("adminSousMenu_delete", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\" method=\"post\">
      ";
        // line 44
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "delete_form"));
        echo "
      <p>
        <button type=\"submit\" onclick=\"return confirm('Supprimer cet objet ?');\">Supprimer ce menu</button>
      </p>
  </form>

  <a class=\"retour\" href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("adminMenu"), "html", null, true);
        echo "\">Retour à la liste des menus</a>
</div>

              
";
    }

    public function getTemplateName()
    {
        return "GaudruereGiteBundle:Menu:editmenu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
