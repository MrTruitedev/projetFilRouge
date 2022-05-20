<?php
    include './utils/connect_bdd.php';
    include './model/model_user.php';
    include './view/view_accueil.php';
    if($_SESSION['fam'] == 1){
        echo '<h1>MA SUPER PAGE D\'ACCUEIL D\'ARTISTE</h1>';
    }else{
        echo '<h1>MA SUPER PAGE D\'ACCUEIL D\'ORGANISATEUR</h1>';
    }
?>