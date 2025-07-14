<?php

$server = "localhost";
$username = "root";
$password = "123";
$database = "practica3";


$conn = new mysqli($server, $username, $password, $database);

$espacio = "<br>";

if ($conn->connect_error) {
    die("Error de conexion");
} 
