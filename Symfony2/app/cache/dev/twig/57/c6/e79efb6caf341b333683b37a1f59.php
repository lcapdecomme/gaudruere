<?php

/* GaudruereGiteBundle::layouts/gaudruerebaselayout.html.twig */
class __TwigTemplate_57c6e79efb6caf341b333683b37a1f59 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'styles' => array($this, 'block_styles'),
            'js' => array($this, 'block_js'),
            'logocontent' => array($this, 'block_logocontent'),
            'content' => array($this, 'block_content'),
            'bodycontent' => array($this, 'block_bodycontent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "GaudruereGiteBundle::layouts/htmlbaselayout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Chambre d'hôte de la Gaudruère - situé à Jupilles, près du Mans";
    }

    // line 5
    public function block_styles($context, array $blocks = array())
    {
        // line 6
        echo "\t";
        if (($this->getContext($context, "url_du_site") != "localhost")) {
            echo "  
\t\t<link rel=\"stylesheet\" href=\"/bundles/gaudrueregite/css/acces.css\" type=\"text/css\"/>
\t\t<link rel=\"stylesheet\" href=\"/bundles/gaudrueregite/css/article.css\" type=\"text/css\"/>
\t\t<link rel=\"stylesheet\" href=\"/bundles/gaudrueregite/css/articles.css\" type=\"text/css\"/>
\t\t<link rel=\"stylesheet\" href=\"/bundles/gaudrueregite/css/calendrier.css\" type=\"text/css\"/>
\t\t<link rel=\"stylesheet\" href=\"/bundles/gaudrueregite/css/contact.css\" type=\"text/css\"/>
\t\t<link rel=\"stylesheet\" href=\"/bundles/gaudrueregite/css/gaudruere.css\" type=\"text/css\"/>  
\t\t<link rel=\"stylesheet\" href=\"/bundles/gaudrueregite/css/jquery.jquery-ui.css\" type=\"text/css\"/>
\t\t<link rel=\"stylesheet\" href=\"/bundles/gaudrueregite/css/menu.css\" type=\"text/css\"/>
\t\t<link rel=\"stylesheet\" href=\"/bundles/gaudrueregite/css/slideshow.css\" type=\"text/css\"/>
\t\t<link rel=\"stylesheet\" href=\"/bundles/gaudrueregite/css/reservation.css\" type=\"text/css\"/>
\t\t<link rel=\"stylesheet\" href=\"/bundles/gaudrueregite/css/admin.css\" type=\"text/css\"/>
\t\t<!--[if IE 7]>
          <link rel=\"stylesheet\" href=\"/bundles/gaudrueregite/css/ie7.css\" type=\"text/css\"/>
    <![endif]-->
  ";
        } else {
            // line 21
            echo "    
\t\t<link rel=\"stylesheet\" href=\"/gaudruere/web/bundles/gaudrueregite/css/acces.css\" type=\"text/css\"/>
\t\t<link rel=\"stylesheet\" href=\"/gaudruere/web/bundles/gaudrueregite/css/article.css\" type=\"text/css\"/>
\t\t<link rel=\"stylesheet\" href=\"/gaudruere/web/bundles/gaudrueregite/css/articles.css\" type=\"text/css\"/>
\t\t<link rel=\"stylesheet\" href=\"/gaudruere/web/bundles/gaudrueregite/css/calendrier.css\" type=\"text/css\"/>
\t\t<link rel=\"stylesheet\" href=\"/gaudruere/web/bundles/gaudrueregite/css/contact.css\" type=\"text/css\"/>
\t\t<link rel=\"stylesheet\" href=\"/gaudruere/web/bundles/gaudrueregite/css/gaudruere.css\" type=\"text/css\"/>  
\t\t<link rel=\"stylesheet\" href=\"/gaudruere/web/bundles/gaudrueregite/css/jquery.jquery-ui.css\" type=\"text/css\"/>
\t\t<link rel=\"stylesheet\" href=\"/gaudruere/web/bundles/gaudrueregite/css/menu.css\" type=\"text/css\"/>
\t\t<link rel=\"stylesheet\" href=\"/gaudruere/web/bundles/gaudrueregite/css/slideshow.css\" type=\"text/css\"/>
\t\t<link rel=\"stylesheet\" href=\"/gaudruere/web/bundles/gaudrueregite/css/reservation.css\" type=\"text/css\"/>
\t\t<link rel=\"stylesheet\" href=\"/gaudruere/web/bundles/gaudrueregite/css/admin.css\" type=\"text/css\"/>
\t\t<!--[if IE 7]>    
          <link rel=\"stylesheet\" href=\"/gaudruere/web/bundles/gaudrueregite/css/ie7.css\" type=\"text/css\"/>
    <![endif]-->
  ";
        }
        // line 36
        echo "       
";
    }

    // line 38
    public function block_js($context, array $blocks = array())
    {
        // line 39
        echo "\t";
        if (($this->getContext($context, "url_du_site") != "localhost")) {
            echo "  
      <script src=\"/bundles/gaudrueregite/js/jquery.min.js\" type=\"text/javascript\"></script>
      <script src=\"/bundles/gaudrueregite/js/jquery.easing.js\" type=\"text/javascript\"></script>
      <script src=\"/bundles/gaudrueregite/js/jquery.cross-slide.min.js\" type=\"text/javascript\"></script>
      <script src=\"/bundles/gaudrueregite/js/jquery.form.js\" type=\"text/javascript\"></script>
      <script src=\"/bundles/gaudrueregite/js/jquery.validate.min.js\" type=\"text/javascript\"></script>
      <script src=\"/bundles/gaudrueregite/js/jquery.jquery-ui.min.js\" type=\"text/javascript\"></script>
      <script src=\"/bundles/gaudrueregite/js/reservation.js\" type=\"text/javascript\"></script>
      <script src=\"/bundles/gaudrueregite/js/scriptsServer.js\" type=\"text/javascript\"></script>   
      <script src=\"http://maps.googleapis.com/maps/api/js?key=AIzaSyDhrrOrqKAnKsoXzOwDl8Wld8JyM-9CMuk&amp;sensor=true\" type=\"text/javascript\"></script>  
  ";
        } else {
            // line 49
            echo "     
    \t";
            // line 50
            if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
                // asset "7b9cbe4_0"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7b9cbe4_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/7b9cbe4_jquery.min_1.js");
                // line 61
                echo "    \t<script src=\"";
                echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
                echo "\" type=\"text/javascript\"></script>
    \t";
                // asset "7b9cbe4_1"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7b9cbe4_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/7b9cbe4_jquery.easing_2.js");
                echo "    \t<script src=\"";
                echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
                echo "\" type=\"text/javascript\"></script>
    \t";
                // asset "7b9cbe4_2"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7b9cbe4_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/7b9cbe4_jquery.cross-slide.min_3.js");
                echo "    \t<script src=\"";
                echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
                echo "\" type=\"text/javascript\"></script>
    \t";
                // asset "7b9cbe4_3"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7b9cbe4_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/7b9cbe4_reservation_4.js");
                echo "    \t<script src=\"";
                echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
                echo "\" type=\"text/javascript\"></script>
    \t";
                // asset "7b9cbe4_4"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7b9cbe4_4") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/7b9cbe4_jquery.form_5.js");
                echo "    \t<script src=\"";
                echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
                echo "\" type=\"text/javascript\"></script>
    \t";
                // asset "7b9cbe4_5"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7b9cbe4_5") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/7b9cbe4_jquery.validate.min_6.js");
                echo "    \t<script src=\"";
                echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
                echo "\" type=\"text/javascript\"></script>
    \t";
                // asset "7b9cbe4_6"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7b9cbe4_6") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/7b9cbe4_jquery.jquery-ui.min_7.js");
                echo "    \t<script src=\"";
                echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
                echo "\" type=\"text/javascript\"></script>
    \t";
                // asset "7b9cbe4_7"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7b9cbe4_7") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/7b9cbe4_scriptsLocal_9.js");
                echo "    \t<script src=\"";
                echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
                echo "\" type=\"text/javascript\"></script>
    \t";
            } else {
                // asset "7b9cbe4"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7b9cbe4") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/7b9cbe4.js");
                echo "    \t<script src=\"";
                echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
                echo "\" type=\"text/javascript\"></script>
    \t";
            }
            unset($context["asset_url"]);
            // line 62
            echo "         
      <script src=\"http://maps.googleapis.com/maps/api/js?key=AIzaSyDhrrOrqKAnKsoXzOwDl8Wld8JyM-9CMuk&amp;sensor=true\" type=\"text/javascript\"></script>      \t
  ";
        }
        // line 64
        echo "     
