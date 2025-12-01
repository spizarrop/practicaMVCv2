<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Modificar</title>
</head>
<body>
    <form action="procesoModificar.php" method="GET">
        <input type="hidden" name="accion" value="procesarModificar">
        <label>Nombre:</label><br>
        <input type='hidden' name='idProfesor' value='<?= $_GET['idProfesor'] ?>'>
        <input type='text' name='nuevoNombre' value='<?= $nombre ?>'>
        <button type='submit'>Aplicar</button>
    </form>
</body>
</html>
