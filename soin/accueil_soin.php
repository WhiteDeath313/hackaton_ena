<?php
/**
 * Created by PhpStorm.
 * User: Arnaud RIDET
 * Date: 20/02/2019
 * Time: 15:54
 */

session_start();

include "../include/header.html";
include "../include/navebar.php";

if (!isset($_SESSION["user_is_co"]))
    header('Location: http://localhost/HACKATON/accueil.php');


?>



<div class="container">
    <div class="col s4 offset-s4" style="margin-top: 20px; text-align: center">
        <p style="font-size: 18px;">Lors de mon rendez-vous pour ouvrir ma demande d’asile, on m’a remis un formulaire de demande d’ouverture des droits à l’assurance maladie. Soit le conseiller l’a renvoyé pour moi, soit je dois le renvoyer par courrier à la CPAM. Une fois envoyé, je peux avoir accès à plus de structures de soins, gratuitement.</p>
    </div>

    <div class="col s4 offset-s4" style="margin-top: 40px; text-align: center">
        <!-- Modal Trigger -->
        <a class="waves-effect waves-light btn-large modal-trigger" href="#doc"><i class="fas fa-question"></i> C’est quoi ce document ?</a>

        <!-- Modal Structure -->
        <div id="doc" class="modal">
            <div class="modal-content">
                <h4>Document</h4>
                <p>Le formulaire de demande d’ouverture des droits à l’assurance maladie est le suivant.</p>
                <img src=""/>
                <p>Vous recevez ensuite un courrier avec votre numéro provisoire de sécurité sociale.</p>
            </div>
            <div class="modal-footer">
                <a href="#!" class="modal-close waves-effect waves-green btn-flat">CLOSE</a>
            </div>
        </div>
    </div>

    <div class="col s4 offset-s4" style="margin-top: 100px; text-align: center">
        <a class="waves-effect waves-light btn-large" href="soin_demande_droit_faite.php"><i class="far fa-thumbs-up"></i> J’ai renvoyé ma demande d’ouverture de droits</a>
    </div>
    <div class="col s4 offset-s4" style="margin-top: 100px; text-align: center">
        <a class="waves-effect waves-light btn-large" href="soin_sans_demande_droit_faite.php"><i class="far fa-thumbs-down"></i> Je n’ai pas renvoyé ma demande, ou je ne sais pas</a>
    </div>
    <div class="col s4 offset-s4" style="margin-top: 100px; text-align: center">
        <p style="font-size: 18px;"><img src="../images/Vivre%20en%20France/Me%20soigner/Urgence%20médicale.png" style="width: 40px; height: 40px;"/> Pour une urgence médicale, appelez le 112</p>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        $('.modal').modal();
    });
</script>

<?php

include "../include/footer.html";

?>
