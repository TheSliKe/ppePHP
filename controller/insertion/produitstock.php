<?php

    include_once "../../model/bddEntrepot.php";
    $bdd = new Bdd();
    $refP= $_GET['ref'];
    $etape = $_GET['etape'];
    
    if ($etape == 1 ) {
        $entrepotsList = $bdd->selectEntrepotStock();

        if (isset($_POST['selectEntrepot'])) {
            header('Location: ../../controller/insertion/produitstock.php?ref='.$refP.'&etape=2&entrepot='.$_POST['selectEntrepot']);
        }
    }
    if ($etape == 2 ) {
        $entrepotStock = $_GET['entrepot'];

        $batimentsList = $bdd->selectBatimentStock($entrepotStock);

        if (isset($_POST['selectBatiment'])) {
            header('Location: ../../controller/insertion/produitstock.php?ref='.$refP.'&etape=3&entrepot='.$entrepotStock.'&batiment='.$_POST['selectBatiment']);
        }

    }

    if ($etape == 3 ) {
        $entrepotStock = $_GET['entrepot'];
        $batimentStock = $_GET['batiment'];

        $moduleList = $bdd->selectModuleStock($entrepotStock, $batimentStock);

        if (isset($_POST['selectModule'])) {
            header('Location: ../../controller/insertion/produitstock.php?ref='.$refP.'&etape=4&entrepot='.$entrepotStock.'&batiment='.$batimentStock.'&module='.$_POST['selectModule']);
        }

    }

    if ($etape == 4 ) {
        $entrepotStock = $_GET['entrepot'];
        $batimentStock = $_GET['batiment'];
        $moduleStock = $_GET['module'];

        $rayonList = $bdd->selectRayonStock($entrepotStock, $batimentStock, $moduleStock);

        if (isset($_POST['selectRayon'])) {
            header('Location: ../../controller/insertion/produitstock.php?ref='.$refP.'&etape=5&entrepot='.$entrepotStock.'&batiment='.$batimentStock.'&module='.$moduleStock.'&rayon='.$_POST['selectRayon']);
        }

    }

    if ($etape == 5 ) {
        $entrepotStock = $_GET['entrepot'];
        $batimentStock = $_GET['batiment'];
        $moduleStock = $_GET['module'];
        $rayonStock = $_GET['rayon'];

        $sectionList = $bdd->selectSectionStock($entrepotStock, $batimentStock, $moduleStock, $rayonStock);

        if (isset($_POST['selectSection'])) {
            header('Location: ../../controller/insertion/produitstock.php?ref='.$refP.'&etape=6&entrepot='.$entrepotStock.'&batiment='.$batimentStock.'&module='.$moduleStock.'&rayon='.$rayonStock.'&section='.$_POST['selectSection']);
        }

    }

    if ($etape == 6 ) {
        $entrepotStock = $_GET['entrepot'];
        $batimentStock = $_GET['batiment'];
        $moduleStock = $_GET['module'];
        $rayonStock = $_GET['rayon'];
        $sectionStock = $_GET['section'];

        $etagereList = $bdd->selectEtagereStock($entrepotStock, $batimentStock, $moduleStock, $rayonStock, $sectionStock);

        if (isset($_POST['selectEtagere'])) {
            header('Location: ../../controller/insertion/produitstock.php?ref='.$refP.'&etape=7&entrepot='.$entrepotStock.'&batiment='.$batimentStock.'&module='.$moduleStock.'&rayon='.$rayonStock.'&section='.$sectionStock.'&etagere='.$_POST['selectEtagere']);
        }

    }

    if ($etape == 7) {
       
        $entrepotStock = $_GET['entrepot'];
        $batimentStock = $_GET['batiment'];
        $moduleStock = $_GET['module'];
        $rayonStock = $_GET['rayon'];
        $sectionStock = $_GET['section'];
        $etagereStock = $_GET['etagere'];

        if (isset($_POST['quantite'])) {

            $refCE = $bdd->selectCellule($entrepotStock, $batimentStock, $moduleStock, $rayonStock, $sectionStock, $etagereStock);

            $bdd->insertStock($refP, $entrepotStock, $batimentStock, $moduleStock, $rayonStock, $sectionStock, $etagereStock, $_POST['quantite'], $refCE[0]);
            header('Location: ../../controller/produit.php');
        }

    }


    include_once "../../view/insertion/produitstock.php"; 

?>