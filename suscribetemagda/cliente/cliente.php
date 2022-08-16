<?php 

include_once('../config/config.php');
include('../config/Database.php');
class cliente{
    public $conexiòn;
    function __construct()
    {
        $db= New Database();
        $this->conexion= $db-> connectToDatabase();
    }
     function save($params){
        $Nombre= $params['Nombre'];
        $Correo= $params['Correo'];
        $Celular= $params['Celular'];
        $Dirección= $params['Dirección'];
        $Pedido= $params['Pedido'];

     $insert="INSERT INTO clientes VALUES('$Nombre','$Correo' ,'$Celular', '$Dirección', '$Pedido')";
     return mysqli_query($this->conexion, $insert);
     }
}


?>