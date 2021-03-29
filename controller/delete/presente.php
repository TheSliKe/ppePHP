<?php

    include_once "../../model/bddEntrepot.php";
    $bdd = new Bdd();
    $bdd->deleteStockEntrepot($_GET['ref']);
    header('Location: ../../controller/home.php');

?>