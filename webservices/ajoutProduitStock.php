<?php 

    include_once "model/dbbEntrepotApp.php";
    $bdd = new Bdd();
    
    $etape = $_GET['step'];

    switch ($etape) {
        case '1':
            $en = $_GET['en'];

        break;
        case '2':
           

        break;
        case '3':
        

        break;
        case '4':
    

        break;
        case '5':


        break;
    }


   
    $data = array(
        'enid' => "oui"
    );
    header('Content-Type: application/json');
    echo json_encode($data);