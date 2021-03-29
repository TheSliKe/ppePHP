<head>

    <title>Entrepôt</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    <?php include_once "component/header.php";?>

    <a type="button" class="btn btn-primary mt-2 mb-2 ml-2" href="../controller/insertion/entrepot.php">Ajout nouveau Entrepot</a>

    <table class="table table-striped">
        <thead>
            <th scope="col">Nom</th>
            <th scope="col">Adresse</th>
            <th scope="col">Zone</th>
            <th scope="col">Supprimer</th>
            <th scope="col">Détail</th>
        </thead>
        <tbody>

        <?php foreach ($entrepots as $entrepot) { ?> 
            <tr>
                <td><?php echo $entrepot['EN_Libelle'];?></td>
                <td><?php echo $entrepot['EN_Adresse'];?></td>
                <td><?php echo $entrepot['EN_ZoneGeographique'];?></td>
                <td><a type="button" class="btn btn-outline-danger" href="../controller/delete/entrepot.php?ref=<?php echo $entrepot['EN_ID']; ?>">Supp</a></td>
                <td><a type="button" class="btn btn-outline-info" href="../controller/edit/entrepot.php?ref=<?php echo $entrepot['EN_ID']; ?>">Détail</a></td>
            </tr>
        <?php } ?>


        </tbody>
    </table>


    <?php include_once "component/footer.php";?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>
