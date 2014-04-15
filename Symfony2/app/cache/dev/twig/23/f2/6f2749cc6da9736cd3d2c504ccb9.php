<?php

/* GaudruereGiteBundle::layouts/htmlbaselayout.html.twig */
class __TwigTemplate_23f26f2749cc6da9736cd3d2c504ccb9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'metas' => array($this, 'block_metas'),
            'title' => array($this, 'block_title'),
            'styles' => array($this, 'block_styles'),
            'js' => array($this, 'block_js'),
            'bodycontent' => array($this, 'block_bodycontent'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
<html lang=\"fr\">
\t<head>
  <script type=\"text/javascript\">

      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-33904426-1']);
      _gaq.push(['_trackPageview']);
    
      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
    
    </script>\t\t
\t\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />
\t\t";
        // line 18
        $this->displayBlock('metas', $context, $blocks);
        // line 20
        echo "\t\t<title>";
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t\t";
        // line 21
        $this->displayBlock('styles', $context, $blocks);
        // line 22
        echo "\t\t";
        $this->displayBlock('js', $context, $blocks);
        // line 23
        echo "\t</head>
    <body>
\t\t";
        // line 25
        $this->displayBlock('bodycontent', $context, $blocks);
        // line 27
        echo "    </body>
</html>

";
    }

    // line 18
    public function block_metas($context, array $blocks = array())
    {
        // line 19
        echo "\t\t";
    }

    // line 20
    public function block_title($context, array $blocks = array())
    {
    }

    // line 21
    public function block_styles($context, array $blocks = array())
    {
        echo " ";
    }

    // line 22
    public function block_js($context, array $blocks = array())
    {
        echo "\t";
    }

    // line 25
    public function block_bodycontent($context, array $blocks = array())
    {
        // line 26
        echo "\t\t";
    }

    public function getTemplateName()
    {
        return "GaudruereGiteBundle::layouts/htmlbaselayout.html.twig";
    }

}
