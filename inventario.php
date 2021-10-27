<?php 
    include('includes/db.php');

    $sql = "select * from inventario";
    
    $result = DB::query($sql);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Personas</title>
    <?php include 'accesorios/navbar.php' ?>
    
</head>
<body>
    <table style="width: 100%; height: 100px;" border cellpadding=10 cellspacing=0>
        <tr>
            <form action="buscar_fecha.php" method="POST">
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                
                <span class="py-1">Filtrar por día</span>
                    <div class="row mr-2">
                        <div class="input-group">
                            <input class="form-control" type="number" name="dia" value="1" min="1" max="31">
                            <span class="input-group-append">
                                
                            </span>
                        </div>
                    </div>    
                <span class="py-1">Filtrar por Mes</span>
                    <div class="row mr-2">
                        <div class="input-group">
                            <input class="form-control" type="number" name="mes" value="1" min="1" max="12">
                            <span class="input-group-append">
                                
                            </span>
                        </div>
                    </div>    
                <span class="py-1">Filtrar por Año</span>
                    <div class="row mr-2">
                        <div class="input-group">
                            <input class="form-control" type="number" name="anio" value="2021" min="1" max="2021">
                            <span class="input-group-append">
                                
                            </span>
                        </div>
                    </div>    
                <span class="py-1">Filtrar por Fecha</span>
                    <div class="row mr-2">
                        <div class="input-group">
                            <input class="form-control" type="date" name="fecha">
                            <span class="input-group-append">
                                
                            </span>
                            <button class="btn btn-outline-secondary" type="submit" >
                                    <i class="fa fa-search"></i>
                                </button>
                        </div>
                    </div>    
            </div>
            
        </form>
        </tr>
            <tr class="bg-dark" style="align-items: center; font-size: smaller; --bs-bg-opacity: .20;">
            <td>ID</td>
                <td>NOMBRE PRODUCTO</td>
                <td>CATEGORÍA</td>
                <td>CANTIDAD</td>
                <td>PRECIO UNITARIO</td>
                <td>PRECIO TOTAL</td>
                <td> IVA (19%)</td>  
                <td>PRECIO TOTAL+IVA</td>             
                <td>FECHA</td>
                
            </tr>
            <?php while($mostrar=mysqli_fetch_array($result)){ ?>
                <tr style="font-size: small;">
                    <td><?= $mostrar['id'] ?></td>
                    <td><?= $mostrar['nombre_producto'] ?></td>
                    <td><?= $mostrar['categoria'] ?></td>
                    <td><?= $mostrar['cantidad'] ?></td>
                    <td>$ <?= $mostrar['precio_unitario'] ?></td>
                    <td>$ <?= $mostrar['precio_unitario'] * $mostrar['cantidad']  ?></td>
                    <td>$ <?= ($mostrar['precio_unitario']* 0.19) + $mostrar['precio_unitario']  ?></td>                  
                    <td>$ <?=($mostrar['precio_unitario']* 0.19 + $mostrar['precio_unitario']) * $mostrar['cantidad'] ?></td>  
                    <td><?= $mostrar['fecha'] ?></td>
                </tr>
                <div>
            
            <?php } ?>
        </table>
        <div class="row ">
                <button class="btn btn-success btn-sm" type="submit" onclick="window.location.href='nuevo_producto.php';">Nuevo producto +</button>
            </div>
</body>
</html>