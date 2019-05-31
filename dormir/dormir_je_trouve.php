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

<div class="container" style="margin-top: 80px;">
    <div class="col s4 offset-s4" style="margin-top: 20px; text-align: center">
        <p style="font-size: 18px;">Lorsque vous enregistrez votre demande d’asile, l’OFII vous attribue un hébergement en centre d’accueil en fonction des places disponibles. Adressez-vous à la PADA ou au GUDA le plus proche [liens vers PADA et GUDA sur la carte].

            S’il n’y pas de places disponibles, adressez-vous au 115 ou aux associations qui vous accompagnent.</p>
    </div>
</div>

<?php

include "../include/footer.html";

?>
