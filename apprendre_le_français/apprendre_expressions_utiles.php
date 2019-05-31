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
            <p style="font-size: 18px;">Des expressions utiles pour votre vie quotidienne :</p>
            <p style="font-size: 18px;">- Se présenter</p>
            <p style="font-size: 18px;">- Transports</p>
            <p style="font-size: 18px;">- Santé</p>
            <p style="font-size: 18px;">- A la maison</p>
            <p style="font-size: 18px;">- Faire ses courses</p>
            <p style="font-size: 18px;">- Mes démarches administratives</p>
        </div>
    </div>

<?php

include "../include/footer.html";

?>