<?php
$controlador = $_GET["c"] ?? 'Profesor';
$metodo = $_GET["m"] ?? 'eliminar';

require_once "controller/con".$controlador.".php";

$nombreControlador = "Con".$controlador;
$objControlador = new $nombreControlador();

$datos = $objControlador->$metodo();

include "views/".$metodo.".php";
?>

