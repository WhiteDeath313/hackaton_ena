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


    <div class="container">
        <div class="col s4 offset-s4" style="margin-top: 100px; text-align: center">
            <p style="font-size: 18px;">Des solutions pour vous déplacer à prix réduits : </p>
            <p style="font-size: 18px;">- Train</p>
            <p style="font-size: 18px;">- Bus</p>
            <p style="font-size: 18px;">- Vélo</p>
            <p style="font-size: 18px;">- Permis de conduire</p>
            <p style="font-size: 18px;">- Aides à la mobilité</p>
            <p style="font-size: 18px;">- Aide juridique</p>
        </div>
    </div>

<?php

include "../include/footer.html";

?>