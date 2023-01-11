<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>Document</title>
    
</head>
<body>
    <h1>Consumidor del sitio web Libros</h1>
<?php
include('../conexion/conexiones.php');

$pdo = new Conexion();

if($_SERVER['REQUEST_METHOD'] == 'GET'){
    $sql = $pdo->prepare("SELECT * FROM libros");
    $sql->execute();
    $sql->setFetchMode (PDO::FETCH_ASSOC);

}
?>

<?php 
$listaLibros=$sql->fetchAll(PDO::FETCH_ASSOC)
?>

<?php foreach($listaLibros as $libro) { ?>

<div class="col-md-3">
<div class="card">
<img class="card-img-top" src="../img/<?php echo $libro['imagen']; ?>" alt="">
<div class="card-body">
        <h4 class="card-title"><?php echo $libro['nombre']; ?></h4>
        <a name="" id="" class="btn btn-primary" href="#" role="button">Ver más</a>
</div>
</div>
</div>

<?php } ?>

</body>
</html>