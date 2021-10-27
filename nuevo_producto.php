<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <title>Document</title>

    <style>
        .form-group{
            display: flex;
            flex-direction: column;
        }
    </style>
</head>
<body>
    <div class="container">
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
    </div>

</body>
</html>