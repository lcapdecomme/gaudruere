<?php

/* GaudruereGiteBundle:Admin:login.html.twig */
class __TwigTemplate_4a0e9d7c4470514384267a5294442795 extends Twig_Template
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

      <!--
      ";
        // line 11
        if ($this->getContext($context, "error")) {
            // line 12
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "error"), "message"), "html", null, true);
            echo "</div>
";
        }
        // line 14
        echo "-->

<form action=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("loginCheckAdmin"), "html", null, true);
        echo "\" method=\"post\">
    <label for=\"username\">Utilisateur : </label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getContext($context, "last_username"), "html", null, true);
        echo "\" />
    <br />
    <label for=\"password\">Mot de passe : </label>
    <input type=\"password\" id=\"password\" name=\"_password\" />    
    <br />
    <p>
        <button type=\"submit\">Connexion</button>
    </p>
</form>


  </div>
";
    }

    public function getTemplateName()
    {
        return "GaudruereGiteBundle:Admin:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
