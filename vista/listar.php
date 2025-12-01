<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>CRUD de Profesores</title>
</head>
<body>
<h2>Gestión de Profesores</h2>

<?php
while ($fila = $resultado->fetch_assoc()) {
    echo "<label>".$fila['nombre']."</label>";
    echo " <a href='procesoModificar.php?accion=modificar&idProfesor=".$fila['idProfesor']."'>Modificar</a>";
    echo " <a href='procesoEliminar.php?accion=eliminar&idProfesor=".$fila['idProfesor']."'>Eliminar</a>";
    echo "<br>";
}
?>
</body>
</html>
