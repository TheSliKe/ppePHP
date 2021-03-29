<?php 

    include_once "../../model/bddEntrepot.php";
    $bdd = new Bdd();

    if(isset($_POST['EN_Libelle']) && isset($_POST['EN_Adresse']) && isset($_POST['EN_ZoneGeographique']) && isset($_POST['nb_Etagere'])) {
    
        $bdd->insertEntrepot($_POST['EN_Libelle'], $_POST['EN_Adresse'], $_POST['EN_ZoneGeographique'], $_POST['nb_Etagere']);
        header('Location: ../../controller/entrepot.php');

    }

    include_once "../../view/insertion/entrepot.php"; 
    
?>