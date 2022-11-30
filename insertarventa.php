<?php
    require("conexion.php");
    $conn = conectar();    
    if ($conn->connect_error) echo ("No se pudo conectar a la base de datos");

    $nombre_producto = $_POST["nombrep"];
    $cant_producto = $_POST["cantidad"];
    $total_venta = $_POST["total"];   

    $query = "insert into ventas (nombre_producto, cant_producto, total_venta) values ('$nombre_producto', $cant_producto, $total_venta)"; 
    $resultado = $conn->query($query);
    if(!$resultado) echo 'algo salio mal';
    header("Location:ventas.php");
?>