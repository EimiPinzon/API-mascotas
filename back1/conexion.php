<?php

$conexion =new mysqli('localhost','root','','mascotas');


if (mysqli_connect_error()){
    echo "No conectado", mysqli_connect_error();
    exit();
}

?>