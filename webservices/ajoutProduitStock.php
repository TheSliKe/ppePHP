<?php 

    include_once "model/dbbEntrepotApp.php";
    $bdd = new Bdd();
    
    

    $bdd->insertStock($_GET['PRID'], $_GET['ENID'], $_GET['BAID'], $_GET['MOID'], $_GET['RAID'], $_GET['SEID'], $_GET['ETID'], $_GET['QTE'], $_GET['CEID']);


   
    $data = array(
        'etape' => "7"
    );
    header('Content-Type: application/json');
    echo json_encode($data);