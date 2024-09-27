<?php

$con = new mysqli("localhost", "frodo", "2010_F?!", "escuela");
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
else{
    echo "Conectado";
}

