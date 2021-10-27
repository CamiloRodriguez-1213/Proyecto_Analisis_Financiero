<?php
include('includes/db.php');

$sql = "select * from inventario";

$result = DB::query($sql);

$mes_actual = date('M');
$dia_actual = date('D');


$res = DB::query($sql);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Personas</title>
    <?php include 'accesorios/navbar.php' ?>
     
    
    
    <?php
    
    function imp($sql)
    {
        $result = DB::query($sql);
        while ($mostrar = mysqli_fetch_array($result)) {
        ?>
            <tr style="font-size: small;">
                <td><?= $mostrar['id'] ?></td>
                <td><?= $mostrar['nombre_producto'] ?></td>
                <td><?= $mostrar['categoria'] ?></td>
                <td><?= $mostrar['cantidad'] ?></td>
                <td>$ <?= $mostrar['precio_unitario'] ?></td>
                <td>$ <?= $mostrar['precio_unitario'] * $mostrar['cantidad']  ?></td>
                <td>$ <?= ($mostrar['precio_unitario'] * 0.19) + $mostrar['precio_unitario']  ?></td>
                <td>$ <?= ($mostrar['precio_unitario'] * 0.19 + $mostrar['precio_unitario']) * $mostrar['cantidad'] ?></td>
                <td><?= $mostrar['fecha'] ?></td>
            </tr>
    <?php
        }
    }
    
    ?>
</head>

<body>
    <table style="width: 100%; height: 100px;" border cellpadding=10 cellspacing=0>
        <tr>
            <form action="" method="get">
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    
                    <div class="row mr-2">
                        <div class="input-group">
                            
                        <select name="dia" onchange="this.form.submit()" class="custom-select" id="inputGroupSelect04">
                            <option selected>Día...</option>
                            <?php 
                            $sql = "SELECT * FROM dias";
                            $result = DB::query($sql);
                            while ($mostrar = $result->fetch_assoc()) { ?>
									<option value="<?php echo $mostrar['id'];?>"><?php echo $mostrar['dia'];?></option>
								<?php } ?>
                        </select>
                        
                        </div>
                    </div>
                    <div class="row mr-2">
                        <div class="input-group">
                            
                        <select name="mes" onchange="this.form.submit()" class="custom-select" id="inputGroupSelect04">
                            <option selected>Meses...</option>
                            <?php 
                            $sql = "SELECT * FROM meses";
                            $result = DB::query($sql);
                            while ($mostrar = $result->fetch_assoc()) { ?>
									<option value="<?php echo $mostrar['id'];?>"><?php echo $mostrar['mes'];?></option>
								<?php } ?>
                        </select>
                        
                        </div>
                    </div>
                    <div class="row mr-2">
                        <div class="input-group">
                            
                        <select name="year" onchange="this.form.submit()" class="custom-select" id="inputGroupSelect04">
                            <option selected>Año...</option>
                            <?php 
                            $sql = "SELECT * FROM anios";
                            $result = DB::query($sql);
                            while ($mostrar = $result->fetch_assoc()) { ?>
									<option value="<?php echo $mostrar['id'];?>"><?php echo $mostrar['anio'];?></option>
								<?php } ?>
                        </select>
                        
                        </div>
                    </div>
                    <span class="py-1">Filtrar por Fecha</span>
                    <div class="row mr-2">
                        <div class="input-group">
                            <input class="form-control" type="date" name="fecha">
                            <span class="input-group-append">

                            </span>
                            <button class="btn btn-outline-secondary" type="submit">
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
        
        <tr>
        <?php
            if(isset($_GET["dia"]) && isset($_GET["dia"])!=""){
                $dia=$_GET["dia"];
                $sq= "SELECT * FROM inventario WHERE DAY(fecha)=$dia";
                imp($sq);
            }
            if(isset($_GET["mes"]) && isset($_GET["dia"])!=""){
                $mes=$_GET["mes"];
                $sq= "SELECT * FROM inventario WHERE MONTH(fecha)=$mes";
                imp($sq);
                
            }
            if(isset($_GET["year"]) && isset($_GET["dia"])!=""){
                $anio=$_GET["year"];
                $sq= "SELECT * FROM inventario WHERE YEAR(fecha)=2021";
                imp($sq);
                
                
            }
            
            
        ?>
        </tr>


    </table>
    <div class="row ">
        <button class="btn btn-success btn-sm" type="submit" onclick="window.location.href='nuevo_producto.php';">Nuevo producto +</button>
    </div>
</body>

</html>