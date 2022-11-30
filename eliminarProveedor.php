<?php
    require("conexion.php");
    $conn = conectar();

    $id_proveedor = $_GET["id"];
    $query = "delete from proveedores where id_proveedor=$id_proveedor";

    $conn->query($query);

    header("Location: proveedores.php");
?>