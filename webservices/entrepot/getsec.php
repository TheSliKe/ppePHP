<?php 

    include_once "../model/dbbEntrepotApp.php";
    $bdd = new Bdd();
    
    $se = $bdd->selectSectionStock($_GET['ENID'], $_GET['BAID'], $_GET['MOID'], $_GET['RAID']);

    $data = array(
        'etape' => "4",
        'se' => $se
    );
    header('Content-Type: application/json');
    echo json_encode($data);