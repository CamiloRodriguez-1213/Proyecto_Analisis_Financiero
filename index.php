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

<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="https://http2.mlstatic.com/D_NQ_601588-MLA47967683664_102021-OO.webp" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://cdn2.hubspot.net/hubfs/3815039/Blog_GrupoBIT_1600x478px_29042020.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://cdn2.hubspot.net/hubfs/3815039/Blog_GrupoBIT_1600x478px_29042020.jpg" alt="Third slide">
    </div>
  </div>
</div>
    <div class="row justify-content-around sm-12 md-4">
        <?php while($mostrar=mysqli_fetch_array($result)){?>
            <div class="col">
                <div>
                <div class="card" style="width: 14rem;">
                <?php echo '<img  class="img1 " src ="'.$mostrar['imagen_producto'].'" width="100%" height="100%">' ?>
                        <div class="card-body">
                            <h4><?= $mostrar['nombre_producto'] ?></h4>
                            <h4><small>$<?= $mostrar['precio_unitario'] ?></small></h4>
                            <p class="card-text"> Especificacion.</p>
                        </div>
                    </div>
                </div>
                </div>
        <?php } ?>
    </div>
</body>
</html>