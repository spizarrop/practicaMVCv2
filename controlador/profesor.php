<?php
require_once "modelo/Mprofesor.php";

class Profesor {

    private $modelo;

    public function __construct($conexion) {
        $this->modelo = new Mprofesor($conexion);
    }

    public function listar() {
        $resultado = $this->modelo->obtenerTodos();
        require "vista/listar.php";
    }

    public function modificar() {
        $idProfesor = $_GET['idProfesor'];
        $fila = $this->modelo->obtenerPorId($idProfesor);
        $nombre = $fila['nombre'];
        require "vista/modificar.php";
    }

    public function procesarModificar() {
        $idProfesor = $_GET['idProfesor'];
        $nuevoNombre = $_GET['nuevoNombre'];

        $this->modelo->actualizar($idProfesor, $nuevoNombre);

        header("Location: procesoListar.php");
        exit;
    }

    public function eliminar() {
        $idProfesor = $_GET['idProfesor'];
        $fila = $this->modelo->obtenerPorId($idProfesor);
        $nombre = $fila['nombre'];
        require "vista/eliminar.php";
    }

    public function procesarEliminar() {
        $idProfesor = $_GET['idProfesor'];
        $this->modelo->eliminar($idProfesor);

        header("Location: procesoListar.php");
        exit;
    }
}
?>
