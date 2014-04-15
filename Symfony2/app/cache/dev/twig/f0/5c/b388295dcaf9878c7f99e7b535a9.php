<?php

/* GaudruereGiteBundle:Menu:showsousmenu.html.twig */
class __TwigTemplate_f05cb388295dcaf9878c7f99e7b535a9 extends Twig_Template
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

  <h2>Sous-Menu : ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "titre"), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "id"), "html", null, true);
        echo ")</h2>
  
  <table class=\"record_properties\">
      <tbody>
          <tr>
              <th>Titre</th>
              <td>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "titre"), "html", null, true);
        echo "</td>
          </tr>
   
          <tr>
              <th>Vignette</th>
              <td><img style=\"width:150px\" src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(((("uploads/vignettes/" . $this->getAttribute($this->getContext($context, "entity"), "id")) . "/") . $this->getAttribute($this->getContext($context, "entity"), "cheminPhoto"))), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "cheminPhoto"), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "cheminPhoto"), "html", null, true);
        echo "\" /></td>
          </tr>    
          <tr>
              <th>Ordre</th>
              <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "ordre"), "html", null, true);
        echo "</td>
          </tr> 
          <tr>
              <th>Menu Parent</th>
              <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "menuparent"), "html", null, true);
        echo "</td>
          </tr>
      </tbody>
  </table>

  
  <form action=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("adminSousMenu_delete", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\" method=\"post\">
      ";
        // line 33
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "delete_form"));
        echo "
      <p>
          <button type=\"submit\" onclick=\"return confirm('Supprimer cet objet ?');\">Supprimer ce sous-menu</button>
      </p>
  </form>
  
  <a class=\"retour\" href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("adminSousMenu_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\">Modifier ce sous-menu</a>
  
  <a class=\"retour\" href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("adminMenu"), "html", null, true);
        echo "\">Retour à la liste des menus</a>
</div>

              
";
    }

    public function getTemplateName()
    {
        return "GaudruereGiteBundle:Menu:showsousmenu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
