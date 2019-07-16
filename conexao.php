<?php

class Conexao{
 
    private $con = '';
    private $dbname = 'DBSiteLanchonete';
    private $host = 'localhost';
    private $port = '5432';
    private $username = 'postgres';
    private $password = 'dbadmin';
    
    public function connection(){
       
      $this->con = pg_connect("host=localhost port=5432 dbname=DBSiteLanchonete user=postgres password=dbadmin");
      return $this->con;

    }
    
    public function close(){


    }
}


?>