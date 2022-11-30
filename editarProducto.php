<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM productos WHERE id_producto='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="actualizar.php" method="POST">
                    
                                <input type="hidden" name="id_producto" value="<?php echo $row['id_producto']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="nombre_producto" placeholder="nombre" value="<?php echo $row['nombre_producto']  ?>">
                                <input type="text" class="form-control mb-3" name="fecha_vencimiento" placeholder="Fecha" value="<?php echo $row['fecha_vencimiento']  ?>">
                                <input type="text" class="form-control mb-3" name="precio" placeholder="precio" value="<?php echo $row['precio']  ?>">
                                <input type="text" class="form-control mb-3" name="id_proveedor" placeholder="Id proveedor" value="<?php echo $row['id_proveedor']  ?>">

                            <input type="submit" class="btn btn-primary btn-block" value="Editar">
                    </form>
                    
                </div>
    </body>
</html>