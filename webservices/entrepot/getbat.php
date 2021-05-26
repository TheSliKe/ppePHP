<?php 

    include_once "../model/dbbEntrepotApp.php";
    $bdd = new Bdd();
    
    $ba = $bdd->selectBatimentStock($_GET['ENID']);

    $data = array(
        'etape' => "1",
        'ba' => $ba
    );
    header('Content-Type: application/json');
    echo json_encode($data);