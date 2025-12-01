<?php
require_once "config/conexionDB.php";
require_once "controlador/profesor.php";

$conexion = new mysqli(SERVER, USER, PASS, DB);
$controller = new Profesor($conexion);

if (!$_GET) {
    header("Location: procesoModificar.php?accion=modificar&idProfesor=2");
    exit;
}

$accion = $_GET['accion'];

switch ($accion) {

    case 'modificar':
        $controller->modificar();
        break;

    case 'procesarModificar':
        $controller->procesarModificar();
        break;
}
?>
