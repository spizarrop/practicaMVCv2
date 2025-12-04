<?php
require_once "config/conexionDB.php";

class ModProfesor {

    private $conexion;

    public function __construct() {
        $this->conexion = new mysqli(SERVER, USER, PASS, DB);
    }

    // MÉTODOS DEL MODELO (solo SQL)

    public function obtenerTodos() {
        $sql = "SELECT * FROM profesores ORDER BY nombre";
        $resultado = $this->conexion->query($sql);

        while ($fila = $resultado->fetch_assoc()) {
            $datos[] = $fila;
        }
        
        return $datos;
    }

    public function obtenerPorId() {
        $sql = "SELECT * FROM profesores WHERE idProfesor = " . $_GET['idProfesor'];
        $resultado = $this->conexion->query($sql);

        $datos = $resultado->fetch_assoc();

        return $datos;
    }

    public function actualizar() {
        $sql = "UPDATE profesores SET 
                nombre = '" . $_POST['nombre'] . "'
                WHERE idProfesor = " . $_GET['idProfesor'];

        return $this->conexion->query($sql);
    }

    public function eliminar() {
        $sql = "DELETE FROM profesores WHERE idProfesor = " . $_GET['idProfesor'];

        return $this->conexion->query($sql);
    }

    public function insertar() {
        $sql = "INSERT INTO profesores (nombre) VALUES ('". $_POST['nombre'] ."')";

        return $this->conexion->query($sql);
    }
}
?>
