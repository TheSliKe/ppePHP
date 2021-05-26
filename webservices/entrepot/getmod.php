<?php 

    include_once "../model/dbbEntrepotApp.php";
    $bdd = new Bdd();
    
    $mo = $bdd->selectModuleStock($_GET['ENID'], $_GET['BAID']);

    $data = array(
        'etape' => "2",
        'mo' => $mo
    );
    header('Content-Type: application/json');
    echo json_encode($data);