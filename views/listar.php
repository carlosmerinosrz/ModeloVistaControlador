<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Visitas de Jesuitas</title>
</head>
<body>
    <table>
        <tr>
            <th>NOMBRE</th>
            <th>IP</th>
            <th>DESCRIPCION</th>
            <th>BORRAR</th>
            <th>MODIFICAR</th>
        </tr>
        <?php
            foreach ($datos as $fila) {
                echo "<tr>";
                    echo "<td>" . $fila['ip'] . "</td>";
                    echo "<td>" . $fila['lugar'] . "</td>";
                    echo "<td>" . $fila['descripcion'] . "</td>";
                    echo "<td><a href='../controllers/borrar.php?ip=" . $fila['ip'] . "' target='_blank'><img src='../icons/delete.png'></a></td>";
                    echo "<td><a href='../views/formulario_modificar.php?ip=" . $fila['ip'] . "&nombre=" . $fila['lugar'] . "&descripcion=" . $fila['descripcion'] . "' target='_blank'><img src='../icons/modif.png'></a></td>";
                echo "</tr>";
            }
        ?>
    </table>
    <a href="lugar.html">Volver</a>
</body>
</html>

