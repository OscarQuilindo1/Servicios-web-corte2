<?php

class conexion extends PDO{
private $host="localhost";
private $bd="sitio";
private $usuario="root";
private $contrasenia="";

public function __construct(){
    try{
        parent::__construct('mysql:host=' . $this->host . ';dbname=' . $this->bd . ';charset=utf8', $this->usuario, $this->contrasenia,
         array(PDO:: ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    }catch(PDOException $es){
        echo 'Error: ', $es->getMessage();
        exit;
    }
}

}
?>
