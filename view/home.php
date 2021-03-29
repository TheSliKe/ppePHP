<head>

    <title>Accueil</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    <?php include_once "component/header.php";?>

    <div class="row">
        <div class="col">
       
        <table class="table table-striped mt-1 ml-2"> 
            <thead>
                <tr>
                    <th scope="col">Entrepôt</th>
                    <th scope="col">Place occupé</th>
                    <th scope="col">Detail</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($ListE as $entrepot) { ?> 
                    <tr>
                        <td><?php echo $entrepot['EN_Libelle'];?></td>
                        <td><?php echo $entrepot['count(FK_EN)'];?></td>
                        <td><a type="button" class="btn btn-outline-info" href="../controller/edit/entrepot.php?ref=<?php echo $entrepot['FK_EN']; ?>">Détail</a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

        </div>
        <div class="col">
        
        <table class="table table-striped mt-1 mr-2 "> 
            <thead>
                <tr>
                    <th scope="col">Produit</th>
                    <th scope="col">Quantité total</th>
                    <th scope="col">Detail</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($ListP as $produit) { ?> 
                    <tr>
                    <td><?php echo $produit['PR_Libelle'];?></td>
                    <td><?php echo $produit['sum(PRE_Quantite)'];?></td>
                    <td><a type="button" class="btn btn-outline-info" href="../controller/edit/produit.php?ref=<?php echo $produit['FK_PR'];?>">Détail</a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>


        </div>
    </div>

    <?php include_once "component/footer.php";?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>
