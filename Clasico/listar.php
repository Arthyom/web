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


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <ul>
    <li>
        <p> <?php echo var_dump($result) ?> </>
    </li>
  </ul>
</body>
</html>