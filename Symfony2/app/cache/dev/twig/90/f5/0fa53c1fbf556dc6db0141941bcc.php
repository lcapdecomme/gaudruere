<?php

/* TwigBundle:Exception:exception.html.twig */
class __TwigTemplate_90f50fa53c1fbf556dc6db0141941bcc extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">

<head>\t\t
    <style type=\"text/css\">
    .header { display:none;} 
    .clear_fix { display:none;}
    * {
\tmargin: 0;
\tpadding: 0;
}
  #content {
  width:100%; !important
  }
html {
\tbackground: url(\"http://www.lagaudruere.fr/bundles/gaudrueregite/css/bg_body.gif\") repeat scroll 0 0 #E0DBBA;  !important
}
body {
\tbackground: url(\"http://www.lagaudruere.fr/bundles/gaudrueregite/css/bg_body.gif\") repeat scroll 0 0 #E0DBBA;  !important
\tcolor: #777777; !important
\tfont: 14px \"Verdana\", Helvetica, Arial, sans-serif;    
}
/* Lucida Calligraphy */


#abandeau {
\tbackground: url(\"http://www.lagaudruere.fr/bundles/gaudrueregite/css/bg_header.gif\") repeat scroll 0 150px transparent;
\theight: 150px;
\twidth: 100%;
}

#apage {
\twidth: 980px;
\tmargin: 0 auto;
}

/* Entete */
#aheader {
\tz-index: 800;
\tposition: absolute;
\ttop: 0;
\theight: 150px;
\twidth: 980px;
\tbackground: url(\"http://www.lagaudruere.fr/bundles/gaudrueregite/css/bg_menu.png\") repeat scroll 0 0 transparent;
}
#aheader a.logo {
background: url(\"http://www.lagaudruere.fr/bundles/gaudrueregite/css/logo.png\") repeat scroll 0 0 transparent;
height: 90px;
width: 390px;
display: block;    
z-index: 1000;
}
/* Content */
#acontent {  
width: 980px;
min-height: 450px;
background:white;
}

/* font utilisé : Lucida Calligraphy */
.aimg404 {
background: url(\"http://www.lagaudruere.fr/bundles/gaudrueregite/css/error404.png\") no-repeat scroll 0 0 white;
height:397px;
width:600px;      
margin: 0 auto;
}

/* font utilisé : Lucida Calligraphy */
.aimg500 {
background: url(\"http://www.lagaudruere.fr/bundles/gaudrueregite/css/error500.png\") no-repeat scroll 0 0 white;
height:397px;
width:600px;      
margin: 0 auto;
}

.amenu {
background: none repeat scroll 0 0 #E29938 !important;
color: #FFFFFF;
display: block;
font-size: 1.1em;
font-weight: bold;
height: 20px;
padding: 12px 15px;
margin-top: 15px;
float: right;
width: 64px;
}
.amenu a {
color:#FFF;
font-weight:bold;   
text-decoration: none;
font-size:14px;
}

/* Bas-de-page */
#afooter {
\tbackground: url(\"http://www.lagaudruere.fr/bundles/gaudrueregite/css/bg_menu.png\") repeat scroll 0 0 transparent;
\theight: 60px;
\twidth: 978px;
\tborder: 1px solid #808080;
}

#afooter H2 {
color: #E18B14;
font-size: 2.2em;
margin: 13px 20px 0 0;
text-align: right;
text-decoration: none;
}

    </style> 
</head>

<body>

\t<div id=\"abandeau\"></div>

\t<div id=\"apage\">

      <div id=\"aheader\">
\t\t        <a class=\"logo\" href=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("accueilGaudruere"), "html", null, true);
        echo "\">&nbsp;</a> 
            <div class=\"amenu\"><a href=\"http://www.lagaudruere.fr/accueil\" class=\"menuactif\">Accueil</a> </div>
      </div>
      
      <div id=\"acontent\">
\t\t\t
\t\t\t";
        // line 127
        if (($this->getContext($context, "status_code") == "404")) {
            // line 128
            echo "\t\t\t\t<div class=\"aimg404\"></div>
\t\t\t";
        } else {
            // line 130
            echo "\t\t\t\t<div class=\"aimg500\"></div>
\t\t\t";
        }
        // line 132
        echo "      </div>
      
      <div id=\"afooter\">
          <h2>Le serveur a retourné \"";
        // line 135
        echo twig_escape_filter($this->env, $this->getContext($context, "status_code"), "html", null, true);
        echo " : ";
        echo twig_escape_filter($this->env, $this->getContext($context, "status_text"), "html", null, true);
        echo "\".</h2>
      </div>     
  </div>
  
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
