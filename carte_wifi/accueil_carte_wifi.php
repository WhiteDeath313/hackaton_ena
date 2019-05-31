<?php
/**
 * Created by PhpStorm.
 * User: Arnaud RIDET
 * Date: 22/02/2019
 * Time: 10:48
 */

session_start();

include "../include/header.html";
include "../include/navebar.php";

if (!isset($_SESSION["user_is_co"]))
    header('Location: http://localhost/HACKATON/accueil.php');


?>

    <script type="text/javascript">
        // On initialise la latitude et la longitude de Paris (centre de la carte)
        var lat = <?=$_SESSION["latitude"];?>;
        var lon = <?=$_SESSION["longitude"];?>;
        var macarte = null;

        var villes = {
            "Wifi free center caen": { "lat": 49.1820646, "lon": -0.3675769 },
            "Wifi french coffe shop": { "lat": 49.1831845, "lon": -0.3618004 },
            "Wifi virgule café": { "lat": 49.1805007, "lon": -0.3614544 },
            "Wifi the fruity café": { "lat": 49.1837617, "lon": -0.3626843 },
            "Wifi café des quatrans": { "lat": 49.1839667, "lon": -0.3641096 },
        };

        // Fonction d'initialisation de la carte
        function initMap() {
            var i = 0;
            // Créer l'objet "macarte" et l'insèrer dans l'élément HTML qui a l'ID "map"
            macarte = L.map('map').setView([lat, lon], 11);
            // Leaflet ne récupère pas les cartes (tiles) sur un serveur par défaut. Nous devons lui préciser où nous souhaitons les récupérer. Ici, openstreetmap.fr
            L.tileLayer('https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png', {
                // Il est toujours bien de laisser le lien vers la source des données
                attribution: 'données © <a href="//osm.org/copyright">OpenStreetMap</a>/ODbL - rendu <a href="//openstreetmap.fr">OSM France</a>',
                minZoom: 1,
                maxZoom: 20
            }).addTo(macarte);
            for (ville in villes) {
                // Nous définissons l'icône à utiliser pour le marqueur, sa taille affichée (iconSize), sa position (iconAnchor) et le décalage de son ancrage (popupAnchor)
                var myIcon = L.icon({
                    iconUrl: "http:/HACKATON/images/Balise pour les cartes.png",
                    iconSize: [50, 50],
                    iconAnchor: [25, 50],
                    popupAnchor: [-3, -76],
                });
                var marker = L.marker([villes[ville].lat, villes[ville].lon], { icon: myIcon }).addTo(macarte);
                marker.bindPopup(ville);
                i = i + 1;
            }
        }
        window.onload = function(){
            // Fonction d'initialisation qui s'exécute lorsque le DOM est chargé
            initMap();
        };
    </script>
    <style type="text/css">
        #map{ /* la carte DOIT avoir une hauteur sinon elle n'apparaît pas */
            height:500px;
        }
    </style>

    <div class="container">
        <div class="col s4 offset-s4" style="margin-top: 20px; text-align: center">
            <h1>Carte wifi gratuit France</h1>
        </div>
        <div class="col s4 offset-s4" style="margin-top: 60px; text-align: center">
            <div id="map" style="margin-top: 60px;">

            </div>
        </div>
    </div>

<?php

include "../include/footer.html";

?>