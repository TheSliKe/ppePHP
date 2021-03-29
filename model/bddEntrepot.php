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


        
        public function selectionEntrepot(){

            $res = $this->dbh->query('SELECT EN_ID, EN_Libelle, EN_Taille, EN_Adresse, EN_ZoneGeographique FROM Entrepot', PDO::FETCH_ASSOC);
            return $res->fetchAll();

        }

        public function homeEntrepot(){

            $res = $this->dbh->query('SELECT EN_Libelle, count(FK_EN), FK_EN FROM Presente INNER JOIN Entrepot on FK_EN=EN_ID GROUP BY FK_EN', PDO::FETCH_ASSOC);
            return $res->fetchAll();

        }

        public function homeProduit(){
            
            $res = $this->dbh->query('SELECT PR_Libelle, sum(PRE_Quantite), FK_PR FROM Presente INNER JOIN Produit ON FK_PR=PR_ReferenceProduit GROUP BY FK_PR', PDO::FETCH_ASSOC);
            return $res->fetchAll();
            
        }

        public function selectionUnEntrepot($refE){

            $sql = "SELECT EN_Libelle, EN_Taille, EN_Adresse, EN_ZoneGeographique FROM Entrepot WHERE EN_ID = :refE";
            $req = $this->dbh->prepare($sql);
            $req->execute(array(":refE" => $refE));
            return $req->fetchAll();

        }

        public function selectionStockEntrepot($refE){


            $sql = "SELECT FK_PR, CONCAT(a.FK_MO, a.FK_RA, SE_Nom, '.', ET_Nom) as cellule, PRE_Quantite, a.FK_CE FROM Presente as a INNER JOIN Section on SE_ID=FK_SE INNER JOIN Etagere on ET_ID=FK_ET WHERE a.FK_EN = :refE ";
            $req = $this->dbh->prepare($sql);
            $req->execute(array(":refE" => $refE));
            return $req->fetchAll();

        }

        public function insertEntrepot($nomE, $adresseE, $zoneE, $nbE){

            $sql = "INSERT INTO `Entrepot`(`EN_Libelle`, `EN_Taille`, `EN_Adresse`,`EN_ZoneGeographique`, `EN_nbetagere`) VALUE (:nomE, :tailleE, :adresseE, :zoneE, :nbE)";
            $req = $this->dbh->prepare($sql);
            $req->execute(array(":nomE" => $nomE, "tailleE" => 100, ":adresseE" => $adresseE, ":zoneE" => $zoneE, ":nbE" => $nbE));
            #print_r($req->errorInfo());

        }

        public function deleteEntrepot($refE){

            $sql = "DELETE FROM `Presente` WHERE FK_EN = :refE ";
            $req = $this->dbh->prepare($sql);
            $req->execute(array(":refE" => $refE));

            $sql = "DELETE FROM `Entrepot` WHERE EN_ID = :refE ";
            $req = $this->dbh->prepare($sql);
            $req->execute(array(":refE" => $refE));

        }

        public function selectEntrepotStock(){
           
            $res = $this->dbh->query(' SELECT EN_ID, EN_Libelle FROM Entrepot', PDO::FETCH_ASSOC);
            return $res->fetchAll();

        }

        public function selectBatimentStock($refE){
           
            $sql = "SELECT BA_ID, BA_Nom FROM Batiments WHERE FK_EN = :refE";
            $req = $this->dbh->prepare($sql);
            $req->execute(array(":refE" => $refE));
            return $req->fetchAll();

        }

        public function selectModuleStock($refE, $refB){
           
            $sql = "SELECT MO_ID FROM Module WHERE FK_EN = :refE && FK_BA = :refB";
            $req = $this->dbh->prepare($sql);
            $req->execute(array(":refE" => $refE, ":refB" => $refB));
            return $req->fetchAll();

        }

        public function selectRayonStock($refE, $refB, $refM){
           
            $sql = "SELECT RA_ID FROM Rayon WHERE FK_EN = :refE && FK_BA = :refB && FK_MO = :refM";
            $req = $this->dbh->prepare($sql);
            $req->execute(array(":refE" => $refE, ":refB" => $refB, ":refM" => $refM));
            return $req->fetchAll();

        }

        public function selectSectionStock($refE, $refB, $refM, $refR){
           
            $sql = "SELECT SE_ID, SE_Nom FROM Section WHERE FK_EN = :refE && FK_BA = :refB && FK_MO = :refM && FK_RA = :refR";
            $req = $this->dbh->prepare($sql);
            $req->execute(array(":refE" => $refE, ":refB" => $refB, ":refM" => $refM, ":refR" => $refR));
            return $req->fetchAll();

        }

        public function selectEtagereStock($refE, $refB, $refM, $refR, $refS){
           
            $sql = "SELECT ET_ID, ET_Nom FROM Etagere WHERE FK_EN = :refE && FK_BA = :refB && FK_MO = :refM && FK_RA = :refR && FK_SE = :refS";
            $req = $this->dbh->prepare($sql);
            $req->execute(array(":refE" => $refE, ":refB" => $refB, ":refM" => $refM, ":refR" => $refR, ":refS" => $refS));
            return $req->fetchAll();

        }

        public function insertStock($refP, $refE, $refB, $refM, $refR, $refS, $refET, $quantite, $refCE){

            
            $sql = "INSERT INTO `Presente`(`FK_PR`, `FK_EN`, `FK_BA`,`FK_MO`, `FK_RA`, `FK_SE`, `FK_ET`, `FK_CE`, PRE_Quantite) VALUES (:refP, :refE, :refB, :refM, :refR, :refS, :refET, :refCE, :quantite)";
            $req = $this->dbh->prepare($sql);
            
            $req->execute(array(":refP" => $refP, ":refE" => $refE, ":refB" => $refB, ":refM" => $refM, ":refR" => $refR, ":refS" => $refS, ":refET" => $refET, ":refCE" => $refCE['CE_ID'], ":quantite" => $quantite));
        }

        public function selectCellule($refE, $refB, $refM, $refR, $refS, $refET){

            $sql = "SELECT CE_ID FROM Cellule WHERE FK_EN = :refE && FK_BA = :refB && FK_MO = :refM && FK_RA = :refR && FK_SE = :refS && FK_ET = :refET";
            $req = $this->dbh->prepare($sql);
            $req->execute(array(":refE" => $refE, ":refB" => $refB, ":refM" => $refM, ":refR" => $refR, ":refS" => $refS, ":refET" => $refET));
            return $req->fetchAll();

        }

        public function deleteStockEntrepot($ref){

            $sql = "DELETE FROM `Presente` WHERE FK_CE = :ref ";
            $req = $this->dbh->prepare($sql);
            $req->execute(array(":ref" => $ref));

        }

    }

?>