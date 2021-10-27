<?php 
    include('includes/db.php');
    $buscar=$_POST["fecha"];
    $sql = "SELECT * FROM inventario WHERE fecha ='$buscar'";
    $res = DB::query($sql);
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
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <div class="row ">
                <button class="btn btn-outline-secondary btn-sm" type="submit" onclick="window.location.href='nuevo_producto.php';">Nuevo producto +</button>
            </div>
            <form action="buscar_fecha.php" class="form-inline my-2 my-lg-0" method="post">
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
            </form>
        </div>
        </tr>
            <tr class="bg-secondary" style="--bs-bg-opacity: .15; align-items: center; font-size: smaller;">
                <td>ID</td>
                <td>NOMBRE PRODUCTO</td>
                <td>CATEGORÍA</td>
                <td>CANTIDAD</td>
                <td>PRECIO UNITARIO</td>
                <td>PRECIO TOTAL</td>
                <td>FECHA</td>
                
            </tr>
            <?php 
            $con=0;$igual=0;$acum=0;$acm=0;$val=0;
            while($mostrar=mysqli_fetch_array($res)){ 
                $con++;?>
                <tr style="font-size: smaller;">
                    <td><?= $mostrar['id'] ?></td>
                    <td><?= $mostrar['nombre_producto'] ?></td>
                    <td><?= $mostrar['categoria'] ?></td>
                    <td><?= $mostrar['cantidad'] ?></td>
                    <td><?= $mostrar['precio_unitario'] ?></td>
                    <td><?= $mostrar['precio_total'] ?></td>
                    <td><?= $mostrar['fecha'] ?></td>
                </tr>
                <div>
            
            <?php 
                $acum=$acum+$mostrar['precio_total'];
                $acm=($acm+$mostrar['precio_total']*0.19);
            } ?>

            <tfoot >
                <tr style="text-align: left; font-size: smaller;">
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th><br>IVA</th>
                    <td><br><?php  print_r($acm);?></td>
                </tr>
                <tr style="text-align: left; font-size: smaller;">
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th>TOTAL VENTAS</th>
                    <td><?php  print_r($acum+$acm);?></td>
                </tr>
            </tfoot>
            

        </table>
        
            
</body>
</html>