<?php

require "conexion.php";

$nombre = $_POST['nombre'];
$aPaterno = $_POST['aPaterno'];
$aMaterno = $_POST['aPaterno'];

$sql = "INSERT INTO Alumno (nombre, ApellidoPaterno, ApellidoMaterno) VALUES ('$nombre', '$$aPaterno', '$aMaterno')";


if ($con->query($sql) === true) {
    echo "Insertado Correctamente";
  } else {
    echo "Error: " . $sql . "<br>" . $con->error;
  }

  