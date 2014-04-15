<?php

/* GaudruereGiteBundle:Parametres:editParametresGeneraux.html.twig */
class __TwigTemplate_c96ee30dba6a715049f7ecf3181e3e3f extends Twig_Template
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

    // line 7
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

  ";
        // line 7
        $this->displayBlock('logocontent', $context, $blocks);
        // line 8
        echo "  <h2>Modification des paramètres généraux du site</h2>

    <form action=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("adminParametreGeneral_update"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "edit_form"));
        echo ">
        <!-- Les erreurs générales du formulaire. -->
        ";
        // line 12
        echo $this->env->getExtension('form')->renderErrors($this->getContext($context, "edit_form"));
        echo "
    
        <div>
            ";
        // line 15
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "edit_form"), "phraseBandeau"), "Phrase du bandeau");
        echo "
            ";
        // line 16
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "edit_form"), "phraseBandeau"), array("attr" => array("size" => "75")));
        echo "               
            ";
        // line 17
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "edit_form"), "phraseBandeau"));
        echo "
        </div>    
\t\t
        <div>
            ";
        // line 21
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "edit_form"), "email"), "Mon Email");
        echo "
            ";
        // line 22
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "edit_form"), "email"));
        echo "               
            ";
        // line 23
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "edit_form"), "email"));
        echo "
        </div>  
\t\t
        <div>
            ";
        // line 27
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "edit_form"), "nbMoisCalendrier"), "nb Mois à afficher dans le calendrier");
        echo "
            ";
        // line 28
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "edit_form"), "nbMoisCalendrier"));
        echo "               
            ";
        // line 29
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "edit_form"), "nbMoisCalendrier"));
        echo "
        </div>
\t\t
        <div>
            ";
        // line 33
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "edit_form"), "phraseRemerciement"), "Phrase remerciement");
        echo "
            ";
        // line 34
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "edit_form"), "phraseRemerciement"), array("attr" => array("size" => "75")));
        echo "           
            ";
        // line 35
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "edit_form"), "phraseRemerciement"));
        echo "
        </div>
        
        <p>
        \t<button type=\"submit\">Valider</button>
        </p>    
    </form>    
    
    <a class=\"retour\" href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("adminGaudruere"), "html", null, true);
        echo "\">Retour à la page d'administration</a>   
</div>

              
";
    }

    public function getTemplateName()
    {
        return "GaudruereGiteBundle:Parametres:editParametresGeneraux.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
