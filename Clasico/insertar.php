<?php

require "conexion.php";

$nombre = $_POST['nombre'];
$aPaterno = $_POST['aPaterno'];
$aMaterno = $_POST['aMaterno'];

$sql = "INSERT INTO Alumno
 (nombre, ApellidoPaterno, ApellidoMaterno) 
 VALUES ('$nombre', '$$aPaterno', '$aMaterno');";


if ($con->query($sql) === true) {
    echo "Insertado Correctamente";
  } else {
    echo "Error: " . $sql . "<br>" . $con->error;
  }

  