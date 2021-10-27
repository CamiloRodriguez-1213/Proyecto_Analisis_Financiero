<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Personas</title>
    <?php include 'accesorios/navbar.php' ?>
</head>
<body>
    <div class="container bg-secondary" style="--bs-bg-opacity: .1; max-width: 500px;" >
    
        <form action="guardar_producto.php" method="post" enctype="multipart/form-data">
            
            <div class="container my-2" style="height: 500px; width: 400px;">
            <div>
            <br><br><br>
                <h3>Nuevo Producto</h1><br>
            </div>
            <div class="form-group">
                <label for="">Nombre Producto</label><br>
                <input type="text" name="nombre">
            </div>

            <div class="form-group">
                <label for="">Categoria</label><br>
                <input type="text" name="categoria"><br>
            </div>
            <div class="form-group">
                <label for="">Cantidad</label><br>
                <input type="text" name="cantidad"><br>
            </div>
            <div class="form-group">
                <label for="">Precio Unitario</label><br>
                <input type="text" name="pre_unitario"><br>
            </div>
            <div class="form-group">
                <label for="">Imagen Producto</label><br>
                <input required type="file" name="imagen_producto" accept="image/*"/><br><br>
            </div>
            <div>
                <button type="submit">Guardar</button>
                <a href="index.php">Volver</a>
            </div>
            </div>
        </form>
    </div>

</body>
</html>