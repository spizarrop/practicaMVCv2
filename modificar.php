<?php
$controlador = $_GET["c"] ?? $_POST["c"] ?? 'Profesor';
$metodo = $_GET["m"] ?? $_POST["m"] ?? 'modificar';

require_once "controller/con".$controlador.".php";

$nombreControlador = "Con".$controlador;
$objControlador = new $nombreControlador();

$datos = $objControlador->$metodo();

include "views/".$metodo.".php";
?>

