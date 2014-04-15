<?php

/* GaudruereGiteBundle::Reservation/calendrier.html.twig */
class __TwigTemplate_e459dd12f6027ef02c78adb21d886bbc extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "calendriers"));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["cal"]) {
            // line 2
            echo "  \t<div class=\"calendrier calendrierRoundedCorners\">
\t\t";
            // line 3
            if ($this->getAttribute($this->getContext($context, "loop"), "first")) {
                // line 4
                echo "\t\t\t<input id=\"conflitDates\" name=\"conflitDates\" type=\"hidden\" value=\"";
                echo twig_escape_filter($this->env, $this->getContext($context, "conflitDates"), "html", null, true);
                echo "\">
\t\t";
            }
            // line 6
            echo "        
        <div class=\"calendrierTitre calendrierRoundedCorners\">";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "cal"), "titre"), "html", null, true);
            echo "</div>
        
        <!--
            Le fait d'utiliser la propriété display:inline-block sur ces DIV a pour conséquence 
            qu'ils se positionnent dans le flux de texte HTML comme des éléments de type inline, 
            et donc s'il y a une succesion d'espace blancs entre eux dans le code source, 
            ces espaces vont fusionner en un seul espace à l'affichage (exactement comme cela se passe quand 
            il y a des espaces entre des balises <img />, pour citer un exemple de \"vraie\" balise inline).
            
            Pour remédier à ce premier problème, il faut donc supprimer ces espaces. Voici deux solutions :
              * solution A : Mettre tous les DIV collés les uns aux autres dans le code source
              * solution B : Empêcher que les retours à la ligne dans la source ne soient interprétés comme des espaces, en ajoutant des balises de commentaires                
        -->
        <div class=\"calendrierSousTitre calendrierBorderBody\">
              <div>Lu</div><!--
           --><div>Ma</div><!--
           --><div>Me</div><!--
           --><div>Je</div><!--
           --><div>Ve</div><!--
           --><div class=\"calendrierJourSemaineWeekEnd\">Sa</div><!--
           --><div class=\"calendrierJourSemaineWeekEnd\">Di</div>
        </div> 
    
       <div class=\"calendrierBody calendrierBorderBody\"><!--
       \t\t
       \t\t";
            // line 32
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "cal"), "jours"));
            foreach ($context['_seq'] as $context["_key"] => $context["jour"]) {
                // line 33
                echo "       \t\t\t--><div ";
                echo $this->getAttribute($this->getContext($context, "jour"), "complementHtml");
                echo " class=\"";
                echo $this->getAttribute($this->getContext($context, "jour"), "css");
                echo "\">";
                echo $this->getAttribute($this->getContext($context, "jour"), "chiffre");
                echo "</div><!-- 
       \t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['jour'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 35
            echo "       --></div>
       
       <div class=\"calendrierFooter calendrierFooterRoundedCorners\">
            <div class=\"calendrierFooterInner calendrierFooterRoundedCorners\">&nbsp;</div>
       </div>
\t</div>
";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cal'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
    }

    public function getTemplateName()
    {
        return "GaudruereGiteBundle::Reservation/calendrier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
