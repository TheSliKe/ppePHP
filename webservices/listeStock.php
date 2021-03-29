<?php 

    include_once "model/dbbEntrepotApp.php";
    $bdd = new Bdd();
    
    $ENID = $bdd->villeToEntrepotID($_GET['ville']);
    
    $res1 = $bdd->listStocknull();
    $res2 = $bdd->listStockVille($ENID);


    $data = array(
        'stockNull' => $res1,
        'stockVille' => $res2
    );
    header('Content-Type: application/json');
    echo json_encode($data);
    
?>