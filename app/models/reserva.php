<?php
require_once '../../config/db.php';

class reserva
{
    public static function Reserva($nombre, $email, $mensaje): bool
    {
        global $conn;

        try {
            $sql = "INSERT INTO reservas(name, email, mensaje) VALUES ('$nombre', '$email', '$mensaje')";
            if ($conn->query($sql) === TRUE) {
                return true;
            } else {
                echo "Error al registrar la reserva".$conn->error;
                return false;
            }
            
        } catch (mysqli_sql_exception $e) {
            echo "Error al registrar la reserva: ".$conn->error;
            return false;
        }
    }
}
?>
