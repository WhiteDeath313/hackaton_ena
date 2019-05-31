<?php
/**
 * Created by PhpStorm.
 * User: Arnaud RIDET
 * Date: 21/02/2019
 * Time: 11:08
 */

session_start();

include "../include/header.html";
include "../include/navebar.php";

if (!isset($_SESSION["user_is_co"]))
    header('Location: http://localhost/HACKATON/accueil.php');


?>


    <div class="container">
        <div class="col s4 offset-s4" style="margin-top: 100px; text-align: center">
            <a class="waves-effect waves-light btn-large" href="trouver_cours_de_français.php"><i class="fas fa-map-marker-alt"></i> Trouver des cours de français</a>
        </div>
        <div class="col s4 offset-s4" style="margin-top: 100px; text-align: center">
            <a class="waves-effect waves-light btn-large" href="apprendre_expressions_utiles.php"><i class="fas fa-book"></i> Apprendre les expressions utiles</a>
        </div>
        <div class="col s4 offset-s4" style="margin-top: 100px; text-align: center">
            <a class="waves-effect waves-light btn-large" href="apprendre_français_en_ligne.php"><i class="fas fa-book"></i> Apprendre le français en ligne</a>
        </div>
    </div>

<?php

include "../include/footer.html";

?>