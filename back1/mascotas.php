<?php

include_once 'conexion.php';

class mascota extends DB{

  function obtenerMascotas(){

    $query = $this->connect()->query('SELECT * FROM mascotas');

    return $query;
  }
}

?>
