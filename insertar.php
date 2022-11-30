<?php
    require("conexion.php");
    $conn = conectar();    
    if ($conn->connect_error) echo ("No se pudo conectar a la base de datos");

    $nombre_proveedor = $_POST["nombre"];
    $telefono = $_POST["telefono"];
    $nombre_producto = $_POST["producto"];   

    $query = "insert into proveedores (nombre_proveedor, telefono, nombre_producto) values ('$nombre_proveedor', $telefono, '$nombre_producto')"; 
    $resultado = $conn->query($query);
    if(!$resultado) echo 'algo salio mal';
    header("Location:proveedores.php");
?>