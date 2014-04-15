<?php

/* GaudruereGiteBundle:Reservation:liste.html.twig */
class __TwigTemplate_7ebc84ecb18c881abfe7d9902b87e43f extends Twig_Template
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

<h2>Liste des réservations</h2>

<table class=\"admin_records_list\">
    <thead>
        <tr>
            <th>Numéro</th>
            <th>Datedebut</th>
            <th>Datefin</th>
            <th>Valide</th>
            <th>Titre</th>
            <th>Nom</th>
            <th>Codepostal</th>
            <th>Ville</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
    ";
        // line 24
        $context["cpt"] = 1;
        // line 25
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entities"));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 26
            echo "        <tr>
            <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getContext($context, "cpt"), "html", null, true);
            echo "</td>
            ";
            // line 28
            $context["cpt"] = ($this->getContext($context, "cpt") + 1);
            // line 29
            echo "            <td>";
            if ($this->getAttribute($this->getContext($context, "entity"), "dateDebut")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "dateDebut"), "d/m/Y"), "html", null, true);
            }
            echo "</td>
            <td>";
            // line 30
            if ($this->getAttribute($this->getContext($context, "entity"), "dateFin")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "dateFin"), "d/m/Y"), "html", null, true);
            }
            echo "</td>
            <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "reservationValidee"), "html", null, true);
            echo "</td>
            <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "titre"), "html", null, true);
            echo "</td>
            <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "nom"), "html", null, true);
            echo "</td>
            <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "codePostal"), "html", null, true);
            echo "</td>
            <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "ville"), "html", null, true);
            echo "</td>       
            <td><a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("adminReservation_show", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\">voir</a> /  <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("adminReservation_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\">modifier</a></td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 39
        echo "    </tbody>
</table>
<a class=\"retour\" href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("adminGaudruere"), "html", null, true);
        echo "\">Retour à la page d'administration</a>    
</div>          
";
    }

    public function getTemplateName()
    {
        return "GaudruereGiteBundle:Reservation:liste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
