<?php

/* GaudruereGiteBundle:Menu:index.html.twig */
class __TwigTemplate_55832b2ec39ae872a006f76895f98910 extends Twig_Template
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

    <h2>Liste des menus et sous-menus</h2>
    
    <table class=\"admin_records_list\">
        <thead>
            <tr>
                <th>Numéro</th>
                <th>Titre</th>
                <th>Type</th>
                <th>Ordre</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>    
        ";
        // line 20
        $context["cpt"] = 1;
        // line 21
        echo "        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "menusTries"));
        foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
            // line 22
            echo "            ";
            if ((null === $this->getAttribute($this->getContext($context, "menu"), "menuParent"))) {
                // line 23
                echo "                <tr class=\"menu\">
            ";
            } else {
                // line 24
                echo "    
                <tr class=\"sousmenu\">
            ";
            }
            // line 27
            echo "                <td>";
            echo twig_escape_filter($this->env, $this->getContext($context, "cpt"), "html", null, true);
            echo "</td>        
                ";
            // line 28
            $context["cpt"] = ($this->getContext($context, "cpt") + 1);
            // line 29
            echo "                ";
            if ((!(null === $this->getAttribute($this->getContext($context, "menu"), "menuParent")))) {
                // line 30
                echo "                    <td class=\"droite\">.&nbsp;&nbsp; ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "menu"), "titre"), "html", null, true);
                echo "</td>  
                ";
            } else {
                // line 31
                echo "    
                    <td class=\"droite\">";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "menu"), "titre"), "html", null, true);
                echo "</td>
                ";
            }
            // line 33
            echo "    
                <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "menu"), "type"), "html", null, true);
            echo "</td>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "menu"), "ordre"), "html", null, true);
            echo "</td>  
                ";
            // line 36
            if ((null === $this->getAttribute($this->getContext($context, "menu"), "menuParent"))) {
                // line 37
                echo "                    <td><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("adminMenu_show", array("id" => $this->getAttribute($this->getContext($context, "menu"), "id"))), "html", null, true);
                echo "\">voir</a> / <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("adminMenu_edit", array("id" => $this->getAttribute($this->getContext($context, "menu"), "id"))), "html", null, true);
                echo "\">modifier</a></td>
                ";
            } else {
                // line 38
                echo "    
                    <td><a href=\"";
                // line 39
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("adminSousMenu_show", array("id" => $this->getAttribute($this->getContext($context, "menu"), "id"))), "html", null, true);
                echo "\">voir</a> / <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("adminSousMenu_edit", array("id" => $this->getAttribute($this->getContext($context, "menu"), "id"))), "html", null, true);
                echo "\">modifier</a></td>
                ";
            }
            // line 40
            echo "                      
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 43
        echo "        </tbody>
    </table>
    
    <a class=\"retour\" href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("adminMenu_new"), "html", null, true);
        echo "\">Ajouter un Menu</a>
    
    <a class=\"retour\" href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("adminSousMenu_new"), "html", null, true);
        echo "\">Ajouter un Sous-Menu</a>
    
    <a class=\"retour\" href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("adminGaudruere"), "html", null, true);
        echo "\">Retour à la page d'administration</a>   
    
</div>          
";
    }

    public function getTemplateName()
    {
        return "GaudruereGiteBundle:Menu:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
