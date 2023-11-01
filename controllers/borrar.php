<?php
    require "../models/lugar.php";
    $ip = $_GET['ip'];
    $objeto = new Lugar();
    $mensaje = $objeto->borrar($ip);

    echo $mensaje;
?>