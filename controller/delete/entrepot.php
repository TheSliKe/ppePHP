<?php

    include_once "../../model/bddEntrepot.php";
    $bdd = new Bdd();
    $bdd->deleteEntrepot($_GET['ref']);
    header('Location: ../../controller/entrepot.php');

?>