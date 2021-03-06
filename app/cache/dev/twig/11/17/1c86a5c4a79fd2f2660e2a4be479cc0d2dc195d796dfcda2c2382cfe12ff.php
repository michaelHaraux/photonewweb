<?php

/* PhotonewMainBundle:page:testmap.html.twig */
class __TwigTemplate_11171c86a5c4a79fd2f2660e2a4be479cc0d2dc195d796dfcda2c2382cfe12ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta name=\"viewport\" content=\"initial-scale=1.0, user-scalable=no\">
        <meta charset=\"utf-8\">
        <title>Itinéraire</title>
        <style>
            html, body, #map-canvas {
                height: 80%;
                margin: 0px;
                padding: 0px
            }
            #panel {
                position: absolute;
                top: 5px;
                left: 25%;
                margin-left: -180px;
                z-index: 5;
                background-color: #fff;
                padding: 5px;
                border: 1px solid #999;
            }
        </style>
        <script src=\"https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true\"></script>
         <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
        <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/photonewmain/css/testcss.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
        <script>
            var rendererOptions = {
                draggable: true
            };
            var map;
            var directionsDisplay;
            var directionsService;
            // Largeur de la carte
            var cfg_largeur = '100%';

            // Hauteur de la carte
            var cfg_hauteur = '100%';
      
            function initialize() {
                // Instantiate a directions service.
                directionsService = new google.maps.DirectionsService();
                // Create a map and center it on Manhattan.
                var photonew = new google.maps.LatLng(47.887681, 6.405535);
                var mapOptions = {
                    zoom: 14,
                    center: photonew
                }
                // Affecte la carte à la div  \"map_mezy\" (voir tout en bas)
                var divMap = document.getElementById(\"map-canvas\");

                // Redimensionne la carte
                divMap.style.width = cfg_largeur;
                divMap.style.height = cfg_hauteur;
                map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
                var marker = new google.maps.Marker({
                    position: photonew,
                    map: map,
                    title: 'photonew!'
                });

                marker.setMap(map);
                
                directionsDisplay = new google.maps.DirectionsRenderer(rendererOptions)
                directionsDisplay.setMap(map);
                directionsDisplay.setPanel(document.getElementById('directionsPanel'));
                google.maps.event.addListener(directionsDisplay, 'directions_changed', function () {
                    computeTotalDistance(directionsDisplay.getDirections());
                });
            }

            function calcRoute() {

                // Retrieve the start and end locations and create
                // a DirectionsRequest using WALKING directions.
                var start = document.getElementById('start').value;
                var end = document.getElementById('end').value;
                var request = {
                    origin: start,
                    destination: end,
                    travelMode: google.maps.TravelMode.DRIVING
                };
                // Route the directions and pass the response to a
                // function to create markers for each step.
                directionsService.route(request, function (response, status) {
                    if (status == google.maps.DirectionsStatus.OK) {
                        directionsDisplay.setDirections(response);
                    }
                });
            }
            function computeTotalDistance(result) {
                var total = 0;
                var myroute = result.routes[0];
                for (var i = 0; i < myroute.legs.length; i++) {
                    total += myroute.legs[i].distance.value;
                }
                total = total / 1000.0;
                document.getElementById('total').innerHTML = total + ' km';
            }

            google.maps.event.addDomListener(window, 'load', initialize);

        </script>
    </head>
    <body>
        <div id=\"map-canvas\"></div>
        <div id=\"panel\">
            <b>Départ: </b>
            <input id=\"start\">
            <b>Arrivée: </b>
            <input id=\"end\"  value=\"16 grande rue,70220 fougerolles\" disabled size=\"30em\">
            <button type=\"button\"  onclick=\"calcRoute();\">Itineraire!</button>
        </div>
        <a  class=\"btn btn-info\" role=\"button\" href=\"";
        // line 114
        echo $this->env->getExtension('routing')->getPath("_contact");
        echo "\">Retour</a>
        <div id=\"directionsPanel\" >
            <p><span id=\"total\"></span></p></div>
            
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "PhotonewMainBundle:page:testmap.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 114,  46 => 26,  19 => 1,);
    }
}
