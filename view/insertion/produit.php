<head>

    <title>Ajout Nouveau Produit</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="../../controller/home.php">All4Sport</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </nav>

    <form method="post">

        <div class="form-group ml-2 mr-2 mt-1">
            <label for="PR_ReferenceProduit">Réference Produit :</label>
            <input name="PR_ReferenceProduit" type="text" class="form-control" id="PR_ReferenceProduit" placeholder="Réference Produit">
        </div>

        <div class="form-group ml-2 mr-2 mt-1">
            <label for="PR_Nom">Nom Produit :</label>
            <input name="PR_Nom" type="text" class="form-control" id="PR_Nom" placeholder="Nom Produit">
        </div>

        <div class="form-group ml-2 mr-2 mt-1">
            <label for="PR_Description">Définition Produit :</label>
            <textarea name="PR_Description" type="text" class="form-control" id="PR_Description" placeholder="Définition Produit"></textarea>
        </div>
        
        <div class="form-group ml-2 mr-2 mt-1">
            <label for="PR_Codebarre">Code-Barre Produit :</label>
            <input name="PR_Codebarre" type="number" class="form-control" id="PR_Codebarre" placeholder="Code-Barre Produit">
        </div>

        <div class="form-group ml-2 mr-2 mt-1">
            <label for="PR_PrixHt">Prix HT Produit :</label>
            <input name="PR_PrixHt" type="number" class="form-control" id="PR_PrixHt" placeholder="Prix HT Produit">
        </div>

        <input class="btn btn-primary ml-2 mt-1" name="submit" type="submit" value="Submit">

    </form>

    <?php include_once "../../view/component/footer.php";?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>