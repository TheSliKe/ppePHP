<?php
    class Bdd{

        private $pdo;

        public function __construct() {
           
            try{
                $this->pdo = new PDO("mysql:host=juliendupale.myddns.me;dbname=ppe3", "ppe3", "ppe3");
                
                $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch(PDOException $e){
                die("ERROR: Could not connect. " . $e->getMessage());
            }

        }

        public function villeToEntrepotID($Ville){

            try{
                $sql = "SELECT EN_ID FROM Entrepot WHERE En_Ville='".$Ville."'";
                $result = $this->pdo->query($sql);

                if($result->rowCount() > 0){
                  
                    while($row = $result->fetch()){

                        return $row[0];
                    }
                   
                    unset($result);
                } else{
                    echo "ERROR";
                }

            } catch(PDOException $e){
                die("ERROR: Could not able to execute $sql. " . $e->getMessage());
            }

        }

        public function listStocknull(){

            try{
                $sql = "SELECT t1.PR_ReferenceProduit, t1.PR_Libelle, t1.PR_Description, t1.PR_CodeBarre, t1.PR_CoutHT FROM Produit t1 LEFT JOIN Presente t2 ON t2.FK_PR = t1.PR_ReferenceProduit WHERE t2.FK_PR IS NULL";
                $result = $this->pdo->query($sql);

                $arraysn = array();

                if($result->rowCount() > 0){
                  

                    while($row = $result->fetch()){
                        $tempsn = array(
                            'Ref' => $row[0],
                            'Libelle' => $row[1],
                            'Description' => $row[2],
                            'CodeBarre' => $row[3],
                            'CoutHT' => $row[4]
                        );

                        array_push($arraysn, $tempsn);
                       
                    }
                   
                    unset($result);
                } else{
                    array_push($arraysn, "");
                }

                return $arraysn;

            } catch(PDOException $e){
                die("ERROR: Could not able to execute $sql. " . $e->getMessage());
            }

        }

        public function listStockVille($ENID){

            try{
                $sql = "SELECT sum(PRE_Quantite), t2.PR_ReferenceProduit, t2.PR_Libelle, t2.PR_Description, t2.PR_CodeBarre, t2.PR_CoutHT FROM Presente t1 INNER JOIN Produit t2 ON t1.FK_PR = t2.PR_ReferenceProduit WHERE t1.FK_EN=".$ENID." GROUP BY t1.FK_PR";
                $result = $this->pdo->query($sql);

                $array = array();

                if($result->rowCount() > 0){
                  

                    while($row = $result->fetch()){
                        $temp = array(
                            'Qte' => $row[0],
                            'Ref' => $row[1],
                            'Libelle' => $row[2],
                            'Description' => $row[3],
                            'CodeBarre' => $row[4],
                            'CoutHT' => $row[5]
                        );

                        array_push($array, $temp);
                       
                    }
                   
                    unset($result);
                } else{
                    array_push($array, "");
                }

                return $array;

            } catch(PDOException $e){
                die("ERROR: Could not able to execute $sql. " . $e->getMessage());
            }

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


        
    }
?>