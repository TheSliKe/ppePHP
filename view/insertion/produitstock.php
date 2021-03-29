<head>

    <title>Stock Produit</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="../../controller/home.php">All4Sport</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </nav>

    <?php if ($etape == 1) { ?>
       
        <form method="post">

            <div class="form-group mt-1 ml-1 mr-1">
                <label for="selectEntrepot">Entrepôt</label>
                <select class="form-control" id="selectEntrepot" name="selectEntrepot" >
                    
                <?php foreach ($entrepotsList as $entrepot) { ?> 

                    <option value="<?php echo $entrepot['EN_ID'];?>"><?php echo $entrepot['EN_Libelle'];?></option>

                <?php } ?>


                </select>
            </div>   

            <input class="btn btn-primary ml-2 mt-1" name="submit" type="submit" value="Submit">

        </form>

    <?php } if ($etape == 2) { ?>

        <form method="post">

            <div class="form-group mt-1 ml-1 mr-1">
                <label for="selectBatiment">Batiments</label>
                <select class="form-control" id="selectBatiment" name="selectBatiment" >
                    
                <?php foreach ($batimentsList as $batiment) { ?> 

                    <option value="<?php echo $batiment['BA_ID'];?>"><?php echo $batiment['BA_Nom'];?></option>

                <?php } ?>


                </select>
            </div>   

            <input class="btn btn-primary ml-2 mt-1" name="submit" type="submit" value="Submit">

        </form>

    <?php } if ($etape == 3) { ?>

        <form method="post">

            <div class="form-group mt-1 ml-1 mr-1">
                <label for="selectModule">Module</label>
                <select class="form-control" id="selectModule" name="selectModule" >
                    
                <?php foreach ($moduleList as $module) { ?> 

                    <option value="<?php echo $module['MO_ID'];?>"><?php echo $module['MO_ID'];?></option>

                <?php } ?>


                </select>
            </div>   

            <input class="btn btn-primary ml-2 mt-1" name="submit" type="submit" value="Submit">

        </form>

    <?php } if ($etape == 4) { ?>

        <form method="post">

            <div class="form-group mt-1 ml-1 mr-1">
                <label for="selectRayon">Rayon</label>
                <select class="form-control" id="selectRayon" name="selectRayon" >
                    
                <?php foreach ($rayonList as $rayon) { ?> 

                    <option value="<?php echo $rayon['RA_ID'];?>"><?php echo $rayon['RA_ID'];?></option>

                <?php } ?>


                </select>
            </div>   

            <input class="btn btn-primary ml-2 mt-1" name="submit" type="submit" value="Submit">

        </form>

    <?php } if ($etape == 5) { ?>

        <form method="post">

            <div class="form-group mt-1 ml-1 mr-1">
                <label for="selectSection">Section</label>
                <select class="form-control" id="selectSection" name="selectSection" >
                    
                <?php foreach ($sectionList as $section) { ?> 

                    <option value="<?php echo $section['SE_ID'];?>"><?php echo $section['SE_Nom'];?></option>

                <?php } ?>


                </select>
            </div>   

            <input class="btn btn-primary ml-2 mt-1" name="submit" type="submit" value="Submit">

        </form>

    <?php } if ($etape == 6) { ?>

        <form method="post">

            <div class="form-group mt-1 ml-1 mr-1">
                <label for="selectEtagere">Etagere</label>
                <select class="form-control" id="selectEtagere" name="selectEtagere" >
                    
                <?php foreach ($etagereList as $etagere) { ?> 

                    <option value="<?php echo $etagere['ET_ID'];?>"><?php echo $etagere['ET_Nom'];?></option>

                <?php } ?>


                </select>
            </div>   

            <input class="btn btn-primary ml-2 mt-1" name="submit" type="submit" value="Submit">

        </form>

    <?php } if ($etape == 7) { ?>

        <form method="post">

        <div class="form-group mt-1 mr-1 ml-1">
            <label for="quantite">Quantité</label>
            <input type="number" class="form-control" name="quantite" id="quantite" placeholder="Quantité">
        </div>

        <input class="btn btn-primary ml-2 mt-1" name="submit" type="submit" value="Submit">

        </form>

    <?php } ?>

    <?php include_once "../../view/component/footer.php";?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>