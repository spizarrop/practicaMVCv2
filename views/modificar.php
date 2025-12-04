<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Modificar</title>
</head>
<body>
    <form action="index.php?c=Profesor&m=procesarModificar&idProfesor=<?= $datos['idProfesor'] ?>" method="POST">
        <label>Nombre:</label><br>
        <input type='text' name='nombre' value='<?= $datos['nombre'] ?>'>
        <button type='submit'>Aplicar</button>
    </form>
</body>
</html>
