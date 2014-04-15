<?php

/* GaudruereGiteBundle:Reservation:show.html.twig */
class __TwigTemplate_cb4e6f76f5c0dc7c2d4f50587248aaf8 extends Twig_Template
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

  <h2>Réservation</h2>
  

<table class=\"record_properties\">
    <tbody>
        <tr>
            <th>Numéro de réservation</th>
            <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "id"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Du</th>
            <td>";
        // line 18
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "dateDebut"), "d/m/Y"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Au</th>
            <td>";
        // line 22
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "dateFin"), "d/m/Y"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Validé (O/N)</th>
            <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "reservationValidee"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Titre</th>
            <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "titre"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Nom</th>
            <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "nom"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Prenom</th>
            <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "prenom"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Rue</th>
            <td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "rue1"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th></th>
            <td>";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "rue2"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th></th>
            <td>";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "rue3"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>CP</th>
            <td>";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "codePostal"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Ville</th>
            <td>";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "ville"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Pays</th>
            <td>";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "pays"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Nb adultes</th>
            <td>";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "nbAdultes"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Nb enfants</th>
            <td>";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "nbEnfants"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Nb bébés</th>
            <td>";
        // line 74
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "nbBebes"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Tél.</th>
            <td>";
        // line 78
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "tel"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>";
        // line 82
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "email"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Commentaire</th>
            <td>";
        // line 86
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "commentaire"), "html", null, true);
        echo "</td>
        </tr>
    </tbody>
</table>

 
  <form action=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("adminReservation_delete", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\" method=\"post\">
      ";
        // line 93
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "delete_form"));
        echo "
      <p>
        <button type=\"submit\" onclick=\"return confirm('Supprimer cet objet ?');\" >Supprimer cette demande de réservation</button>
      </p>
  </form>
  
  <a class=\"retour\" href=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("adminReservation_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\">Modifier</a>
  
  <a class=\"retour\" href=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("adminReservation"), "html", null, true);
        echo "\">Retour à la liste des réservations</a>
</div>

              
";
    }

    public function getTemplateName()
    {
        return "GaudruereGiteBundle:Reservation:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
