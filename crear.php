<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .form-group{
            display: flex;
            flex-direction: column;
        }
    </style>
</head>
<body>
    <form action="guardar_persona.php" method="post">
        <div class="container"  style="height: 600px; width: 200px;">
        <div>
            <h3>INVENTARIO</h1>
        </div>
        <div class="form-group">
            <label for="">Nombre Producto</label>
            <input type="text" name="nombre">
        </div>

        <div class="form-group">
            <label for="">Categoria</label>
            <input type="text" name="categoria">
        </div>
        <div class="form-group">
            <label for="">Cantidad</label>
            <input type="text" name="cantidad">
        </div>
        <div class="form-group">
            <label for="">Precio Unitario</label>
            <input type="text" name="pre_unitario">
        </div>
        <div>
            <button type="submit">Guardar</button>
            <a href="index.php">Volver</a>
        </div>
        </div>
    </form>

</body>
</html>