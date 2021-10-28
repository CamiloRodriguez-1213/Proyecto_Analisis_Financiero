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
    <title>Ventas</title>
    <?php include 'accesorios/navbar.php' ?>
    
</head>
<body>
<form action="#" class="form-inline my-2 my-lg-0" method="GET">
          <div class="row mr-2">
            <div class="input-group">
                <input  onchange="this.form.submit()" class="form-control" type="text" name="busqueda" id="busqueda" value="<?php if (isset($_GET['busqueda'])) { echo $_REQUEST['busqueda']; }?>"  placeholder="Busca tus productos">
                <input class="form-control" hidden type="text" name="pagina" id="pagina" value="1"  placeholder="Busca tus productos">
                <span class="input-group-append">
                    <button class="btn btn-outline-secondary" type="submit" >
                        <i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
          </div>
</form>
    <table style="width: 100%; height: 100px;" border cellpadding=10 cellspacing=0>
    <div class="row ">
                <button class="btn btn-success btn-sm" type="submit" onclick="agregar()">Nueva venta +</button>
            </div>
            <tr class="bg-dark" style="align-items: center; font-size: smaller; --bs-bg-opacity: .20;">
            <td>ID</td>
                <td>NOMBRE PRODUCTO</td>
                <td>CATEGORÍA</td>
                <td>PRECIO UNITARIO</td>
                <td>UNIDADES DISPONIBLES</td>
                <td>CANTIDAD ADQUIRIDA</td>
                <td>PRECIO TOTAL</td>     
                <td>ACCION</td>

            </tr>
            
            <?php

            if(isset($_GET['busqueda'])){
                if(empty($_GET['busqueda'])){
                }else{
                $buscar = $_GET['busqueda'];
                $sql= "SELECT * FROM inventario WHERE nombre_producto LIKE '%$buscar%'";
                $result = DB::query($sql);
               while($mostrar=mysqli_fetch_array($result)){ ?>
                        <tr style="font-size: small;">
                        <form action="actualizar_inventario.php" method="post">
                            <td><?= $mostrar['id'] ?></td>
                            <input hidden type="text" name="id" value="<?= $mostrar['id'] ?>">
                            <td><?= $mostrar['nombre_producto'] ?></td>
                            <td><?= $mostrar['categoria'] ?></td>
                            <td>$ <?= $mostrar['precio_unitario'] ?></td>
                            <td><?= $mostrar['cantidad'] ?></td>
                            <input hidden type="text" name="canmx" value="<?= $mostrar['cantidad'] ?>">
                            <td> 
                                <input type="number" name="cant" min=1 max="<?= $mostrar['cantidad'] ?>" value="<?php if(!isset($_GET['cant'])){echo '1';} ?>" >
                            
                        </td>
                            <td>$ <?= $mostrar['precio_total'] ?></td>
                            <td><button type="submit" class="btn btn-success btn-sm">+</button></td>
                        </tr>
                    </form>
                    
                    <div>
                
                <?php }
                

                }
            }

            
            ?>
          
        </table>
        
</body>
</html>