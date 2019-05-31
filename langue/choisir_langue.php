<?php
/**
 * Created by PhpStorm.
 * User: Arnaud RIDET
 * Date: 20/02/2019
 * Time: 16:37
 */

session_start();

include "../include/header.html";
include "../include/navebar.php";

if (!isset($_SESSION["user_is_co"]))
    header('Location: http://localhost/HACKATON/accueil.php');

if (isset($_POST["langue"])) {
    $_SESSION["langue"] = $_POST["langue"];
    header('Location: http://localhost/HACKATON/accueil.php');
}

?>

<div class="container" style="margin-top: 80px;">
    <form action="" method="post">
        <div class="input-field col s6">
            <select name="langue" id="langue">
                <option value="Français" <?php if (isset($_SESSION["langue"]) && $_SESSION["langue"] == "Français") { echo "selected"; } ?>>Français</option>
                <option value="English" <?php if (isset($_SESSION["langue"]) && $_SESSION["langue"] == "English") { echo "selected"; } ?>>English</option>
                <option value="العربية" <?php if (isset($_SESSION["langue"]) && $_SESSION["langue"] == "العربية") { echo "selected"; } ?>>العربية</option>
                <option value="Shqiptar" <?php if (isset($_SESSION["langue"]) && $_SESSION["langue"] == "Shqiptar") { echo "selected"; } ?>>Shqiptar</option>
                <option value="فارسی" <?php if (isset($_SESSION["langue"]) && $_SESSION["langue"] == "فارسی") { echo "selected"; } ?>>فارسی</option>
                <option value="Kreyòl Ayisyen" <?php if (isset($_SESSION["langue"]) && $_SESSION["langue"] == "Kreyòl Ayisyen") { echo "selected"; } ?>>Kreyòl Ayisyen</option>
                <option value="Lingála" <?php if (isset($_SESSION["langue"]) && $_SESSION["langue"] == "Lingála") { echo "selected"; } ?>>Lingála</option>
                <option value="Kiswahili" <?php if (isset($_SESSION["langue"]) && $_SESSION["langue"] == "Kiswahili") { echo "selected"; } ?>>Kiswahili</option>
                <option value="Kikôngo" <?php if (isset($_SESSION["langue"]) && $_SESSION["langue"] == "Kikôngo") { echo "selected"; } ?>>Kikôngo</option>
                <option value="বাংলা" <?php if (isset($_SESSION["langue"]) && $_SESSION["langue"] == "বাংলা") { echo "selected"; } ?>>বাংলা</option>
            </select>
            <label>Langue : </label>
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

include "../include/footer.html"

?>
