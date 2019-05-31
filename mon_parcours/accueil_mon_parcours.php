<?php
/**
 * Created by PhpStorm.
 * User: Arnaud RIDET
 * Date: 21/02/2019
 * Time: 16:38
 */

session_start();

include "../include/header.html";
include "../include/navebar.php";

if (!isset($_SESSION["user_is_co"]))
    header('Location: http://localhost/HACKATON/accueil.php');

?>

    <div class="container" style="margin-top: 80px;">
        <div class="col s4 offset-s4" style="margin-top: 60px;">
            <p style="font-size: 18px; font-weight:bold;">(1) Mon premier accueil</p>
        </div>
        <div class="col s4 offset-s4" style="margin-top: 30px;">
            <p style="font-size: 18px;">Pour quoi faire ?</p>
            <p style="font-size: 18px;">* Pour commencer ma procédure de demande d’asile</p>
            <p style="font-size: 18px;">Comment ça se passe ?</p>
            <p style="font-size: 18px;">* Un conseiller m’aide à commencer à remplir mon dossier</p>
            <p style="font-size: 18px;">J’apporte avec moi</p>
            <p style="font-size: 18px;">* Ma pièce d’identité</p>
        </div>
        <div class="col s4 offset-s4" style="margin-top: 30px;">
            <a class="waves-effect waves-light btn-large" href="https://www.google.com/maps/place/France+Terre+d'Asile/@49.1650041,-0.366946,17z/data=!3m1!4b1!4m5!3m4!1s0x480a428bb1190dab:0x5c917c95527f652b!8m2!3d49.1650006!4d-0.3647573" target="_blank"><i class="fas fa-map-marker-alt"></i> J'y vais</a>
        </div>
        <div class="col s4 offset-s4" style="margin-top: 30px;">
            <label style="font-size: 16px;">J'ai rendez-vous le : </label>
            <input type="date" name="date_entretien" id="date_entretien" style="width: 150px;"/>
        </div>

        <div class="col s4 offset-s4" style="margin-top: 60px;">
            <p style="font-size: 18px; font-weight:bold;">(2) Mon attestation et mon allocation</p>
        </div>
        <div class="col s4 offset-s4" style="margin-top: 30px;">
            <p style="font-size: 18px;">Pour quoi faire ?</p>
            <p style="font-size: 18px;">* Pour retirer le dossier qui me permettra de demander l’asile</p>
            <p style="font-size: 18px;">* Pour retirer une attestation qui confirme que je suis bien en train de demander l’asile et que je suis en règle</p>
            <p style="font-size: 18px;">* Pour recevoir mon allocation de demande d’asile</p>
            <p style="font-size: 18px;">Comment ça se passe ?</p>
            <p style="font-size: 18px;">* Un conseiller vérifie avec moi le dossier que j’ai rempli lors de mon premier accueil</p>
            <p style="font-size: 18px;">* Il me remet un dossier pour demander l’asile</p>
            <p style="font-size: 18px;">* Il me remet des documents m’informant sur mes droits</p>
            <p style="font-size: 18px;">* Pour terminer ma demande, on prend mes empreintes digitales.</p>
            <p style="font-size: 18px;">* On me remet avant de partir mon attestation de demande d’asile, valable trois mois</p>
            <p style="font-size: 18px;">* On me fait signer un document qui me permettra de percevoir mon allocation</p>
            <p style="font-size: 18px;">J’apporte avec moi</p>
            <p style="font-size: 18px;">* La convocation qui m’a été remise lors de mon premier rendez-vous</p>
            <p style="font-size: 18px;">* Ma pièce d’identité</p>
        </div>
        <div class="col s4 offset-s4" style="margin-top: 30px;">
            <a class="waves-effect waves-light btn-large" href="https://www.google.com/maps/place/France+Terre+d'Asile/@49.1650041,-0.366946,17z/data=!3m1!4b1!4m5!3m4!1s0x480a428bb1190dab:0x5c917c95527f652b!8m2!3d49.1650006!4d-0.3647573" target="_blank"><i class="fas fa-map-marker-alt"></i> J'y vais</a>
        </div>
        <div class="col s4 offset-s4" style="margin-top: 30px;">
            <label style="font-size: 16px;">J'ai rendez-vous le : </label>
            <input type="date" name="date_entretien" id="date_entretien" style="width: 150px;"/>
        </div>

        <div class="col s4 offset-s4" style="margin-top: 60px;">
            <p style="font-size: 18px; font-weight:bold;">(3) J'envoie mon dossier</p>
        </div>
        <div class="col s4 offset-s4" style="margin-top: 30px;">
            <p style="font-size: 18px;">Pour quoi faire ?</p>
            <p style="font-size: 18px;">* Pour demander l’asile, il faut que je remplisse un dossier en français qui explique pourquoi je souhaite demander l’asile en France</p>
            <p style="font-size: 18px;">Comment ça se passe ?</p>
            <p style="font-size: 18px;">* Un conseiller va m’aider à rédiger mon dossier car il faut l’écrire en français</p>
            <p style="font-size: 18px;">* J’ai 21 jours à compter de la remise de mon attestation de demande d’asile pour renvoyer mon dossier de demande d’asile</p>
        </div>
        <div class="col s4 offset-s4" style="margin-top: 30px;">
            <label style="font-size: 18px;">Délai d'envoi (14 jours restants)</label>
            <div class="progress green" style="width: 500px;">
                <div class="determinate red" style="width: 30%"></div>
            </div>
        </div>

        <div class="col s4 offset-s4" style="margin-top: 60px;">
            <p style="font-size: 18px; font-weight:bold;">(4) Je suis convoqué à mon entretien</p>
        </div>
        <div class="col s4 offset-s4" style="margin-top: 30px;">
            <p style="font-size: 18px;">Pour quoi faire ?</p>
            <p style="font-size: 18px;">* Pour finaliser mon dossier, je dois avoir un rendez-vous où je vais parler des raisons pour lesquelles je demande l’asile (je redis ce que j’ai écrit dans mon dossier et je réponds à des questions que l’on me pose)</p>
            <p style="font-size: 18px;">* Attention : pense à aller chercher son courrier régulièrement pour ne pas rater ton rendez-vous</p>
            <p style="font-size: 18px;">Comment ça se passe ?</p>
            <p style="font-size: 18px;">* Je dois me déplacer jusqu’à Fontenay Sous Bois (pas loin de Paris)</p>
            <p style="font-size: 18px;">* Je suis reçu par une personne qui me demande de parler de ma vie et de mon parcours</p>
            <p style="font-size: 18px;">J’apporte avec moi</p>
            <p style="font-size: 18px;">* Mon dossier de demande d’asile (une copie)</p>
            <p style="font-size: 18px;">* Mon attestation de demande d’asile</p>
            <p style="font-size: 18px;">* Une pièce d’identité</p>
        </div>
        <div class="col s4 offset-s4" style="margin-top: 30px;">
            <a class="waves-effect waves-light btn-large" href="https://www.google.com/maps/place/France+Terre+d'Asile/@49.1650041,-0.366946,17z/data=!3m1!4b1!4m5!3m4!1s0x480a428bb1190dab:0x5c917c95527f652b!8m2!3d49.1650006!4d-0.3647573" target="_blank"><i class="fas fa-map-marker-alt"></i> J'y vais</a>
        </div>
        <div class="col s4 offset-s4" style="margin-top: 30px;">
            <label style="font-size: 16px;">J'ai rendez-vous le : </label>
            <input type="date" name="date_entretien" id="date_entretien" style="width: 150px;"/>
        </div>
    </div>

<?php

include "../include/footer.html";

?>