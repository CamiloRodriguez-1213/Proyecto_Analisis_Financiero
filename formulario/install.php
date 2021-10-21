<?php 
    if(isset($_POST["host"])){
        //Escribir en el archivo config las variables de conexión
        $file = fopen("includes/config.php", "w");

        fwrite($file, "<?php" . PHP_EOL);
        fwrite($file, "define('HOST', '" . $_POST['host'] ."');" . PHP_EOL);
        fwrite($file, "define('USER', '" . $_POST['user'] ."');" . PHP_EOL);
        fwrite($file, "define('PASSWORD', '" . $_POST['password'] ."');" . PHP_EOL);
        fwrite($file, "define('DB', '" . $_POST['db'] ."');" . PHP_EOL);
        fwrite($file, "?>");

        fclose($file);
        
        echo "Creando archivo de conexión";

        //Importando la base de datos
        $sql = file_get_contents('includes/db.sql');

        include('includes/db.php');

        if(DB::getConnection()->multi_query($sql)){
           //Se ejecuto la importación correctamente
           unlink('install.php');
           header('Location: index.php');
        }else{
            echo "No se ha podido importar la base de datos, verifique los errores";
        }
        
        die;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="css/styles_bd.css">
</head>
<body>
    <h1>Conexion BaseDatos:</h1>
    <form action="install.php" method="post">
    <div class="box">
    <div >
            <label for="host">Host</label>
            <input type="text" name="host" >
        </div>

        <div>
            <label for="user">Usuario DB</label>
            <input type="text" name="user" >
        </div>

        <div>
            <label for="password">Contrasña DB</label>
            <input type="text" name="password">
        </div>

        <div>
            <label for="db">Base de datos</label>
            <input type="text" name="db">
        </div>

        <button>Guardar</button>
    
    </div>
        
    </form>
</body>
</html>