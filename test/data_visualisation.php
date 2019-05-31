<?php
/**
 * Created by PhpStorm.
 * User: Arnaud RIDET
 * Date: 19/02/2019
 * Time: 16:42
 */

include "include/header.html";

?>

<nav class="green" style="padding: 0px 10px;">
    <div class="nav-wrapper">
        <a href="data_visualisation.php" class="brand-logo"><i class="fas fa-home"></i> Home</a>
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

    <!-- Modal Trigger -->
    <div style="margin-top: 20px;">
        <a class="waves-effect waves-light btn-large modal-trigger" href="#pourquoi"><i class="fas fa-question"></i> Pourquoi ?</a>
    </div>
    <div style="margin-top: 20px;">
        <a class="waves-effect waves-light btn-large modal-trigger" href="#apporte_avec_moi"><i class="far fa-copy"></i> J'apporte avec moi :</a>
    </div>
    <div style="margin-top: 20px;">
        <a class="waves-effect waves-light btn-large modal-trigger" href="#comment_y_aller"><i class="fas fa-map-marker-alt"></i> Comment y aller ?</a>
    </div>
    <div style="margin-top: 20px;">
        <a class="waves-effect waves-light btn-large modal-trigger" href="#note_ta_date"><i class="far fa-calendar-alt"></i> Rentre ta date :</a>
    </div>
    <div style="margin-top: 20px;">
        <a class="waves-effect waves-light btn-large modal-trigger" href="#prise_photo"><i class="fas fa-camera"></i> Prendre une photo :</a>
    </div>

    <!-- Modal Structure -->
    <div id="pourquoi" class="modal">
        <div class="modal-content">
            <h4>POURQUOI ?</h4>
            <p>[TEXTE SOON]</p>
        </div>
        <div class="modal-footer">
            <a href="#!" class="modal-close waves-effect waves-green btn-flat">CLOSE</a>
        </div>
    </div>

    <!-- Modal Structure -->
    <div id="apporte_avec_moi" class="modal">
        <div class="modal-content">
            <h4>J'apporte avec moi</h4>
            <p>[TEXTE SOON]</p>
        </div>
        <div class="modal-footer">
            <a href="#!" class="modal-close waves-effect waves-green btn-flat">CLOSE</a>
        </div>
    </div>

    <!-- Modal Structure -->
    <div id="comment_y_aller" class="modal">
        <div class="modal-content">
            <h4>Comment y aller ?</h4>
            <div id="map">
                <!-- Ici s'affichera la carte -->
            </div>
        </div>
        <div class="modal-footer">
            <a href="#!" class="modal-close waves-effect waves-green btn-flat">CLOSE</a>
        </div>
    </div>

    <!-- Modal Structure -->
    <div id="note_ta_date" class="modal">
        <div class="modal-content">
            <h4>Note ta date :</h4>
            <input type="date" id="date"/>
        </div>
        <div class="modal-footer">
            <a href="#!" class="modal-close waves-effect waves-green btn-flat">AJOUTER AU CALENDRIER</a>
        </div>
    </div>

    <!-- Modal Structure -->
    <div id="prise_photo" class="modal">
        <div class="modal-content">
            <h4>Prendre une photo :</h4>
            <p>Caméra pas encore ouverte</p>
        </div>
        <div class="modal-footer">
            <a href="#!" class="modal-close waves-effect waves-green btn-flat">AJOUTER LA PHOTO</a>
        </div>
    </div>
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
