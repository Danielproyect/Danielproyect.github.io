<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COINVENT</title>
    <link rel="stylesheet" href="estilos.css">
    <link rel="icon" type="image/x-icon" href="imagenes/coinventico.png">
</head>
<body>
    <header> 
<nav class="menu"> 
<ul>
    <li class="navegacion_li"> <a href="proveedores.php"> Proveedores</a> </li>
    <li class="navegacion_li"> <a href="productos.php"> Productos</a> </li>
    <li class="navegacion_li"> <a href="ventas.php">Ventas</a> </li>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</ul>

</nav>
     
    </header>

    <section class="contenedor_formulario">
        <h2>Formulario Productos</h2>
        <form action="insertarproducto.php" method="post">
   
            <div class="nombre_proveedor">
               <input type="text" required name="nompro">
               <label>Nombre del Producto</label>
   
           </div>
   
           <div class="telefono">
               <input type="text" required name="date">
               <label>Fecha de vencimiento</label>
   
           </div>
             
           <div class="nombre_producto">
            <input type="number" required name="precio">
            <label>Precio</label>

        </div>

           <div class="nombre_producto">
               <input type="text" required>
               <label>ID del Proveedor</label>
   
           </div>
             
           <input type="submit" value="Registrar"  >
        </form>
    </section>

    <section class="contenedor_tabla">
        <div class="col-md-8">
            <table class="table" >
                <thead class="table-success table-striped" >
                    <tr>
                        <th>ID </th>
                        <th>Nombre</th>
                        <th>Vencimiento</th>
                        <th>Precio</th>
                        <th>ID_Proveedor</th>
                        <th>OPCIONES</th>
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
                                    $query = "select id_producto, nombre_producto, fecha_vencimiento, precio, id_proveedor from productos";
                                    
                                    $resultado = $conn->query($query);
        
                                    $n_reg = $resultado->num_rows;
        
                                    for($j = 0; $j < $n_reg; ++$j)
                                    {
                                        $resultado->data_seek($j);
                                        $registro = $resultado->fetch_assoc();
                                        echo '<tr>';
                                        echo '<td>'.$registro["id_producto"].'</td>';
                                        echo '<td>'.$registro["nombre_producto"].'</td>';
                                        echo '<td>'.$registro["fecha_vencimiento"].'</td>';
                                        echo '<td>'.$registro["precio"].'</td>';
                                        echo '<td>'.$registro["id_proveedor"].'</td>';
                                        echo '<td class="tabla_opciones"><a href="editarProducto.php?id='.$registro["id_producto"].'">✍🏽</a> <a href="eliminarProducto.php?id='.$registro["id_producto"].'">🚮</a></td>';
                                        echo '<tr>';
                                    }
                                ?>
                                                
        
                        
                    </tbody>
            </table>
    
          </div>

    </section>
</body>
</html>