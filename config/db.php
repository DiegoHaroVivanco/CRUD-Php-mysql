<?php 
    class db{
        private $host = 'localhost';
        private $db = 'crud';
        private $user = 'diiego';
        private $password = 'diego12';
        
        public function conexion(){
            try{
                $pdo = new PDO("mysql:host=".$this->host.";db=".$this->db,$this->user,$this->password);
                return $pdo;
            }catch(PDOException $error){
                return $error->getMessage();
            }
        }
    }

    // $objdb = new db();
    // print_r($objdb->conexion());
?>