<?php

class Conexao {
  private $conn;
    public function connection(){
      
   
   try{
   return $this->conn =  new PDO("mysql:dbname=curriculodsin; host=localhost:3306" , "root", "");
    
   }catch(PDOException $e){
    echo "ERRO:".$e->getMessage();
      exit;
 }
    }

}


?>