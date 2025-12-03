<?php
require_once "config/routes.php";

/* Creo las variables controlador y metodo y las inicializo si no se reciben por URL */
$controlador = $_GET["c"] ?? $_POST["c"] ?? DEFAULT_CONTROLADOR;
$metodo = $_GET["m"] ?? $_POST["m"] ?? DEFAULT_METODO;

/* Creo la ruta del controlador */
$rutaControlador = CONTROLADOR."con".$controlador.".php";
require_once $rutaControlador;

/* Creo una instancia del controlador */
$nombreControlador = "Con".$controlador;
$objControlador = new $nombreControlador();

/* Hago la llamada al método correspondiente y almaceno en $datos los necesario para la vista */
$datos = $objControlador->$metodo();

/* Muestro la vista correspondiente */
include VISTAS.$objControlador->vista;

/* Cambios:
  - Ahora mi index sirve para todos los controladores ya que el nombre del controlador se pasa por URL
    y el nombre del método se obtiene también por URL
  - Ahora unicamente conecto a la base de datos desde el modelo
  - Ahora el resultado de la query se guarda en un array el cual se retorna
  - Ahora uso el fetch_assoc en el modelo en lugar de la vista 
*/
/* Nuevos Cambios:
  - Ahora los datos de los formularios se envian con POST
  - Ahora el método de modificar recibe un array con todos los datos del formulario
  - He añadido al archivo rutas la ruta del modelo
 */
?>

