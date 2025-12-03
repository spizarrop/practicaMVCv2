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

    public function obtenerPorId($idProfesor) {
        $sql = "SELECT * FROM profesores WHERE idProfesor = " . $idProfesor;
        $resultado = $this->conexion->query($sql);

        $datos = $resultado->fetch_assoc();

        return $datos;
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

    public function insertar($nombre) {
        $sql = "INSERT INTO profesores (nombre) VALUES ('". $nombre ."')";

        return $this->conexion->query($sql);
    }
}
?>
