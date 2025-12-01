<?php
require_once "config/conexionDB.php";
require_once "controlador/profesor.php";

$conexion = new mysqli(SERVER, USER, PASS, DB);
$controller = new Profesor($conexion);

if (!$_GET) {
    header("Location: procesoListar.php?accion=listar");
    exit;
}

$accion = $_GET['accion'];

switch ($accion) {

    case 'listar':
        $controller->listar();
        break;

}
?>

