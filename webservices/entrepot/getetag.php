<?php 

    include_once "../model/dbbEntrepotApp.php";
    $bdd = new Bdd();
    
    $et = $bdd->selectEtagereStock($_GET['ENID'], $_GET['BAID'], $_GET['MOID'], $_GET['RAID'], $_GET['SEID']);

    $data = array(
        'etape' => "5",
        'et' => $et
    );
    header('Content-Type: application/json');
    echo json_encode($data);