";
    }

    // line 72
    public function block_logocontent($context, array $blocks = array())
    {
        echo "  <a class=\"logo\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("accueilGaudruere"), "html", null, true);
        echo "\">&nbsp;</a>";
    }

    // line 77
    public function block_content($context, array $blocks = array())
    {
        echo "<p>content</p>";
    }

    // line 68
    public function block_bodycontent($context, array $blocks = array())
    {
        echo "   
\t<div id=\"bandeau\"></div>
\t<div id=\"page\">
      <div id=\"header\" class=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->getContext($context, "stylepage"), "html", null, true);
        echo "\">
\t\t    ";
        // line 72
        $this->displayBlock('logocontent', $context, $blocks);
        // line 73
        echo "        <div id=\"menu\">";
        echo $this->env->getExtension('printTree')->printTree($this->getContext($context, "menus"), $this->getContext($context, "titreMenu"));
        echo "</div>
      </div>
      
      <div id=\"content\">                                
      ";
        // line 77
        $this->displayBlock('content', $context, $blocks);
        echo "           
      </div>
      
      <div id=\"footer\">
      
      <span id=\"contactfooter\"><a href=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contactGaudruere"), "html", null, true);
        echo "\">Contact</a></span>
      <span id=\"titrefooter\">";
        // line 83
        echo $this->getAttribute($this->getContext($context, "parametres"), "phraseBandeau");
        echo "</span>
\t  <span id=\"remerciementfooter\">";
        // line 84
        echo $this->getAttribute($this->getContext($context, "parametres"), "phraseRemerciement");
        echo "</span>
      
      </div>     
  </div>

";
    }

    public function getTemplateName()
    {
        return "GaudruereGiteBundle::layouts/gaudruerebaselayout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
