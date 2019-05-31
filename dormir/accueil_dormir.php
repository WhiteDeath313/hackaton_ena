<?php
/**
 * Created by PhpStorm.
 * User: Arnaud RIDET
 * Date: 21/02/2019
 * Time: 10:32
 */

session_start();

include "../include/header.html";
include "../include/navebar.php";

if (!isset($_SESSION["user_is_co"]))
    header('Location: http://localhost/HACKATON/accueil.php');

?>

<div class="container" style="margin-top: 80px;">
    <div class="col s4 offset-s4" style="margin-top: 100px; text-align: center">
        <a class="waves-effect waves-light btn-large" href="dormir_je_trouve.php"><i class="fas fa-map-marker-alt"></i> Je trouve un hébergement ou un centre d'accueil</a>
    </div>
    <div class="col s4 offset-s4" style="margin-top: 100px; text-align: center">
        <a class="waves-effect waves-light btn-large" href="dormir_je_ne_sais_pas.php"><i class="fas fa-map-marker-alt"></i> Je ne sais pas où dormir ce soir</a>
    </div>
</div>

<?php

include "../include/footer.html";

?>
