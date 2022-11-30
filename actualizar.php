<?php

include("conexion.php");
$con=conectar();

$id_proveedor=$_POST['id_proveedor'];
$nombre_proveedor=$_POST['nombre_proveedor'];
$telefono=$_POST['telefono'];
$nombre_producto=$_POST['nombre_producto'];

$sql="UPDATE proveedores SET  nombre_proveedor='$nombre_proveedor',telefono='$telefono',nombre_producto='$nombre_producto' WHERE id_proveedor='$id_proveedor'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: proveedores.php");
    }
?>