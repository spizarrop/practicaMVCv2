<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Alta Profesor</title>
</head>
<body>
    <form action="index.php" method="POST">
        <input type='hidden' name='c' value='Profesor'>
        <input type='hidden' name='m' value='procesarAlta'>
        <input type='hidden' name='idProfesor' value='<?= $datos['idProfesor'] ?>'>
        <label>Nombre:</label><br>
        <input type='text' name='nombre' value='<?= $datos['nombre'] ?>'>
        <button type='submit'>Dar de alta</button>
    </form>
</body>
</html>
