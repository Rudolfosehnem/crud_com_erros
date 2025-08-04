<?php

$host = "localhost";
$user = "root";
$password = "root";
$db = "crud_exemplo";

$conn = mysqli_connect($host, $user, $password, $db); 

if (!$conn) {
    echo "Falha na conexão!";
}
?>