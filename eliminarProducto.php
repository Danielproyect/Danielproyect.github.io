<?php
    require("conexion.php");
    $conn = conectar();

    $id_producto = $_GET["id"];
    $query = "delete from productos where id_producto=$id_producto";

    $conn->query($query);

    header("Location: productos.php");
?>