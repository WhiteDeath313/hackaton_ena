<?php
/**
 * Created by PhpStorm.
 * User: Arnaud RIDET
 * Date: 22/02/2019
 * Time: 09:58
 */

session_start();

include "../include/header.html";
include "../include/navebar.php";

if (!isset($_SESSION["user_is_co"]))
    header('Location: http://localhost/HACKATON/accueil.php');


?>

    <div class="container">
        <div class="col s4 offset-s4" style="margin-top: 20px; text-align: left">
            <h1 style="text-align: center">Forum libre</h1>
            <p style="margin-top: 80px;">Message du 21/02/2019 à 13h27 : "Bonjour j'ai un problème au niveau de ma demande, où dois-je me rendre ?"</p>
            <p>Message du 21/02/2019 à 14h33 : "Il me semble que tu as un onglet sur le site ou sur l'application mobile qui se nomme mon parcours ?"</p>
            <p>Message du 21/02/2019 à 14h45 : "Oui je le vois et ensuite ?"</p>
            <p>Message du 21/02/2019 à 15h01 : "Sur cette page en question tu as toutes les informations que tu as besoin."</p>
            <p>Message du 21/02/2019 à 15h30 : "Je vois, merci beaucoup !"</p>
            <p>Message du 21/02/2019 à 15h33 : "Avec plaisir :)"</p>
            <input type="text" name="message" id="message" value="Entre ton message : " style="margin-top: 40px;"/>
        </div>
    </div>

<?php

include "../include/footer.html";

?>