<?php

    include_once "../../model/bddProduit.php";
    $ref = $_GET['ref'];
    $bdd = new Bdd();
    $produitTemp = $bdd->selectionUnProduit($ref);
    $produit = $produitTemp[0];

    $stocks = $bdd->selectionStockProduit($ref);

    include_once "../../view/edit/produit.php"; 

?>