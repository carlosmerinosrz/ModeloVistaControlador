<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Formulario Lugar</title>

</head>
<body>
   
    <form action="../controllers/crear.php" method="POST">
        <label for="ip">IP:</label>
        <input type="text" name="ip" required>
        <label for="nombre">NOMBRE DEL LUGAR:</label>
        <input type="text" name="nombre" required>
        <label for="descripcion">DESCRIPCION: </label>
        <input type="text" name="descripcion">
        <input type="submit" name="enviar">
    </form>
    <a href="lugar.html">Volver</a>
</body>
</html>