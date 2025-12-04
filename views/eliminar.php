<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Eliminar</title>
</head>
<body>
    <form action="index.php?c=Profesor&m=procesarEliminar&idProfesor=<?= $datos['idProfesor'] ?>" method="POST">
        <label>¿Seguro que deseas eliminar a <?= $datos['nombre'] ?> de la lista de profesores?</label><br>
        <button type='submit'>Eliminar</button>
    </form>
</body>
</html>
