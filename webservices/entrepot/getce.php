<?php 

    include_once "../model/dbbEntrepotApp.php";
    $bdd = new Bdd();
    
    $ce = $bdd->selectCelluleStock($_GET['ENID'], $_GET['BAID'], $_GET['MOID'], $_GET['RAID'], $_GET['SEID'], $_GET['ETID']);

    $data = array(
        'etape' => "6",
        'ce' => $ce
    );
    header('Content-Type: application/json');
    echo json_encode($data);