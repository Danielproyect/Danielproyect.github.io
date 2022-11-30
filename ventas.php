<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COINVENT</title>
    <link rel="stylesheet" href="estilos.css">
    <link rel="icon" type="image/x-icon" href="imagenes/coinventico.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>
<body>
    <header> 
<nav class="menu"> 
<ul>
    <li class="navegacion_li"> <a href="proveedores.php"> Proveedores</a> </li>
    <li class="navegacion_li"> <a href="productos.php"> Productos</a> </li>
    <li class="navegacion_li"> <a href="ventas.php"> Ventas</a> </li>
    

</ul>

</nav>
    
    </header>

    <section class="contenedor_formulario">

        <h2>Formulario Ventas</h2>
        <form action="insertarventa.php" method="post">
   
   
            <div class="nombre_proveedor">
               <input type="text" required name="nombrep">
               <label>Nombre del Producto</label>
   
           </div>
   
           <div class="telefono">
               <input type="number" required name="cantidad">
               <label>Cantidad del Producto</label>
   
           </div>
   
           <div class="nombre_producto">
               <input type="number" required name="total">
               <label>Total de la Venta</label>
   
           </div>
             
           <input type="submit" value="Registrar"  >
        </form>

    </section>

    <section class="contenedor_tabla">
        <div class="col-md-8">
            <table class="table" >
                <thead class="table-success table-striped" >
                    <tr>
                        <th>Numero_venta</th>
                        <th>Nombre_Producto</th>
                        <th>Cantidad</th>
                        <th>Total</th>
                        <th>OPCIONES</th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                       
                    </tr>
                </thead>

                <tbody>
                    <?php
                                    require("conexion.php");
                                    $conn = conectar();
                                    $query = "select num_venta, nombre_producto, cant_producto, total_venta from ventas";
                                    
                                    $resultado = $conn->query($query);
        
                                    $n_reg = $resultado->num_rows;
        
                                    for($j = 0; $j < $n_reg; ++$j)
                                    {
                                        $resultado->data_seek($j);
                                        $registro = $resultado->fetch_assoc();
                                        echo '<tr>';
                                        echo '<td>'.$registro["num_venta"].'</td>';
                                        echo '<td>'.$registro["nombre_producto"].'</td>';
                                        echo '<td>'.$registro["cant_producto"].'</td>';
                                        echo '<td>'.$registro["total_venta"].'</td>';
                                        echo '<td class="tabla_opciones"><a href="editarEstudiante.php?id='.$registro["num_venta"].'">✍🏽</a> <a href="eliminarVenta.php?id='.$registro["num_venta"].'">🚮</a></td>';
                                        echo '<tr>';
                                    }
                                ?>
                                                
        
                        
                    </tbody>
            </table>
    
          </div>

    </section>
</body>
</html>