<?php

/* GaudruereGiteBundle:Articles:index.html.twig */
class __TwigTemplate_e03f77278dad93195d6bc226ccea90be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
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

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo $this->getAttribute($this->getContext($context, "menu"), "description");
        echo "

<ul class=\"articles\">
";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "sousmenus"));
        foreach ($context['_seq'] as $context["_key"] => $context["sousmenu"]) {
            // line 8
            echo "  <li class=\"article\">
      ";
            // line 9
            if (($this->getAttribute($this->getContext($context, "sousmenu"), "getType", array(), "method") == "article")) {
                // line 10
                echo "          <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("articleGaudruere", array("titreArticle" => $this->getAttribute($this->getContext($context, "sousmenu"), "getNom", array(), "method"))), "html", null, true);
                echo "\">
      ";
            } elseif (($this->getAttribute($this->getContext($context, "sousmenu"), "getType", array(), "method") == "acces")) {
                // line 12
                echo "          <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("accesGaudruere"), "html", null, true);
                echo "\">
      ";
            } elseif (($this->getAttribute($this->getContext($context, "sousmenu"), "getType", array(), "method") == "contact")) {
                // line 14
                echo "          <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contactGaudruere"), "html", null, true);
                echo "\">
      ";
            }
            // line 16
            echo "      <p class=\"titremenu\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "sousmenu"), "getTitre", array(), "method"), "html", null, true);
            echo "&nbsp;></p>
      <img class=\"illustration\" src=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(((("uploads/vignettes/" . $this->getAttribute($this->getContext($context, "sousmenu"), "id")) . "/") . $this->getAttribute($this->getContext($context, "sousmenu"), "cheminPhoto"))), "html", null, true);
            echo "\" alt=\"Photo absente\" />
      </a>
  </li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sousmenu'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 21
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "GaudruereGiteBundle:Articles:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
