<head>

    <title>Edit Entrepôt</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="../../controller/home.php">All4Sport</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-sm">
            
                <form method="post">

                    <div class="form-group ml-2 mr-2 mt-1">
                        <label for="EN_Libelle">Nom Entrepôt :</label>
                        <input name="EN_Libelle" type="text" class="form-control" id="EN_Libelle" placeholder="Nom Entrepôt" value="<?php echo $entrepot['EN_Libelle'];?>">
                    </div>

                    <div class="form-group ml-2 mr-2 mt-1">
                        <label for="EN_Taille">Taille Entrepôt :</label>
                        <input name="EN_Taille" type="number" class="form-control" id="EN_Taille" placeholder="Taille Entrepôt" value="<?php echo $entrepot['EN_Taille'];?>">
                    </div>

                    <div class="form-group ml-2 mr-2 mt-1">
                        <label for="EN_Adresse">Adresse Entrepôt :</label>
                        <input name="EN_Adresse" type="text" class="form-control" id="EN_Adresse" placeholder="Adresse Entrepôt" value="<?php echo $entrepot['EN_Adresse'];?>">
                    </div>
                    
                    <div class="form-group ml-2 mr-2 mt-1">
                        <label for="EN_ZoneGeographique">Zone Geographique Entrepôt :</label>
                        <input name="EN_ZoneGeographique" type="text" class="form-control" id="EN_ZoneGeographique" placeholder="Zone Geographique Entrepôt" value="<?php echo $entrepot['EN_ZoneGeographique'];?>">
                    </div>

                    <input class="btn btn-primary ml-2 mt-1" name="submit" type="submit" value="Sauvegarde">

                </form>

            </div>
            <div class="col-sm">

                <table class="table table-striped mt-2">
                    <thead>
                        <tr>
                            <th scope="col">Référence</th>
                            <th scope="col">Cellule</th>
                            <th scope="col">Quantité</th>
                            <th scope="col">Supp</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php foreach ($stocks as $stock) { ?> 

                            <tr>
                                <td><?php echo $stock['FK_PR'];?></td>
                                <td><?php echo $stock['cellule'];?></td>
                                <td><?php echo $stock['PRE_Quantite'];?></td>
                                <td><a type="button" class="btn btn-outline-danger" href="../delete/presente.php?ref=<?php echo $stock['FK_CE'];?>">Supp</a></td>
                            </tr>

                        <?php } ?>

                    </tbody>
                </table>

            </div>
        </div>
    </div>

    <?php include_once "../../view/component/footer.php";?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>