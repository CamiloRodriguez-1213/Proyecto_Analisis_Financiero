<?php 
    include('includes/db.php');
    
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $accion = $_POST["acciones"];

    $sql = "insert into personas(nombre,email,acciones)
        values('$nombre', '$email', ' $accion')";
    
    if(DB::query($sql)){
        echo "Persona guardada correctamente";
    }else{
        echo "No se ha podido guardar la persona. " . $con->error;
    } 

    header('Location: index.php');
?>