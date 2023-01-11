<?php 

header('Content-Type: application/json');

require_once("../config/conexion.php");
require_once("../models/Categoria.php");


$categoria=new Categoria();

$body = json_decode(file_get_contents("php://input"), true);



switch($_GET["op"]){

    case "GetAll":
       $datos=$categoria->get_categoria();
       echo json_encode($datos);
    break;



    case "insert":

      $datos=$categoria->insert_categoria($body["nombre"],$body["imagen"]);
      echo json_encode("insertado correctamente");

    break;

     case "update":

      $datos=$categoria->update_categoria($body["id"],$body["nombre"],$body["imagen"]);
      echo json_encode("Libro actualizado correctamente");

    break;

     case "delete":

      $datos=$categoria->delete_categoria($body["id"]);
      echo json_encode("Libro eliminado correctamente");

    break;




}


?>