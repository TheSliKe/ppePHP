<?php

    include_once "../../model/bddEntrepot.php";
    $ref = $_GET['ref'];
    $bdd = new Bdd();
    $entrepotTemp = $bdd->selectionUnEntrepot($ref);
    $entrepot = $entrepotTemp[0];

    $stocks = $bdd->selectionStockEntrepot($ref);

    include_once "../../view/edit/entrepot.php"; 

?>