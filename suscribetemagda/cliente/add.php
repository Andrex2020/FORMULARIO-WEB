<?php
include_once('../config/config.php');
include('cliente.php');

if(isset($_POST) && !empty($_POST) ){
    $p = new cliente();

$save =$p->save($_POST);
if(save){
    $mensaje ='<div class="alert alert-success" > Sesión Registrada </div>';
}else{
    $mensaje ='<div class="alert alert-danger" > Error al registrar </div>';   
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Sesión</title>
    <!-- CSS only -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
    <div class="container"></div>
    <?php 
    if(isset($mensaje)){
        echo $mensaje;
    }
    ?>
    <h2 class="text-center mb-2">Suscribirse</h2>
    <form method="POST" enctype="multipart/form-data" >

    <div class="row mb-2">
     <div class="col">
      <input type="text" name="Nombre" id="Nombre" placeholder="Nombre del cliente" class="from-control">
     </div>
     <div class="col">
      <input type="email" name="Correo" id="Correo" placeholder="Email del cliente" class="from-control">
     </div>
    </div>
    
    <div class="row mb-2">
     <div class="col">
      <input type="number" name="Celular" id="Celular" placeholder="Celular del cliente" class="from-control">
     </div>
     <div class="col">
     <textarea id="Dirección" name="Dirección" placeholder=" Dirección del cliente" class="from-control"></textarea>
     </div>
    </div>

    <div class="row mb-2">
     <div class="col">
     <textarea id="Pedido" name="Pedido" placeholder=" Pedido del cliente" class="from-control"></textarea>
     </div>
    </div>
    <button class="btn btn-success"> Obtener mi Cupon</button>
    </form>
    
</body>
</html>