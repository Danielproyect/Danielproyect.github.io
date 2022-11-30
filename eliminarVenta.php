<?php
    require("conexion.php");
    $conn = conectar();

    $num_venta = $_GET["id"];
    $query = "delete from ventas where num_venta=$num_venta";

    $conn->query($query);

    header("Location: ventas.php");
?>