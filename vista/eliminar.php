<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Eliminar</title>
</head>
<body>
    <form action="procesoEliminar.php" method="GET">
        <input type="hidden" name="accion" value="procesarEliminar">
        <label>¿Seguro que deseas eliminar a <?= $nombre ?> de la lista de profesores?</label><br>
        <input type='hidden' name='idProfesor' value='<?= $_GET['idProfesor'] ?>'>
        <button type='submit' name='eliminar'>Eliminar</button>
    </form>
</body>
</html>
