<?php

/* GaudruereGiteBundle:Reservation:index.html.twig */
class __TwigTemplate_21ae83e4c87d257dd04982db28b2c0de extends Twig_Template
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
        echo "<div class=\"doublepage\">

<div class=\"reservation-navigation\">
  <h2>Formulaire de réservation</h2>
\t<form id=\"formResa\" method=\"post\" action=\"reservation/ajouterReservation\"> 
  
    \t<!-- ligne1 : du ... au .... -->
        <div class=\"ligneFormulaire\">
    \t\t<label class=\"gauche obligatoire\" for=\"datePickerDateDebut\"><em>*&nbsp;</em>Du</label>
    \t\t<input id=\"datePickerDateDebut\" name=\"datePickerDateDebut\" type=\"text\" readonly=\"true\">
    \t\t<label for=\"datePickerDateFin\">au</label>
    \t\t<input id=\"datePickerDateFin\" name=\"datePickerDateFin\" type=\"text\" readonly=\"true\">
\t    \t<label class=\"error\" for=\"datePickerDateDebut\" generated=\"true\"></label>
\t    \t<label class=\"error\" for=\"datePickerDateFin\" generated=\"true\"></label>
\t    \t<label class=\"masquerMessage\" id=\"labelConflitDates\" for=\"conflitDates\" generated=\"false\">Les dates du séjour empiètent sur une réservation existante.</label>
    \t</div>
    \t
    \t<!-- ligne 2 à 5 : pour X adulte(s), Y enfant(s) et Z bébé(s) -->
    \t<div>
    \t  <div class=\"ligneFormulaire\">
    \t  \t<label class=\"gauche obligatoire\" for=\"sliderNbreAdultes\"><em>*&nbsp;</em>Pour</label>
      \t\t<div id=\"sliderNbreAdultes\"></div>    \t\t
      \t\t<label id=\"sliderNbAdultes\"><b>1&nbsp;</b></label>
      \t\t<label for=\"sliderNbreEnfants\">adulte(s)</label>
      \t\t<input id=\"nbAdultes\" name=\"nbAdultes\" type=\"hidden\" value=\"1\">
    \t  </div>
    \t  <div class=\"ligneFormulaire\">
      \t\t<div id=\"sliderNbreEnfants\"></div>
      \t\t<label id=\"sliderNbEnfants\"><b>0&nbsp;</b></label>
      \t\t<label for=\"sliderNbreBebes\">enfant(s)</label>
      \t\t<input id=\"nbEnfants\" name=\"nbEnfants\" type=\"hidden\" value=\"0\">
    \t  </div>
    \t  <div class=\"ligneFormulaire\">
      \t\t<div id=\"sliderNbreBebes\"></div>
      \t\t<label id=\"sliderNbBebes\"><b>0&nbsp;</b></label>
      \t\t<label>bébé(s)</label>
      \t\t<input id=\"nbBebes\" name=\"nbBebes\" type=\"hidden\" value=\"0\">
    \t  </div>
    \t</div>
    \t
    \t
    \t<!-- ligne3 : * Nom (avec le titre) -->
    \t<div class=\"separationFormulaire ligneFormulaire\">
    \t\t<label class=\"gauche obligatoire\" for=\"selectTitre\"><em>*&nbsp;</em>Nom</label>
    \t\t<select id=\"selectTitre\" name=\"selectTitre\"><option value=\"MR\">M.</option><option value=\"MME\">Mme</option></select>
    \t\t<input id=\"nom\" name=\"nom\" type=\"text\">
    \t</div>

    \t<!-- ligne 4 : * Prénom -->
    \t<div class=\"ligneFormulaire\">
    \t\t<label class=\"gauche obligatoire\" for=\"prenom\"><em>*&nbsp;</em>Pr&eacute;nom</label>
    \t\t<input id=\"prenom\" name=\"prenom\" type=\"text\">
    \t</div>

    \t<!-- ligne 5 : * Rue -->
    \t<div class=\"ligneFormulaire separationFormulaire\">
    \t\t<label class=\"gauche\" for=\"rue1\">Rue</label>
    \t\t<input id=\"rue1\" name=\"rue1\" type=\"text\">
    \t</div>

    \t<!-- ligne 6 : rue2 -->
    \t<div class=\"ligneFormulaire\">
    \t\t<input id=\"rue2\" name=\"rue2\" type=\"text\">
    \t</div>

\t\t<!-- ligne 7 : rue3 -->
    \t<div class=\"ligneFormulaire\">
    \t\t<input id=\"rue3\" name=\"rue3\" type=\"text\">
    \t</div>
    \t
    \t<!-- ligne 8 : * CP/Ville -->
    \t<div class=\"ligneFormulaire\">
    \t\t<label class=\"gauche obligatoire\" for=\"codePostal\"><em>*&nbsp;</em>CP/Ville</label>
    \t\t<input id=\"codePostal\" name=\"codePostal\" type=\"text\">
    \t\t<input id=\"ville\" name=\"ville\" type=\"text\">
    \t\t<label class=\"error\" for=\"codePostal\" generated=\"true\"></label>
\t    \t<label class=\"error\" for=\"ville\" generated=\"true\"></label>
    \t</div>
    \t
    \t
    \t<!-- ligne 9 : tel -->
    \t<div class=\"ligneFormulaire separationFormulaire\">
    \t\t<label class=\"gauche obligatoire\" for=\"tel\">T&eacute;l</label>
    \t\t<input id=\"tel\" name=\"tel\" type=\"text\">
    \t</div>
    \t
    \t<!-- ligne 10 : email -->
    \t<div class=\"ligneFormulaire\">
    \t\t<label class=\"gauche obligatoire\" for=\"email\">Email</label>
    \t\t<input id=\"email\" name=\"email\" type=\"text\">
    \t</div>
    \t
    \t<!-- ligne 11 : commentaire -->
    \t<div class=\"ligneFormulaire\">
    \t\t<label class=\"gauche\" for=\"commentaire\">Note</label>
    \t\t<textarea id=\"commentaire\" name=\"commentaire\"></textarea>
    \t</div>
    \t
    \t<div class=\"ligneFormulaire ligneBtnReserver\">
    \t\t<input class=\"submit\" type=\"submit\" id=\"btnReserver\" value=\"R&eacute;server\" />
    \t</div>
\t</form>
</div>

<div class=\"calendrier-content\">
  <h2>Calendrier des disponibilités</h2>     

  <div id=\"internal-calendrier-content\"> 
\t  <!-- integration calendrier.html.twig -->
\t  ";
        // line 113
        $this->env->loadTemplate("GaudruereGiteBundle::Reservation/calendrier.html.twig")->display($context);
        // line 114
        echo "  </div>
  <div class=\"legende\">
  \t  <!-- mise en place de la légende -->
  \t  <label class=\"legendeTitre\">Légende :</label>
  \t  
  \t  <div class=\"ligneModele\">
  \t  \t<div class=\"modele calendrierJourReserveJournee\"></div><label>Chambre d'hôtes non disponible</label>
  \t  </div>
  \t  <div class=\"ligneModele\">
  \t  \t<div class=\"modele calendrierJourDemandeReservationJournee\"></div><label>Votre demande de réservation actuelle</label>
  \t  </div>
  </div>
</div>
</div>

";
    }

    public function getTemplateName()
    {
        return "GaudruereGiteBundle:Reservation:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
