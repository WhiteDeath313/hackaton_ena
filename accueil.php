<?php
/**
 * Created by PhpStorm.
 * User: Arnaud RIDET
 * Date: 20/02/2019
 * Time: 16:19
 */

session_start();

include "include/header.html";

if (!isset($_SESSION["langue"]))
    $_SESSION["langue"] = "Français";
if (!isset($_SESSION["longitude"]))
    $_SESSION["longitude"] = -0.4330578;
if (!isset($_SESSION["latitude"]))
    $_SESSION["latitude"] = 49.1213315;
if (!isset($_SESSION["user_is_co"]))
    $_SESSION["user_is_co"] = 1;


?>


<nav class="blue" style="padding: 0px 10px;">
    <div class="nav-wrapper">
        <a href="" class="brand-logo center"><img src="images/Logo%20appli.png" style="height: 40px; width: 40px;"/> Asil' App</a>
        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons"><i class="fas fa-ellipsis-v	"></i></i></a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="forum/accueil_forum.php"> Forum</a></li>
            <li><a href="langue/choisir_langue.php"><i class="fas fa-language"></i> Langue : <?php echo $_SESSION["langue"]; ?></a></li>
            <li><a href="position/choisir_position.php"><i class="fas fa-map-marker-alt"></i> Position</a></li>
        </ul>
    </div>
</nav>

<ul class="sidenav" id="mobile-demo">
    <li><a href="forum/accueil_forum.php"> Forum</a></li>
    <li><a href="langue/choisir_langue.php"><i class="fas fa-language"></i> Langue : <?php echo $_SESSION["langue"]; ?></a></li>
    <li><a href="position/choisir_position.php"><i class="fas fa-map-marker-alt"></i> Position</a></li>
</ul>


<ul id="slide-out" class="sidenav sidenav-fixed">
    <li><div class="user-view">
            <div class="background">
                <img src="images/drapeau_français.png" style="width: 300px; height: 200px;">
            </div>
        </div></li>
    <li><a href="accueil.php">Accueil</a></li>
    <li><div class="divider"></div></li>
    <li><a class="subheader">Ma demande</a></li>
    <li><a href="mon_parcours/accueil_mon_parcours.php">Mon parcours</a></li>
    <li><a href="mes_documents/accueil_mes_documents.php">Mes documents</a></li>
    <li><div class="divider"></div></li>
    <li><a class="subheader">Ma vie en France</a></li>
    <li><a href="soin/accueil_soin.php">Santé</a></li>
    <li><a href="manger/accueil_manger.php">Restauration</a></li>
    <li><a href="dormir/accueil_dormir.php">Hébergement</a></li>
    <li><a href="apprendre_le_français/accueil_apprendre_le_français.php">Cours de français</a></li>
    <li><a href="mobilité/accueil_mobilité.php">Déplacement</a></li>
    <li><a href="aide_juridique/accueil_aide_juridique.php">Aide juridique</a></li>
    <li><a href="carte_wifi/accueil_carte_wifi.php">Carte accès wifi gratuit</a></li>
</ul>
<a href="#" data-target="slide-out" class="sidenav-trigger btn-large"><i class="fas fa-bars"></i></a>

<script type="text/javascript">
    $(document).ready(function(){
        $('.sidenav').sidenav();
        $('#slide-out').sidenav();
    });
</script>

<div class="container" style="margin-top: 20px;">
    <div class="col s4 offset-s4" style="margin-top: 100px; text-align: center">
        <a class="waves-effect waves-light btn-large" href="langue/choisir_langue.php" style="height: 100px; width: 600px; text-align: center; font-size: 50px;"><p style="margin-top: 20px;"><i class="fas fa-language"></i> Langue</p></a>
    </div>
    <div class="col s4 offset-s4" style="margin-top: 120px; text-align: center">
        <a class="waves-effect waves-light btn-large" href="position/choisir_position.php" style="height: 100px; width: 600px; text-align: center; font-size: 50px;"><p style="margin-top: 20px;"><i class="fas fa-map-marker-alt"></i> Position</p></a>
    </div>
</div>

<?php

include "include/footer.html";

?>
