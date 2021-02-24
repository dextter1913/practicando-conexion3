<?php 
$host = "localhost";
$usuario = "root";
$contraseña = "";
$BaseDatos = "empresa";

$table = "empleado";

error_reporting(0);
$conexion = new mysqli($host, $usuario, $contraseña, $BaseDatos);

if ($conexion->connect_errno) {
    echo "hay problemas de conexion, estamos trabajando para solucionarlo";
}
?>