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
        return $this->conexion->query($sql);
    }

    public function obtenerPorId($idProfesor) {
        $sql = "SELECT * FROM profesores WHERE idProfesor = " . $idProfesor;
        $resultado = $this->conexion->query($sql);
        return $resultado->fetch_assoc();
    }

    public function actualizar($idProfesor, $nuevoNombre) {
        $sql = "UPDATE profesores
                SET nombre = '" . $nuevoNombre . "'
                WHERE idProfesor = " . $idProfesor;

        return $this->conexion->query($sql);
    }

    public function eliminar($idProfesor) {
        $sql = "DELETE FROM profesores WHERE idProfesor = " . $idProfesor;
        return $this->conexion->query($sql);
    }
}
?>
