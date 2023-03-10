<?php

    class connexion{

        private $db_name;
        private $db_user;
        private $db_pass;
        private $db_host;
        private $pdo;

        public function __construct($db_name = 'gestion_ecole', $db_user = 'root', $db_pass='', $db_host ='localhost')
        {
            $this->db_name = $db_name;
            $this->db_user = $db_user;
            $this->db_pass = $db_pass;
            $this->db_host = $db_host;
        }

        public function getPDO(){
            if($this->pdo === null){ 

                $pdo = new PDO ('mysql:dbname=gestion_ecole;host=localhost','root', '');
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $this->pdo = $pdo;

            }

            return $this->pdo;
        }

        public function query($statemente){
            
            $req = $this->getPDO()->query($statemente);
            $datas = $req->fetchAll(PDO::FETCH_OBJ);
            return $datas;
            
        }
        public function prepare($statemente){
            $req = $this->getPDO()->prepare($statemente);        
            $req->execute($statemente);
            $datas = $req->fetch(PDO::FETCH_ASSOC);
            return $datas;
        }
   }
   