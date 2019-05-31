<?php
/**
 * Created by PhpStorm.
 * User: Arnaud RIDET
 * Date: 20/02/2019
 * Time: 16:38
 */

session_start();

include "../include/header.html";
include "../include/navebar.php";

if (!isset($_SESSION["user_is_co"]))
    header('Location: http://localhost/HACKATON/accueil.php');

if (isset($_POST["pos"])) {
    $value = $_POST["pos"];
    if ($value == 1) {
        $_SESSION["latitude"] = 45.75;
        $_SESSION["longitude"] = 4.85;
        $_SESSION["ville_nb"] = $value;
    }
    if ($value == 2) {
        $_SESSION["latitude"] = 49.183333;
        $_SESSION["longitude"] = -0.35;
        $_SESSION["ville_nb"] = $value;
    }
    if ($value == 3) {
        $_SESSION["latitude"] = 48.8534;
        $_SESSION["longitude"] = 2.3488;
        $_SESSION["ville_nb"] = $value;

    }
    if ($value == 4) {
        $_SESSION["latitude"] = 48.5734053;
        $_SESSION["longitude"] = 7.7521113;
        $_SESSION["ville_nb"] = $value;
    }
    if ($value == 5) {
        $_SESSION["latitude"] = 50.95129;
        $_SESSION["longitude"] = 1.858686;
        $_SESSION["ville_nb"] = $value;
    }
    if ($value == 6) {
        $_SESSION["latitude"] = 50.95129;
        $_SESSION["longitude"] = 1.858686;
        $_SESSION["ville_nb"] = $value;
    }
    header('Location: http://localhost/HACKATON/accueil.php');
}

?>

<div class="container" style="margin-top: 80px;">
    <form action="" method="post">
        <div class="input-field col s6">
            <select name="pos" id="pos">
                <option value="1" <?php if (isset($_SESSION["ville_nb"]) && $_SESSION["ville_nb"] == 1) { echo "selected"; } ?>>Lyon</option>
                <option value="2" <?php if (isset($_SESSION["ville_nb"]) && $_SESSION["ville_nb"] == 2) { echo "selected"; } ?>>Caen</option>
                <option value="3" <?php if (isset($_SESSION["ville_nb"]) && $_SESSION["ville_nb"] == 3) { echo "selected"; } ?>>Paris</option>
                <option value="4" <?php if (isset($_SESSION["ville_nb"]) && $_SESSION["ville_nb"] == 4) { echo "selected"; } ?>>Strasbourg</option>
                <option value="5" <?php if (isset($_SESSION["ville_nb"]) && $_SESSION["ville_nb"] == 5) { echo "selected"; } ?>>Calais</option>
                <option value="6" <?php if (isset($_SESSION["ville_nb"]) && $_SESSION["ville_nb"] == 6) { echo "selected"; } ?>>Ma géolocalisation (position actuelle CAEN)</option>
            </select>
            <label>Position : </label>
        </div>
        <div class="input-field col s4">
            <input type="submit" name="valider" class="waves-effect waves-light btn"/>
        </div>
    </form>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        $('select').formSelect();
    });
</script>

<?php

include "../include/footer.html";

?>
