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
 
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://http2.mlstatic.com/D_NQ_906940-MLA47810670488_102021-OO.webp" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="https://http2.mlstatic.com/D_NQ_601588-MLA47967683664_102021-OO.webp" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="https://http2.mlstatic.com/D_NQ_914175-MLA47967683904_102021-OO.webp" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>



    <div class="row justify-content-around sm-12 md-4">
        <?php while ($mostrar = mysqli_fetch_array($result)) { ?>
            <div class="col">
                <button class="btn">
                    <div class="card" style="width: 14rem;">
                        <?php echo '<img  class="img1 " src ="' . $mostrar['imagen_producto'] . '" width="100%" height="100%">' ?>
                        <div class="card-body">
                            <h4><?= $mostrar['nombre_producto'] ?></h4>
                            <h4><small>$<?= $mostrar['precio_unitario'] ?></small></h4>
                            <p class="card-text"> Especificacion.</p>
                            <input type="text" hidden id="ver_producto" name="ver_producto" value="<?php echo $mostrar['id'] ?>">
                        </div>
                    </div>
                </button>
            </div>
        <?php } ?>
    </div>
</body>

</html>