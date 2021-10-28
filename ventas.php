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
    <div class="row ">
                <button class="btn btn-success btn-sm" type="submit" onclick="window.location.href=''">Nueva venta +</button>
            </div>
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
                    
                </tr>
                <div>
            
            <?php } ?>
        </table>
        
</body>
</html>