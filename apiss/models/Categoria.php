<?php 


class Categoria extends Conectar{



   public function get_categoria(){
        $conectar=parent::conexion();
        parent::set_name();
        $sql="SELECT * FROM libros WHERE id>1";
        $sql=$conectar->prepare($sql);
        $sql->execute();
        return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);



    }




      public function insert_categoria($nombre,$imagen){
        $conectar=parent::conexion();
        parent::set_name();
        $sql="INSERT INTO libros(id,nombre,imagen) VALUES(NULL,?,?)";
        $sql=$conectar->prepare($sql);
        $sql->bindValue(1,$nombre);
        $sql->bindValue(2,$imagen);
        $sql->execute();
        return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);



    }


       public function update_categoria($id,$nombre,$imagen){
        $conectar=parent::conexion();
        parent::set_name();
        $sql="UPDATE libros set nombre=? , imagen=? WHERE id=?";
        $sql=$conectar->prepare($sql);
        $sql->bindValue(1,$nombre);
        $sql->bindValue(2,$imagen);
        $sql->bindValue(3,$id);
        $sql->execute();
        return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);



    }


        public function delete_categoria($id){
        $conectar=parent::conexion();
        parent::set_name();
        $sql="DELETE  FROM libros WHERE id=?";
        $sql=$conectar->prepare($sql);
        $sql->bindValue(1,$id);
        $sql->execute();
        return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);



    }


    

}



?>