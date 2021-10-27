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
</head>
<body>
    <style>
        thead{
            font-size: medium;
            text-align: left;
        }
        tbody{
            font-size: small;
            border-top: solid 3px #000;
            border-bottom: 3px solid #000;
            text-align: left;
        }
        .cond {
        border-top: solid 2px #000;
        }
        .cond2 {
        border-bottom: solid 2px #000 !important;
        border-top: solid 2px #000 !important; 
        }
        
    </style>
        <div>
        <button  type="submit"><a href="index.php">Inicio</a></button>
        <button  type="submit"><a href="">Guardar</a></button>
            
        </div>
        <table style="width: 100%; height: 100px;" class="cond">
            <thead class="cond2">
                <th>ID</th>
                <th>NOMBRE PRODUCTO</th>
                <th>CATEGORÍA</th>
                <th>CANTIDAD</th>
                <th>PRECIO UNITARIO</th>
                <th>PRECIO TOTAL</th>
                <th>FECHA</th>
            </thead>
            <?php
            $con=0;$igual=0;$acum=0;$acm=0;$val=0;
            while($mostrar=mysqli_fetch_array($res)){
                $con++;?>
                <tbody>
                <tr class="cond2">
                    <td><?= $mostrar['id'] ?></td>
                    <td><?= $mostrar['nombre_producto'] ?></td>
                    <td><?= $mostrar['categoria'] ?></td>
                    <td><?= $mostrar['cantidad'] ?></td>
                    <td><?= $mostrar['precio_unitario'] ?></td>
                    <td><?= $mostrar['precio_total'] ?></td>
                    <td><?= $mostrar['fecha'] ?></td>
                </tr>
                <?php
                $acum=$acum+$mostrar['precio_total'];
                $val=(($mostrar['precio_unitario'])*0.19);
                $acm=($acm+$val);
                print_r($acm);
            }?>
                </tbody>
            <tfoot >
                <tr style="text-align: left;">
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th><br><br>IVA</th>
                    <td><br><br><?php  print_r($acm);?></td>
                </tr>
                <tr style="text-align: left;">
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th>TOTAL VENTAS</th>
                    <td><?php  print_r($acum+$acm);?></td>
                </tr>
            </tfoot>   
        </table>
        <div class="cond row">
        </div>
        
            
</body>
</html>