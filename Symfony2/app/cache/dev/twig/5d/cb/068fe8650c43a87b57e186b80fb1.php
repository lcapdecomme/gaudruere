<?php

/* GaudruereGiteBundle:Accueil:index.html.twig */
class __TwigTemplate_5dcb068fe8650c43a87b57e186b80fb1 extends Twig_Template
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

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "\t<div id=\"slideshowAccueil\"></div> 
";
    }

    public function getTemplateName()
    {
        return "GaudruereGiteBundle:Accueil:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
