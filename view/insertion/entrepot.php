<head>

    <title>Ajout Nouveau Entrepot</title>
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
            <label for="EN_Libelle">Nom Entrepot :</label>
            <input name="EN_Libelle" type="text" class="form-control" id="EN_Libelle" placeholder="Nom Entrepot">
        </div>

        <div class="form-group ml-2 mr-2 mt-1">
            <label for="EN_Adresse">Adresse Entrepot :</label>
            <input name="EN_Adresse" type="text" class="form-control" id="EN_Adresse" placeholder="Adresse Entrepot">
        </div>

        <div class="form-group ml-2 mr-2 mt-1">
            <label for="EN_ZoneGeographique">Zone Géographique Entrepot :</label>
            <input name="EN_ZoneGeographique" type="text" class="form-control" id="EN_ZoneGeographique" placeholder="Zone Géographique Entrepot">
        </div>

        <div class="form-group ml-2 mr-2 mt-1">
            <label for="nb_Etagere">Nombre d'étagère par section (de 1 à 8) :</label>
            <input name="nb_Etagere" type="number" class="form-control" id="nb_Etagere" placeholder="Nombre d'étagère par section">
        </div>

        <input class="btn btn-primary ml-2 mt-1" name="submit" type="submit" value="Submit">

    </form>

    <?php include_once "../../view/component/footer.php";?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>