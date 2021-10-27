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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <nav style="background-color: yellow;" class="navbar navbar-expand-lg navbar-light sticky-top row-12 sm-12 md-4">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Features</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Pricing</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#">Disabled</a>
                
            </li>
            <li>
                
            </li>
            </ul>
        </div>
    </nav>
    
</head>
<body>
    
        <table style="width: 100%; height: 100px;" border cellpadding=10 cellspacing=0>
        <tr>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <div class="row ">
                <button class="btn btn-outline-secondary btn-sm" type="submit" onclick="window.location.href='crear.php';">Nuevo producto +</button>
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
            <tr style="align-items: center; background-color: yellow; font-size: smaller;">
                <td>ID</td>
                <td>NOMBRE PRODUCTO</td>
                <td>CATEGORÍA</td>
                <td>CANTIDAD</td>
                <td>PRECIO UNITARIO</td>
                <td>PRECIO TOTAL</td>
                <td>FECHA</td>
                
            </tr>
            <?php while($mostrar=mysqli_fetch_array($result)){ ?>
                <tr style="font-size: small;">
                    <td><?= $mostrar['id'] ?></td>
                    <td><?= $mostrar['nombre_producto'] ?></td>
                    <td><?= $mostrar['categoria'] ?></td>
                    <td><?= $mostrar['cantidad'] ?></td>
                    <td><?= $mostrar['precio_unitario'] ?></td>
                    <td><?= $mostrar['precio_total'] ?></td>
                    <td><?= $mostrar['fecha'] ?></td>
                </tr>
                <div>
            
            <?php } ?>

            
            

        </table>
</body>
</html>