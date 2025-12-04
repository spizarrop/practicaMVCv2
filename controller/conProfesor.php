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
        $idProfesor = $_GET['idProfesor'];
        $datos = $this->modelo->obtenerPorId($idProfesor);

        $this->vista = "modificar.php";

        return $datos;
    }

    public function procesarModificar() {
        $this->modelo->actualizar();

        header('Location: index.php');
        exit;
    }

    public function eliminar() {
        $idProfesor = $_GET['idProfesor'];
        $datos = $this->modelo->obtenerPorId($idProfesor);

        $this->vista = "eliminar.php";

        return $datos;
    }

    public function procesarEliminar() {
        $idProfesor = $_POST['idProfesor'];
        $this->modelo->eliminar($idProfesor);
        
        header('Location: index.php');
        exit;
    }

    public function alta() {
        $datos = ['nombre' => ''];

        $this->vista = "alta.php";

        return $datos;
    }

    public function procesarAlta() {
        $nombre = $_POST['nombre'];
        $this->modelo->insertar($nombre);

        header('Location: index.php');
        exit;
    }
}
?>
