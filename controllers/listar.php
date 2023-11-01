<?php
    require "../models/lugar.php";

    $objeto = new Lugar();
    $datos = $objeto->listar();
    
    require "../views/listar.php";
?>