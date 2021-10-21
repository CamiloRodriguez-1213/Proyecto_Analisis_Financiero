<?php
    include('includes/db.php');

    if(isset($_GET['id']) == false){
        echo "Es necesario enviar un id";
        die;
    }

    $id = $_GET['id'];

    $sql = "select * from personas where id = $id";

    $persona = DB::query($sql);

    $persona = mysqli_fetch_object($persona);

    //if($persona == false){
    if(!$persona){
        echo "El usuario no existe";
        die;
    }

?>

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
        <div>
            <h3>Editar Usuarios </h1>
        </div>
        <div class="form-group">
            <label for="">Nombre</label>
            <input type="text" name="nombre" value="<?= $persona->nombres ?>">
        </div>

        <div class="form-group">
            <label for="">Email</label>
            <input type="text" name="email" value="<?= $persona->email ?>">
        </div>

        <div>
            <button type="submit">Guardar</button>
            <a href="index.php">Volver</a>
        </div>
    </form>

</body>
</html>