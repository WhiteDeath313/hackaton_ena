<?php
/**
 * Created by PhpStorm.
 * User: Arnaud RIDET
 * Date: 21/02/2019
 * Time: 13:46
 */

session_start();

include "../include/header.html";
include "../include/navebar.php";

if (!isset($_SESSION["user_is_co"]))
    header('Location: http://localhost/HACKATON/accueil.php');

?>

    <div class="container" style="margin-top: 80px;">
        <div class="col s4 offset-s4" style="margin-top: 100px; text-align: center">
            
        </div>
    </div>

<?php

include "../include/footer.html";

?>