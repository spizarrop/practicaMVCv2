<?php
require_once "config/conexionDB.php";
require_once "controlador/profesor.php";

$conexion = new mysqli(SERVER, USER, PASS, DB);
$controller = new Profesor($conexion);

if (!$_GET) {
    header("Location: procesoEliminar.php?accion=eliminar&idProfesor=2");
    exit;
}

$accion = $_GET['accion'];

switch ($accion) {

    case 'eliminar':
        $controller->eliminar();
        break;

    case 'procesarEliminar':
        $controller->procesarEliminar();
        break;
}
?>
