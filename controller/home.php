<?php 

    include_once "../model/bddEntrepot.php";
    $bdd = new Bdd();
    $ListE = $bdd->homeEntrepot();
    $ListP = $bdd->homeProduit();

    include_once "../view/home.php"; 

?>