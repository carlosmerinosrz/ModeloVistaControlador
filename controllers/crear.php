<?php
    if(isset($_POST['enviar'])){
        require "../models/lugar.php";

        $ip = $_POST["ip"];
        $nombre = $_POST["nombre"];
        $descripcion = $_POST["descripcion"];

        $objeto = new Lugar();
        $mensaje = $objeto->crear($ip, $nombre, $descripcion);

        echo $mensaje;
    }

    require "../views/mostrar_alta.php";
?>