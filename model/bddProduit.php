<?php
    class Bdd{
        private $dbh;

        public function __construct() {
            try {
                $this->dbh = new PDO("mysql:dbname=ppe3;host=juliendupale.myddns.me;charset=utf8", "ppe3", "ppe3");
            } catch (PDOException $e) {
                echo 'Connexion échouée : ' . $e->getMessage();
            }
        }

        public function selectionProduits(){

            $res = $this->dbh->query('SELECT PR_ReferenceProduit, PR_Libelle, PR_Description, PR_CodeBarre, PR_CoutHT FROM Produit', PDO::FETCH_ASSOC);
            return $res->fetchAll();

        }

        public function selectionUnProduit($refP){

            $sql = "SELECT PR_ReferenceProduit, PR_Libelle, PR_Description, PR_CodeBarre, PR_CoutHT FROM Produit WHERE PR_ReferenceProduit = :refP";
            $req = $this->dbh->prepare($sql);
            $req->execute(array(":refP" => $refP));
            return $req->fetchAll();

        }

        public function insertProduits($refP, $nomP, $descP, $CodeP, $prixP){

            $sql = "INSERT INTO `Produit`(`PR_ReferenceProduit`, `PR_Libelle`, `PR_Description`,`PR_Codebarre`, `PR_CoutHT`) VALUES (:refP, :nomP, :descP, :CodeP, :prixP)";
            $req = $this->dbh->prepare($sql);
            
            $req->execute(array(":refP" => $refP, ":nomP" => $nomP, ":descP" => $descP, ":CodeP" => $CodeP, ":prixP" => $prixP));
            //print_r($req->errorInfo());
        }

        public function deleteProduit($refP){

            $sql = "DELETE FROM `Presente` WHERE FK_PR = :refP ";
            $req = $this->dbh->prepare($sql);
            $req->execute(array(":refP" => $refP));

            $sql = "DELETE FROM `Produit` WHERE PR_ReferenceProduit = :refP ";
            $req = $this->dbh->prepare($sql);
            $req->execute(array(":refP" => $refP));

        }

        public function selectionStockProduit($refP){

            $sql = "SELECT EN_Libelle, CONCAT(a.FK_MO, a.FK_RA, SE_Nom, '.', ET_Nom) as cellule, PRE_Quantite, a.FK_CE FROM Presente as a INNER JOIN Entrepot ON EN_ID=FK_EN INNER JOIN Section on SE_ID=FK_SE INNER JOIN Etagere on ET_ID=FK_ET WHERE FK_PR = :refP";
            $req = $this->dbh->prepare($sql);
            $req->execute(array(":refP" => $refP));
            return $req->fetchAll();

        }

    }

?>