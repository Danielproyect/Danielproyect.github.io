<?php
    require("conexion.php");
    $conn = conectar();    
    if ($conn->connect_error) echo ("No se pudo conectar a la base de datos");

    $nombre_producto = $_POST["nompro"];
    $fecha_vencimiento = $_POST["date"];
    $precio = $_POST["precio"];   

    $query = "insert into productos (nombre_producto, fecha_vencimiento, precio) values ('$nombre_producto', '$fecha_vencimiento', $precio)"; 
    $resultado = $conn->query($query);
    if(!$resultado) echo 'algo salio mal';
    header("Location:productos.php");
?>