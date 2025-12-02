<?php
require_once "config/routes.php";

/* Creo las variables controlador y metodo y las inicializo si no se reciben por URL */
$controlador = $_GET["c"] ?? DEFAULT_CONTROLADOR;
$metodo = $_GET["m"] ?? DEFAULT_METODO;

/* Creo la ruta del controlador */
$rutaControlador = CONTROLADOR."con".$controlador.".php";
$nombreControlador = "Con".$controlador;
require_once $rutaControlador;

/* Creo una instancia del controlador */
$objControlador = new $nombreControlador();

/* Hago la llamada al método correspondiente y almaceno en $datos los necesario para la vista */
$datos = $objControlador->$metodo();

/* Muestro la vista correspondiente */
include VISTAS.$objControlador->vista;
?>

