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
    
        public function loginApp($user, $mdp){

            try{
                $sql = "SELECT count(*) FROM Utilisateurs WHERE us_user='".$user."' AND us_pass='".$mdp."'";
                $result = $this->pdo->query($sql);

                if($result->rowCount() > 0){
                  
                    while($row = $result->fetch()){

                        $data=array(
                            'username' => $user,
                            'login' => $row[0]
                        );
                        return $data;
                    }
                   
                    unset($result);
                } else{
                    echo "ERROR";
                }

            } catch(PDOException $e){
                die("ERROR: Could not able to execute $sql. " . $e->getMessage());
            }

        }

        public function loginAccountType($user){

            try{
                $sql = "SELECT user_type FROM Utilisateurs WHERE us_user='".$user."'";
                $result = $this->pdo->query($sql);

                if($result->rowCount() > 0){
                  
                    while($row = $result->fetch()){

                        $data=array(
                            'account' => $row[0]
                        );
                        return $data;
                    }
                   
                    unset($result);
                } else{
                    echo "ERROR";
                }

            } catch(PDOException $e){
                die("ERROR: Could not able to execute $sql. " . $e->getMessage());
            }

        }

    }

?>