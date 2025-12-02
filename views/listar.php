<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>CRUD de Profesores</title>
</head>
<body>
<h2>Gestión de Profesores</h2>

<?php
while ($fila = $datos->fetch_assoc()) {
    echo "<label>".$fila['nombre']."</label>";
    echo " <a href='index.php?c=Profesor&m=modificar&idProfesor=".$fila['idProfesor']."'>Modificar</a>";
    echo " <a href='index.php?c=Profesor&m=eliminar&idProfesor=".$fila['idProfesor']."'>Eliminar</a>";
    echo "<br>";
}
?>
</body>
</html>
