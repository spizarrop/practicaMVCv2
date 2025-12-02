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
        
        while ($fila = $resultado->fetch_assoc()) {
            $datos[] = $fila;
        }

        $this->vista = "listar.php";

        return $datos;
    }

    public function modificar() {
        $idProfesor = $_GET['idProfesor'];
        $fila = $this->modelo->obtenerPorId($idProfesor);

        $datos = [
            'idProfesor' => $fila['idProfesor'],
            'nombre'     => $fila['nombre']
        ];

        $this->vista = "modificar.php";

        return $datos;
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

        $datos = [
            'idProfesor' => $fila['idProfesor'],
            'nombre'     => $fila['nombre']
        ];

        $this->vista = "eliminar.php";

        return $datos;
    }

    public function procesarEliminar() {
        $idProfesor = $_GET['idProfesor'];
        $this->modelo->eliminar($idProfesor);
        
        header('Location: index.php');
        exit;
    }

    public function alta() {
        $datos = [
            'nombre' => ''
        ];

        $this->vista = "alta.php";

        return $datos;
    }

    public function procesarAlta() {
        $nombre = $_GET['nombre'];
        $this->modelo->insertar($nombre);

        header('Location: index.php');
        exit;
    }
}
?>
