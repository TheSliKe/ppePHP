<?php 

    include_once "../model/bddEntrepot.php";
    $bdd = new Bdd();
    $entrepots = $bdd->selectionEntrepot();

    include_once "../view/entrepot.php"; 

?>