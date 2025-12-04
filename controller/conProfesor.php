<?php
require_once "config/routes.php";
require_once MODELO."modProfesor.php";

class ConProfesor {

    private $modelo;
    public $vista;

    public function __construct() {
        $this->modelo = new ModProfesor();
    }

    public function listar() {
        $datos = $this->modelo->obtenerTodos();

        $this->vista = "listar.php";

        return $datos;
    }

    public function modificar() {
        $datos = $this->modelo->obtenerPorId();

        $this->vista = "modificar.php";

        return $datos;
    }

    public function procesarModificar() {
        $this->modelo->actualizar();

        header('Location: index.php');
        exit;
    }

    public function eliminar() {
        $datos = $this->modelo->obtenerPorId();

        $this->vista = "eliminar.php";

        return $datos;
    }

    public function procesarEliminar() {
        $this->modelo->eliminar();
        
        header('Location: index.php');
        exit;
    }

    public function alta() {
        $this->vista = "alta.php";

        return true;
    }

    public function procesarAlta() {
        $this->modelo->insertar();

        header('Location: index.php');
        exit;
    }
}
?>
