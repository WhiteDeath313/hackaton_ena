<?php
/**
 * Created by PhpStorm.
 * User: Arnaud RIDET
 * Date: 19/02/2019
 * Time: 17:06
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
    <div>
        <p><i class="fas fa-envelope"></i> Mail : [TEST@AGENCE.COM]</p>
    </div>
    <div>
        <p><i class="fas fa-phone"></i> Numéro : [05-00-00-00-00]</p>
    </div>
    <div>
        <p><i class="fas fa-map-marker-alt"></i> Adresse : [VILLE RUE NUMERO CODE_POSTAL]</p>
    </div>
    <div>
        <p><i class="fas fa-clock"></i> Horaires : [9h00 - 17h00]</p>
    </div>
</div>

<?php

include "include/footer.html";

?>
