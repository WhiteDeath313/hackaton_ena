<?php
/**
 * Created by PhpStorm.
 * User: Arnaud RIDET
 * Date: 20/02/2019
 * Time: 16:14
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
        "PASS de la Miséricorde \
        Ici, j’ai accès à tout type de soins et à des consultations pour mes dents (dentiste) et pour ma peau (dermatologue). \
        Quand y aller : Sans rendez-vous du lundi au vendredi de 9h à 12h. Y aller plutôt en début de matinée. Sur rendez-vous le lundi et vendredi après-midi. \
        Où c'est : 49 rue Gemare, 14 000 Caen \
        M’y rendre": { "lat": 49.18521, "lon": -0.36604 },
        "PASS du CHU de Caen \
        Ici, j’ai accès à tout type de soins. \
        Quand y aller : Du lundi au vendredi de 9h à 17h. \
        Où c'est : Avenue de la Côté de Nacre, 14 033 Caen \
        M’y rendre": { "lat": 49.20548, "lon": -0.36097 },
        "PASS de Bayeux \
        Ici, j’ai accès à tout type de soins. \
        Quand y aller : Du lundi au vendredi de 9h à 17h. Sur rendez-vous uniquement, sauf urgence (02 31 51 13 04). \
        Où c'est : 3 rue François Coulet, 14400 Bayeux. \
        M’y rendre": { "lat": 49.2818, "lon": -0.72145 },
        "PASS de Falaise \
        Ici, j’ai accès à tout type de soins. \
        Quand y aller : Sur rendez-vous. Vous pouvez appeler ou prendre rendez-vous sur place du lundi au vendredi de 8h30 à 16h30 (02 31 40 43 54). \
        Où c'est : Boulevard des Bercagnes, 14700 Falaise. Bâtiment face aux urgences. \
        M’y rendre": { "lat": 48.89146, "lon": -0.20564 },
        "PASS de Lisieux \
        Ici, j’ai accès à tout type de soins. \
        Quand y aller : Sur rendez-vous : appeler au 02 31 61 33 71 02. \
        Où c'est : 4 rue Roger Aini 14 100 Lisieux. Pavillon Stillman, bâtiment en briques rouges à l’entrée de l’hôpital, à côté du point garde médecin. Entrée côté boulevard, par un petit portail blanc. Appeler avec la sonnette pour entrer. \
        M’y rendre": { "lat": 49.14585, "lon": 0.23188 },
        "PASS de Vire \
        Ici, j’ai accès à tout type de soins. \
        Quand y aller : Avec ou sans rendez-vous, le lundi de 9h à 12h et le jeudi de 13h30 à 16h30 (02 31 67 47 43). \
        Où c'est : 4 rue Emile Desvaux, 14 500 Vire. Bâtiment A. Drucker au rez-de-chaussée. \
        M’y rendre": { "lat": 48.83574, "lon": -0.88443 },
        "La Boussole \
        Ici, j’ai accès à des soins spécialisés. Je demande le planning sur place ou au 02 31 34 19 80. \
        Quand y aller : Les lundis, samedis et jours fériés : 9h à 11h et 13h45 à 17h45. Les mardis, mercredis, jeudis, vendredis et dimanches : 9h à 12h30 et 13h45 à 17h45. \
        Où c'est : 31 cour Caffarelli, 14 000 Caen \
        M’y rendre": { "lat": 49.18073, "lon": -0.34466 },
        "Association médicale contre l'exclusion \
        Ici, j’ai accès à une consultation de médecine générale et je peux faire soigner mes enfants (pédiatre). \
        Quand y aller : Du lundi au dimanche, de 9h à 17h. \
        Où c'est : 52 rue des Carrières Saint-Julien, 14 000 Caen \
        M’y rendre": { "lat": 49.18887, "lon": -0.36904 },
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
        height:500px;
    }
</style>

<div class="container">
    <div class="col s4 offset-s4" style="margin-top: 20px; text-align: center">
        <h2>Me soigner</h2>
        <p>Je n’ai pas encore de droits à l’assurance maladie</p>
    </div>
    <div class="col s4 offset-s4" style="margin-top: 20px; text-align: center">
        <div id="map">

        </div>
    </div>
</div>

<?php

include "../include/footer.html";

?>
