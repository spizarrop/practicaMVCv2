<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Eliminar</title>
</head>
<body>
    <form action="index.php" method="POST">
        <input type='hidden' name='c' value='Profesor'>
        <input type='hidden' name='m' value='procesarEliminar'>
        <input type='hidden' name='idProfesor' value='<?= $datos['idProfesor'] ?>'>
        <label>¿Seguro que deseas eliminar a <?= $datos['nombre'] ?> de la lista de profesores?</label><br>
        <button type='submit'>Eliminar</button>
    </form>
</body>
</html>
