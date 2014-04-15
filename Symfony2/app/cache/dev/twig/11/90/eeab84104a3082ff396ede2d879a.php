<?php

/* GaudruereGiteBundle::Reservation/resetForm.html.twig */
class __TwigTemplate_1190eeab84104a3082ff396ede2d879a extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<script type=\"text/javascript\">
     
  function initialize() {
\t\t\$(\"#nbAdultes\").val(\"1\");
\t\t\$(\"#nbEnfants\").val(\"0\");
\t\t\$(\"#nbBebes\").val(\"0\");
\t\t
\t\t\$(\"#sliderNbreAdultes\").slider(\"option\", \"value\", 1);
\t\t\$(\"#sliderNbreEnfants\").slider(\"option\", \"value\", 0);
\t\t\$(\"#sliderNbreBebes\").slider(\"option\", \"value\", 0);
\t\t
\t\t\$(\"#sliderNbAdultes\").html(\"<b>1</b>\");
\t\t\$(\"#sliderNbEnfants\").html(\"<b>0</b>\");
\t\t\$(\"#sliderNbBebes\").html(\"<b>0</b>\");
\t\talert('coucou');
  }
  window.onload = initialize;
</script>";
    }

    public function getTemplateName()
    {
        return "GaudruereGiteBundle::Reservation/resetForm.html.twig";
    }

}
