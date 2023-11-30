<?php
function conectar()
{
    $conexion = mysqli_connect("localhost", "root", "", "eyf");

    if (!$conexion) {
        die("Error de conexión: " . mysqli_connect_error());
    }

    return $conexion;
}

$conexiondb = conectar();

function desconectar($conexion)
{
    mysqli_close($conexion);
}
?>
