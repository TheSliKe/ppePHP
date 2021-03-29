<?php

    include_once "../../model/bddProduit.php";
    $bdd = new Bdd();
    $bdd->deleteProduit($_GET['ref']);
    header('Location: ../../controller/produit.php');

?>