<?php
require_once '../models/reserva.php';

$nombre = $_POST["nombre"];
$email = $_POST["email"];
$mensaje = $_POST["mensaje"];

$resultado = reserva::Reserva($nombre, $email, $mensaje);
if ($resultado) {
    header("Location: ../../reservaRegistrada.php");
} else {
    header("Location: ../../mensajeError.php");
}
?>