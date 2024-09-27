<?php

require "conexion.php";


$sql = "SELECT * FROM Alumno";




$result = $con->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Nombre: " . $row["Nombre"]. " " . $row["ApellidoPaterno"]. " " . $row["ApellidoPaterno"]. "<br>";
  }
} else {
  echo "0 results";
}


?>

