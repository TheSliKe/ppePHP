<?php 

    include_once "../../model/bddProduit.php";
    $bdd = new Bdd();

    if(isset($_POST['PR_ReferenceProduit']) && isset($_POST['PR_Nom']) && isset($_POST['PR_Description']) && isset($_POST['PR_Codebarre']) && isset($_POST['PR_PrixHt'])) {
    
        $bdd->insertProduits($_POST['PR_ReferenceProduit'], $_POST['PR_Nom'], $_POST['PR_Description'], $_POST['PR_Codebarre'], $_POST['PR_PrixHt']);  
        header('Location: ../../controller/produit.php');
    }

    include_once "../../view/insertion/produit.php"; 
    
?>