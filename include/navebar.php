<?php
/**
 * Created by PhpStorm.
 * User: Arnaud RIDET
 * Date: 20/02/2019
 * Time: 16:58
 */
?>

<nav class="blue" style="padding: 0px 10px;">
    <div class="nav-wrapper">
        <a href="" class="brand-logo center"><img src="../images/Logo%20appli.png" style="height: 40px; width: 40px;"/> Asil' App</a>
        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons"><i class="fas fa-ellipsis-v	"></i></i></a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="../forum/accueil_forum.php"> Forum</a></li>
            <li><a href="../langue/choisir_langue.php"><i class="fas fa-language"></i> Langue : <?php echo $_SESSION["langue"]; ?></a></li>
            <li><a href="../position/choisir_position.php"><i class="fas fa-map-marker-alt"></i> Position</a></li>
        </ul>
    </div>
</nav>

<ul class="sidenav" id="mobile-demo">
    <li><a href="../forum/accueil_forum.php"> Forum</a></li>
    <li><a href="../langue/choisir_langue.php"><i class="fas fa-language"></i> Langue : <?php echo $_SESSION["langue"]; ?></a></li>
    <li><a href="../position/choisir_position.php"><i class="fas fa-map-marker-alt"></i> Position</a></li>
</ul>

<ul id="slide-out" class="sidenav sidenav-fixed">
    <li><div class="user-view">
            <div class="background">
                <img src="../images/drapeau_français.png" style="width: 300px; height: 200px;">
            </div>
        </div></li>
    <li><a href="../accueil.php">Accueil</a></li>
    <li><div class="divider"></div></li>
    <li><a class="subheader">Ma demande</a></li>
    <li><a href="../mon_parcours/accueil_mon_parcours.php">Mon parcours</a></li>
    <li><a href="../mes_documents/accueil_mes_documents.php">Mes documents</a></li>
    <li><div class="divider"></div></li>
    <li><a class="subheader">Ma vie en France</a></li>
    <li><a href="../soin/accueil_soin.php">Santé</a></li>
    <li><a href="../manger/accueil_manger.php">Restauration</a></li>
    <li><a href="../dormir/accueil_dormir.php">Hébergement</a></li>
    <li><a href="../apprendre_le_français/accueil_apprendre_le_français.php">Cours de français</a></li>
    <li><a href="../mobilité/accueil_mobilité.php">Déplacement</a></li>
    <li><a href="../aide_juridique/accueil_aide_juridique.php">Aide juridique</a></li>
    <li><a href="../carte_wifi/accueil_carte_wifi.php">Carte accès wifi gratuit</a></li>
</ul>
<a href="#" data-target="slide-out" class="sidenav-trigger btn-large"><i class="fas fa-bars"></i></a>


<script type="text/javascript">
    $(document).ready(function(){
        $('.sidenav').sidenav();
    });
</script>
