<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "prueba";

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
  die("Error al conectar con la base de datos: " . mysqli_connect_error());
}
?>