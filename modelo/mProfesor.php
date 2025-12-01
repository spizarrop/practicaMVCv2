<?php

class Mprofesor {

    private $conexion;

    public function __construct($conexion) {
        $this->conexion = $conexion;
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
