

// Adresse sur laquelle le carte sera centrer et ou sera placer le marqueur
var cfg_adress = '16 grande rue,70220 fougerolles';

// Largeur de la carte
var cfg_largeur = '100%';

// Hauteur de la carte
var cfg_hauteur = '400px';

// Niveau de zoom, entre 1 (niveau globe) et 17 (niveau rue)
var cfg_zoomLevel = 15;

// Texte pour le popup
// Si vous ne souahitez pas de poupup laisser mettre simplement "" comme valeur
var cfg_description = "" +
        "<table border='0' width='207' cellpadding='3' cellspacing='0'>" +
        "<tr><td valign='top'><div style='color: blue; font-size: 14px; font-weight:bold;'>Photonew</div><br/>16 Grande Rue<br/>70220 Fougerolles<br/><br/>" +
        "<a href='http://www.photonew.fr'>www.photonew.fr</a>" +
        "</td>" +
        "<td>" +
//    "<img src='{{ asset('bundles/photonewmain/images/photonew.jpg') }}' border='0' alt='Photo' vspace='5' align='right' />"+
        "</td></tr></table>";

// Variable globale pour l'objet GMAP2
var map;

// Variable global pour l'objet GClientGeocoder qui traduit une adresse en longitude,latitude
var geocoder;

// Function appellée au chargement de la page web
// Créee et configure la carte
function loadMyMap() {

    // Teste si le navigateur est compatible avec l'API Gmaps
    if (GBrowserIsCompatible()) {

        // Affecte la carte à la div  "map_mezy" (voir tout en bas)
        var divMap = document.getElementById("map_mezy");

        // Redimensionne la carte
        divMap.style.width = cfg_largeur;
        divMap.style.height = cfg_hauteur;

        // Création des objets princiapux
        map = new GMap2(divMap);
        geocoder = new GClientGeocoder();

        // Pour zoomer avec la molette de la souris
        // Pour le désactiver ajouter // devant la ligne suivante ou bien la supprimer :)
        map.enableScrollWheelZoom();

        // Grande barre de zoom
        map.addControl(new GLargeMapControl());

        // Ou bien : Deux boutons zoom + 4 directions
        //map.addControl(new GSmallMapControl());

        // Ou bien : Juste deux boutons pour zoomer et dézoomer
        //map.addControl(new GSmallZoomControl());

        //Pour switcher entre les différentes vues (satellite, plan, hybride)
        map.addControl(new GMapTypeControl());

        // On centre la carte sur votre adresse
        centerMapOnAdress(cfg_adress);
    }
    else
        alert('Votre navigateur ne permet pas l\'affichage de carte Google Maps');
}

// Centre une carte sur une adresse
// Geocode l'adresse
// Message d'erreur si adresse non trouvé
function centerMapOnAdress(adresse) {

    if (!adresse.length)
        alert('Remplir la variable adresse');

    // Décodage de l'adresse         
    geocoder.getLatLng(
            adresse,
            function (point) {

                // Adresse introuvable
                if (!point) {
                    alert('Adresse : ' + addresse + " introuvable");
                } else {

                    // Centre la carte sur l'adresse
                    map.setCenter(point, cfg_zoomLevel);

                    // On créer un marqueur à l'adresse spécifiée
                    var marker = new GMarker(point);

                    var textePopUp = cfg_description;

                    // Si il y a une description
                    if (textePopUp.length) {

                        // Affiche un popup lors du clic sur le marqueur
                        GEvent.addListener(marker, "click", function () {
                            marker.openInfoWindowHtml(textePopUp);
                        });
                        // Affiche le marqueur
                        map.addOverlay(marker);

                        // Par défaut on affiche le popup tout de suite sans attendre un clic
                        // Désactiver en commentant la ligne
                        marker.openInfoWindowHtml(textePopUp);
                    }
                    else
                        map.addOverlay(marker); // Affiche le marqueur
                }
            }
    );

}

// Au chargement de la page on affiche la carte
window.onload = loadMyMap;

// A la fermeture de la page on libère la mémoire allouée à la carte
window.onunload = GUnload;
