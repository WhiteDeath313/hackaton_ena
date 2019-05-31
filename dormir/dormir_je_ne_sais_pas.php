<?php
/**
 * Created by PhpStorm.
 * User: Arnaud RIDET
 * Date: 21/02/2019
 * Time: 10:33
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
        "La Boussole \
        Ici, on peut me rediriger vers une solution d’hébergement temporaire. \
        Quand y aller : Les lundis, samedis et jours fériés : 9h à 11h et 13h45 à 17h45. Les mardis, mercredis, jeudis, vendredis et dimanches : 9h à 12h30 et 13h45 à 17h45. \
        Appeler : 02 31 34 19 80 \
        Où c'est : 31 cour Caffarelli, 14 000 Caen \
        M’y rendre": { "lat": 49.18073, "lon": -0.34466 },
        "France Terre d’asile Caen \
        Ici, on peut me rediriger vers une solution d’hébergement temporaire. \
        Quand y aller : Lundi, mardi, jeudi, vendredi, de 9h à 12h et de 13h15 à 16h \
        Appeler : 02 31 70 34 10 \
        Où c'est : 7 Rue Dr Roux, 14000 Caen \
        M’y rendre": { "lat": 49.16498, "lon": -0.36461 },
    };

    // Fonction d'initialisation de la carte
    function initMap() {
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
        }
    }
    window.onload = function(){
        // Fonction d'initialisation qui s'exécute lorsque le DOM est chargé
        initMap();
    };
</script>
<style type="text/css">
    #map{ /* la carte DOIT avoir une hauteur sinon elle n'apparaît pas */
        height:600px;
    }
</style>

<div class="container" style="margin-top: 80px;">
    <div class="col s4 offset-s4" style="margin-top: 20px; text-align: center">
        <p style="font-size: 18px;">Appelez le 115 ou contactez les associations suivantes</p>
    </div>
    <div class="col s4 offset-s4" style="margin-top: 20px; text-align: center">
        <div id="map">

        </div>
    </div>
</div>

<?php

include "../include/footer.html";

?>
