<?php 
    include('includes/db.php');
    $sql = "select * from personas";
    $result = DB::query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Personas</title>
   
</head>
<body>
    <div>
        Listado de Personas <a href="crear.php">Nuevo</a>
    </div>
        <table style="width: 100%; border: 1px solid black">
            <tr>
                <td>Nombres</td>
                <td>Email</td>
                <td>Acciones</td>
            </tr>
            
            <?php while($mostrar=mysqli_fetch_array($result)){ ?>
                <tr>
                    <td><?= $mostrar['nombre'] ?></td>
                    <td><?= $mostrar['email'] ?></td>
                    <td><?= $mostrar['acciones'] ?></td>
                    
                </tr>
            <?php } ?>
        </table>
</body>
</html>