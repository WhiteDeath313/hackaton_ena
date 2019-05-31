<?php
/**
 * Created by PhpStorm.
 * User: Arnaud RIDET
 * Date: 20/02/2019
 * Time: 10:20
 */

include "include/header.html";

if (isset($_GET["has_da"]))
    $state_da = $_GET["has_da"];
if (isset($_GET["has_ame"]))
    $state_ame = $_GET["has_ame"];

?>


<nav class="green" style="padding: 0px 10px;">
    <div class="nav-wrapper">
        <a href="appli.php" class="brand-logo"><i class="fas fa-home"></i> Home</a>
        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons"><i class="fas fa-ellipsis-v	"></i></i></a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="info_utile.php"><i class="fas fa-info-circle"></i> Info utile</a></li>
        </ul>
    </div>
</nav>

<ul class="sidenav" id="mobile-demo">
    <li><a href="info_utile.php"><i class="fas fa-info-circle"></i>Info utile</a></li>
</ul>

<div class="container">

    <?php if (!isset($state_da) && !isset($state_ame)) { ?>

    <!-- state default -->
    <div style="margin: 20px; text-align: center">
        <h2><i class="fas fa-plus-square"></i> Me soigner</h2>
    </div>
    <div style="margin-top: 60px; margin-left: 20px">
        <a class="waves-effect waves-light btn-large" href="appli.php?has_da=1"><i class="far fa-thumbs-up"></i> J'ai mon attestation de demande d'asile</a>
    </div>
    <div style="margin: 20px">
        <a class="waves-effect waves-light btn-large" href="appli.php?has_da=0"><i class="far fa-thumbs-down"></i> Je n'ai pas mon attestation de demande d'asile</a>
    </div>

    <?php } ?>

    <!-- state have da -->

    <?php if ((isset($state_da) && $state_da == 1)) { ?>

    <div style="margin: 20px;">
        <p>J'ai ma carte d'Aide Médicale d'Etat ou mon attestation de demande d'asile</p>
    </div>
    <div style="margin: 20px;">
        <p><i class="fas fa-stethoscope"></i> Je peux prendre rendez-vous chez n'importe quel médecin</p>
    </div>
    <div style="margin: 20px;">
        <a class="waves-effect waves-light btn-large modal-trigger" href="#trouver_soin"> Trouver un médecin</a>
    </div>

    <div style="margin: 20px;">
        <p>Je peux aller à l'hôpital en urgence ou pour des soins prévus</p>
    </div>
    <div style="margin: 20px;">
        <a class="waves-effect waves-light btn-large modal-trigger" href="#trouver_soin"> Trouver un hôpital</a>
    </div>

    <div style="margin: 20px;">
        <p><i class="fas fa-h-square"></i> Pour une urgence médicale composez le 15</p>
    </div>

    <!-- Modal Structure -->
    <div id="trouver_soin" class="modal">
        <div class="modal-content">
            <h4>MAP</h4>
            <div id="map">
                <!-- Ici s'affichera la carte -->
            </div>
        </div>
        <div class="modal-footer">
            <a href="#!" class="modal-close waves-effect waves-green btn-flat">CLOSE</a>
        </div>
    </div>

    <?php } ?>

    <!-- state don't have da -->

    <?php if (isset($state_da) && $state_da == 0 && !isset($state_ame)) { ?>

    <div style="margin: 20px; text-align: center">
        <h2><i class="fas fa-plus-square"></i> Me soigner</h2>
    </div>
    <div style="margin-top: 60px; margin-left: 20px">
        <a class="waves-effect waves-light btn-large" href="appli.php?has_da=1&has_ame=1"><i class="far fa-thumbs-up"></i> J'ai ma carte d'Aide Médicale d'Etat</a>
    </div>
    <div style="margin: 20px">
        <a class="waves-effect waves-light btn-large" href="appli.php?has_da=0&has_ame=0"><i class="far fa-thumbs-down"></i> Je n'ai pas ma carte d'Aide Médicale d'Etat</a>
    </div>

    <?php } ?>

    <!-- state have ame -->

    <?php if (isset($state_da) && $state_da == 0 && isset($state_ame) && $state_ame == 1) { ?>

    <?php } ?>

    <!-- state don't have ame -->

    <?php if (isset($state_da) && $state_da == 0 && isset($state_ame) && $state_ame == 0) { ?>

    <div style="margin-top: 40px; margin-left: 20px">
        <a class="waves-effect waves-light btn-large" href="appli.php"><i class="fas fa-undo"></i> Retour menu</a>
    </div>

    <?php } ?>

</div>


<script type="text/javascript">
    $(document).ready(function(){
        $('.sidenav').sidenav();
        $('.modal').modal();
    });
</script>

<?php

include "include/footer.html";

?>
