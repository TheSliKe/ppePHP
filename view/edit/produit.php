<head>

    <title>Edit Produit</title>
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
                        <label for="PR_ReferenceProduit">Réference Produit :</label>
                        <input name="PR_ReferenceProduit" type="text" class="form-control" id="PR_ReferenceProduit" placeholder="Réference Produit" value="<?php echo $produit['PR_ReferenceProduit'];?>">
                    </div>

                    <div class="form-group ml-2 mr-2 mt-1">
                        <label for="PR_Nom">Nom Produit :</label>
                        <input name="PR_Nom" type="text" class="form-control" id="PR_Nom" placeholder="Nom Produit" value="<?php echo $produit['PR_Libelle'];?>">
                    </div>

                    <div class="form-group ml-2 mr-2 mt-1">
                        <label for="PR_Description">Définition Produit :</label>
                        <textarea name="PR_Description" type="text" class="form-control" id="PR_Description" placeholder="Définition Produit"><?php echo $produit['PR_Description'];?></textarea>
                    </div>
                    
                    <div class="form-group ml-2 mr-2 mt-1">
                        <label for="PR_Codebarre">Code-Barre Produit :</label>
                        <input name="PR_Codebarre" type="number" class="form-control" id="PR_Codebarre" placeholder="Code-Barre Produit" value="<?php echo $produit['PR_CodeBarre'];?>">
                    </div>

                    <div class="form-group ml-2 mr-2 mt-1">
                        <label for="PR_PrixHt">Prix HT Produit :</label>
                        <input name="PR_PrixHt" type="number" class="form-control" id="PR_PrixHt" placeholder="Prix HT Produit" value="<?php echo $produit['PR_CoutHT'];?>">
                    </div>

                    <input class="btn btn-primary ml-2 mt-1" name="submit" type="submit" value="Sauvegarde">

                </form>

            </div>
            <div class="col-sm">

                <a type="button" class="btn btn-secondary btn-lg btn-block mt-2" href="../../controller/insertion/produitstock.php?ref=<?php echo $produit['PR_ReferenceProduit'];?>&etape=1">Ajout Stock</a> 


                <table class="table table-striped mt-2">
                    <thead>
                        <tr>
                            <th scope="col">Nom de l'entrepôt</th>
                            <th scope="col">Cellule</th>
                            <th scope="col">Quantité</th>
                            <th scope="col">Supp</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php foreach ($stocks as $stock) { ?> 

                            <tr>
                                <td><?php echo $stock['EN_Libelle'];?></td>
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