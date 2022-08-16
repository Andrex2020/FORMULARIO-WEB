<?php

class database{
    public $host= 'localhost'; // Servidor
    public $user= 'root'; //Usuario de phpMyadmin
    public $pass= ''; //Contraseña de phpMyadmin
    public $db='clientes'; // Base de datos
    public $conexion;

    function connectToDatabase(){
    $this->conexion =mysqli_connect( $this->host, $this->user, $this->pass, $this->db);

    if(mysqli_connect_error()){
    echo'Error de Conexión'. mysqli_connect_error();
    }
    return $this-> conexion; 
    }

}
?>