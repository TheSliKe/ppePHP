<?php 

    include_once "../model/bddProduit.php";
    $bdd = new Bdd();
    $produits = $bdd->selectionProduits();



    include_once "../view/produit.php"; 

?>