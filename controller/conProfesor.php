<?php
require_once "config/routes.php";
require_once "model/modProfesor.php";

class ConProfesor {

    private $modelo;
    public $vista;

    public function __construct() {
        $this->modelo = new ModProfesor();
    }

    public function listar() {
        $resultado = $this->modelo->obtenerTodos();
        $this->vista = "listar.php";
        return $resultado;
    }

    public function modificar() {
        $idProfesor = $_GET['idProfesor'];
        $fila = $this->modelo->obtenerPorId($idProfesor);
        $nombre = $fila['nombre'];
        $this->vista = "modificar.php";
        return $nombre;
    }

    public function procesarModificar() {
        $idProfesor = $_GET['idProfesor'];
        $nuevoNombre = $_GET['nuevoNombre'];
        $this->modelo->actualizar($idProfesor, $nuevoNombre);
        
        header('Location: index.php');
        exit;
    }

    public function eliminar() {
        $idProfesor = $_GET['idProfesor'];
        $fila = $this->modelo->obtenerPorId($idProfesor);
        $nombre = $fila['nombre'];
        $this->vista = "eliminar.php";
        return $nombre;
    }

    public function procesarEliminar() {
        $idProfesor = $_GET['idProfesor'];
        $this->modelo->eliminar($idProfesor);
        
        header('Location: index.php');
        exit;
    }
}
?>
