<?php

/* GaudruereGiteBundle:Acces:index.html.twig */
class __TwigTemplate_791e97a1bf0f888c672417fceb4168b8 extends Twig_Template
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
        echo "   
<div class=\"doublepage\">
<div class=\"acces-navigation\">
<br />
<h4>La Gaudruère</h4>
<h4>72500 Jupilles</h4>
<h4>Tel. 02.23.54.76.89</h4>
<h4>Mob. 06.73.87.34.23</h4>
<br />
<h4>Accès au gîte</h4>
    <ul>
        <li>
        <strong>Par le train :</strong>
        De Paris-Le Mans, située à 18 km au Nord du gîte.
        </li>
        <li>
        <strong>Par l'autoroute A65 :</strong>
        Prendre la
        <strong>Sortie 25</strong>
        à hauteur du Mans, direction Jupilles. Puis demander à quelqu'un la direction de la gaudruère (D65).
        </li>
        <li>
        <strong>Par l'autoroute A29 :</strong>
        Prendre la
        <strong>Sortie 9</strong>
        , direction Le Mans. Puis suivre la direction Jupilles. Demander au même gus que précédemment.
        </li>
    </ul>
</div>
<div class=\"acces-content\">
    <h2>Accès</h2>
    <script type=\"text/javascript\">
     
      function initialize() {
        var myOptions = {
          scaleControl: true,
          center: new google.maps.LatLng(47.780156, 0.418456),
          zoom: 10,
          mapTypeId: google.maps.MapTypeId.HYBRID
        };
    
        var map = new google.maps.Map(document.getElementById(\"map_canvas\"),
            myOptions);
            
        var marker = new google.maps.Marker({
          map: map,
          position: map.getCenter()
        });
        var infowindow = new google.maps.InfoWindow();
        infowindow.setContent('<b>Gîte de La Gaudruère</b><br />72500 Jupilles');
        google.maps.event.addListener(marker, 'click', function() {
            infowindow.open(map, marker);
        });
      
      }
      window.onload = initialize;
    </script>
    <div id=\"map_canvas\"></div>
</div>
</div>
    
";
    }

    public function getTemplateName()
    {
        return "GaudruereGiteBundle:Acces:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
