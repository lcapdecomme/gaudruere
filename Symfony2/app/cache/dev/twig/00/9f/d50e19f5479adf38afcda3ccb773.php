<?php

/* GaudruereGiteBundle:Menu:showmenu.html.twig */
class __TwigTemplate_009fd50e19f5479adf38afcda3ccb773 extends Twig_Template
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

  <h2>Menu : ";
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
              <th>Description</th>
              <td>";
        // line 17
        echo $this->getAttribute($this->getContext($context, "entity"), "description");
        echo "</td>
          </tr>
          <tr>
              <th>Ordre</th>
              <td>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "ordre"), "html", null, true);
        echo "</td>
          </tr>
      </tbody>
  </table>

  
  <form action=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("adminMenu_delete", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\" method=\"post\">
      ";
        // line 28
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "delete_form"));
        echo "
      <p>
          <button type=\"submit\" onclick=\"return confirm('Supprimer cet objet ?');\">Supprimer ce menu</button>
      </p>
  </form>
  
  <a class=\"retour\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("adminMenu_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\">Modifier</a>
  
  <a class=\"retour\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("adminMenu"), "html", null, true);
        echo "\">Retour à la liste des menus</a>
</div>

              
";
    }

    public function getTemplateName()
    {
        return "GaudruereGiteBundle:Menu:showmenu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
