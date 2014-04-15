<?php

/* GaudruereGiteBundle:Article:liste.html.twig */
class __TwigTemplate_f6fda2aa5b5e3a83f69b5e7b6bca07d6 extends Twig_Template
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

    // line 8
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
<div class=\"admin\">  

<h2>Liste des articles</h2>

  ";
        // line 8
        $this->displayBlock('logocontent', $context, $blocks);
        // line 9
        echo "<table class=\"admin_records_list\">
    <thead>
        <tr>
            <th>Numéro</th>
            <th>Titre de l'article</th>
            <th>Menu associé</th>
            <th>Ordre</th>
            <th>Image</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
    ";
        // line 21
        $context["cpt"] = 1;
        // line 22
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entities"));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 23
            echo "        <tr>
            <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getContext($context, "cpt"), "html", null, true);
            echo "</td>
            ";
            // line 25
            $context["cpt"] = ($this->getContext($context, "cpt") + 1);
            // line 26
            echo "            <td class=\"droite\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "titre"), "html", null, true);
            echo "</td>  
            <td class=\"droite\">";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "menu"), "html", null, true);
            echo "</td>  
            <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "ordre"), "html", null, true);
            echo "</td>  
            ";
            // line 29
            if (($this->getAttribute($this->getContext($context, "entity"), "cheminPhoto") != "")) {
                // line 30
                echo "                <td>X</td>          
             ";
            } else {
                // line 32
                echo "                <td>&nbsp;</td>   
            ";
            }
            // line 34
            echo "            <td><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("adminArticle_show", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\">voir</a> /  <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("adminArticle_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\">modifier</a></td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 37
        echo "    </tbody>
</table>

<a class=\"retour\" href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("adminArticle_new"), "html", null, true);
        echo "\">Ajouter un nouvel article</a>
<a class=\"retour\" href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("adminGaudruere"), "html", null, true);
        echo "\">Retour à la page d'administration</a>    
</div>          
";
    }

    public function getTemplateName()
    {
        return "GaudruereGiteBundle:Article:liste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
