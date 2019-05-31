<?php
/**
 * Created by PhpStorm.
 * User: Arnaud RIDET
 * Date: 21/02/2019
 * Time: 11:09
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
            "Croix-rouge française \
            Ici, je peux avoir un repas distribué. \
            Quand y aller : Du lundi au vendredi de 9h à 12h et de 14h à 17h30 \
            Prix moyen : 0 € - 3 € \
            Où c'est : Centre médico-social d’Ifs, 12 boulevard Yitzhak-Rabin, 14123 Ifs \
            M’y rendre": { "lat": 49.16982, "lon": -0.35661 },
            "Banque alimentaire du Calvados \
            Ici, je peux avoir des aliments distribués, me permettant de cuisiner mon repas. \
            Quand y aller : Du lundi au vendredi de 9h à 12h et de 14h à 17h30 \
            Prix moyen : 0 € - 3 € \
            Où c'est : 49 rue Gemare, 14 000 Caen \
            M’y rendre": { "lat": 49.1852, "lon": -0.36604 },
            "Maraude La Prairie de Caen \
            Ici, je peux avoir un repas distribué certains jours de la semaine. \
            Quand y aller : Lundi \
            Prix moyen : 0 € - 3 € \
            Où c'est : Prairie de Caen \
            M’y rendre": { "lat": 49.16957, "lon": -0.37661 },
        };

        // Fonction d'initialisation de la carte
        function initMap() {
            var i = 0;
            var myIconPath = {
                0: "http:/HACKATON/images/Vivre en France/Se nourrir/Restauration.png",
                1: "http:/HACKATON/images/Vivre en France/Se nourrir/Banque alimentaire.png",
                2: "http:/HACKATON/images/Vivre en France/Se nourrir/Maraude.png",
            };
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
                    iconUrl: myIconPath[i],
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
            <a class="waves-effect waves-light btn-large" href="http:/HACKATON/manger/accueil_manger.php?periode=matin"><i class="far fa-clock"></i> Matin</a>
            <a class="waves-effect waves-light btn-large" href="http:/HACKATON/manger/accueil_manger.php?periode=midi"><i class="far fa-clock"></i> Midi</a>
            <a class="waves-effect waves-light btn-large" href="http:/HACKATON/manger/accueil_manger.php?periode=soir"><i class="far fa-clock"></i> Soir</a>
        </div>
        <div class="col s4 offset-s4" style="margin-top: 60px; text-align: center">
            <div id="map" style="margin-top: 60px;">

            </div>
        </div>
    </div>

<?php

include "../include/footer.html";

?>