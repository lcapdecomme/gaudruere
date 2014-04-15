<?php

/* GaudruereGiteBundle:Admin:index.html.twig */
class __TwigTemplate_249b18f054ac139993653bfbb0ba2cdc extends Twig_Template
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

    // line 5
    public function block_logocontent($context, array $blocks = array())
    {
        echo "  <a class=\"logoadmin\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("adminGaudruere"), "html", null, true);
        echo "\"></a>";
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
  ";
        // line 5
        $this->displayBlock('logocontent', $context, $blocks);
        // line 6
        echo "  <div class=\"admin\"> 

      <h2>Administration du site</h2> 
      <a class=\"logoadmin\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("logoutAdmin"), "html", null, true);
        echo "\">Déconnexion</a>    
      <ul class=\"articles\">
          <li class=\"article\">
              <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("adminMenu"), "html", null, true);
        echo "\"><p class=\"optionadmin\">Les menus</p></a>
          </li>
          <li class=\"article\">
              <a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("adminArticle"), "html", null, true);
        echo "\"><p class=\"optionadmin\">Les articles</p></a>
          </li>
          <li class=\"article\">
              <a href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("adminReservation"), "html", null, true);
        echo "\"><p class=\"optionadmin\">Demande de réservations</p></a>
          </li>  
          <li class=\"article\">
              <a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("adminArticleContact_edit"), "html", null, true);
        echo "\"><p class=\"optionadmin\">La page contact</p></a>
          </li>
          <li class=\"article\">
              <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("adminArticleAcces_edit"), "html", null, true);
        echo "\"><p class=\"optionadmin\">La page accès</p></a>
          </li>
          <li class=\"article\">
              <a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("adminParametreGeneral_edit"), "html", null, true);
        echo "\"><p class=\"optionadmin\">Paramétrage général</p></a>
          </li> 
          <li class=\"article\">
              <a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("adminContact"), "html", null, true);
        echo "\"><p class=\"optionadmin\">Messages reçus</p></a>
          </li>
          <li class=\"article\">
              <a href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("adminPhotosAccueil"), "html", null, true);
        echo "\"><p class=\"optionadmin\">Photos Accueil</p></a>
          </li>
      </ul>
  </div>
";
    }

    public function getTemplateName()
    {
        return "GaudruereGiteBundle:Admin:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
