<?php 

    include_once "model/bddLoginApp.php";
    $bdd = new Bdd();
    $res1 = $bdd->loginApp($_GET['user'], $_GET['pass']);
    $res2 = $bdd->loginAccountType($_GET['user']);


    $data = array_merge($res1, $res2);
    header('Content-Type: application/json');
    echo json_encode($data);
    
?>