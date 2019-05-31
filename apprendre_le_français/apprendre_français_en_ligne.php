<?php
/**
 * Created by PhpStorm.
 * User: Arnaud RIDET
 * Date: 21/02/2019
 * Time: 15:46
 */

session_start();

include "../include/header.html";
include "../include/navebar.php";

if (!isset($_SESSION["user_is_co"]))
    header('Location: http://localhost/HACKATON/accueil.php');

?>

    <div class="container" style="margin-top: 80px;">
        <div class="col s4 offset-s4" style="margin-top: 20px; text-align: center">
            <p style="font-size: 18px;">Des solutions pour apprendre le français en ligne : </p>
            <p style="font-size: 18px;">- Happy FLE</p>
            <p style="font-size: 18px;">- TRADUCMED</p>
            <p style="font-size: 18px;">- PAS à PAS</p>
            <p style="font-size: 18px;">- DUOLINGO</p>
            <p style="font-size: 18px;">- MOOC FLE AFPA</p>
        </div>
    </div>

<?php

include "../include/footer.html";

?>