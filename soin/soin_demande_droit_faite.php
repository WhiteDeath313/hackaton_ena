<?php
/**
 * Created by PhpStorm.
 * User: Arnaud RIDET
 * Date: 20/02/2019
 * Time: 16:12
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
        "Hôpital de Bayeux \
        Ici, je peux me faire soigner en urgence ou pour des soins prévus. \
        Quand y aller : Les urgences sont ouvertes en permanence. \
        Où c'est : 13 rue de Nesmond, 14 400 Bayeux \
        M’y rendre": { "lat": 49.27428, "lon": -0.70081 },
        "C.H.U de Caen (Hôpital) \
        Ici, je peux me faire soigner en urgence ou pour des soins prévus. \
        Quand y aller : Les urgences sont ouvertes en permanence. \
        Où c'est : Avenue de la Côte de Nacre, 14 000 Caen \
        M’y rendre": { "lat": 49.20548, "lon": -0.36097 },
        "Hôpital de Falaise \
        Ici, je peux me faire soigner en urgence ou pour des soins prévus. \
        Quand y aller : Les urgences sont ouvertes en permanence. \
        Où c'est : Boulevard des Bercagnes, 14 700 Falaise \
        M’y rendre": { "lat": 48.89146, "lon": -0.20564 },
        "Protection maternelle et infantile (PMI) Evrecy \
        Ici, je peux faire suivre ma grossesse et je peux faire soigner mes enfants de moins de 6 ans. \
        Quand y aller : Du lundi au vendredi de 9h à 17h30 (02 31 08 32 70). \
        Où c'est : 18 rue Henry Chéron, 14 210 Evrecy \
        M’y rendre": { "lat": 49.09848, "lon": -0.50602 },
        "Protection maternelle et infantile (PMI) Honfleur \
        Ici, je peux faire suivre ma grossesse et je peux faire soigner mes enfants de moins de 6 ans. \
        Quand y aller : Du lundi au vendredi de 9h à 12h et 14h à 16h30 (02 31 14 62 50). \
        Où c'est : 4 rue Alexandre-Dubourg 14 600 Honfleur \
        M’y rendre": { "lat": 49.41652, "lon": 0.22923 },
        "Protection maternelle et infantile (PMI) Ifs \
        Ici, je peux faire suivre ma grossesse et je peux faire soigner mes enfants de moins de 6 ans. \
        Quand y aller : Du lundi au vendredi de 9h à 12h30 et 13h30 à 17h30 (02 31 35 21 20). \
        Où c'est : Centre médico-social d’Ifs, 12 boulevard Yitzhak-Rabin, 14123 Ifs \
        M’y rendre": { "lat": 49.14958, "lon": -0.35332 },
    };

    // Fonction d'initialisation de la carte
    function initMap() {
        var i = 0;
        var myIconPath = {
            0: "http:/HACKATON/images/Vivre en France/Me soigner/Hôpital.png",
            1: "http:/HACKATON/images/Vivre en France/Me soigner/Hôpital.png",
            2: "http:/HACKATON/images/Vivre en France/Me soigner/Hôpital.png",
            3: "http:/HACKATON/images/Vivre en France/Me soigner/Femme enceinte.png",
            4: "http:/HACKATON/images/Vivre en France/Me soigner/Femme enceinte.png",
            5: "http:/HACKATON/images/Vivre en France/Me soigner/Femme enceinte.png",
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
        <h2>Me soigner</h2>
        <p>J’ai des droits à l’assurance maladie</p>
    </div>
    <div class="col s4 offset-s4" style="margin-top: 20px; text-align: center">
        <div id="map">

        </div>
    </div>
    <div class="col s4 offset-s4" style="margin-top: 20px; text-align: center">
        <a class="waves-effect waves-light btn-large" href=""><img src="../images/Vivre%20en%20France/Me%20soigner/Trouver%20un%20médecin.png" style="width: 40px; height: 40px;"/> TROUVER UN MÉDECIN</a>
    </div>
</div>
<?php

include "../include/footer.html";

?>
