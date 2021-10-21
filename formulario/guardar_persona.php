<?php 
    include('includes/db.php');
    
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];

    $sql = "insert into personas(nombres,email) 
        values('$nombre', '$email')";
    
    if(DB::query($sql)){ //if($con->query($query) == true)
        echo "Persona guardada correctamente";
    }else{
        echo "No se ha podido guardar la persona. " . $con->error;
    } 

    header('Location: index.php');
?>