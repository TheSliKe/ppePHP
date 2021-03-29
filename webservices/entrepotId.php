<?php 

    include_once "model/dbbEntrepotApp.php";
    $bdd = new Bdd();
    
    $ENID = $bdd->villeToEntrepotID($_GET['ville']);

    $data = array(
        'enid' => $ENID
    );
    header('Content-Type: application/json');
    echo json_encode($data);