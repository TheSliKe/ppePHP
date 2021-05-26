<?php 

    include_once "../model/dbbEntrepotApp.php";
    $bdd = new Bdd();
    
    $ra = $bdd->selectRayonStock($_GET['ENID'], $_GET['BAID'], $_GET['MOID']);

    $data = array(
        'etape' => "3",
        'ra' => $ra
    );
    header('Content-Type: application/json');
    echo json_encode($data);