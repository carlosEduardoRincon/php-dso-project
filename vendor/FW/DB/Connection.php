<?php

    namespace FW\DB;
    
    abstract class Connection {
        
        private $conn;
        private $dbname;
        private $host;
        private $user;
        private $pass;                       

        public function __construct() {
                       
            $this->dbname = "banco";
            $this->host = "localhost";
            $this->user = "usuario";
            $this->pass = "senha";
            try{
                $this->conn = new \PDO(
                    "mysql:dbname=".$this->dbname.";host=".$this->host.";charset=utf8", 
                    $this->user, 
                    $this->pass
                );
            } catch (\PDOException $ex) {
                echo "Ocorreu erro: ".$ex->getMessage();
                die();
            }

        }

        protected function getConn() {
            return $this->conn;            
        }
        
    }
    
?>