<?php 
    include('includes/db.php');
    
    $nombre = strtoupper($_POST["nombre"]);

    $categoria = strtoupper($_POST["categoria"]);
    $cantidad = $_POST["cantidad"];
    $pre_unitario = $_POST["pre_unitario"];
    $pre_total = ($pre_unitario*$cantidad);
    $hoy= date('Y-m-d');
    $imagen_producto=addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

    $sql = "insert into inventario(nombre_producto,categoria,cantidad,precio_unitario,precio_total,fecha)
        values('$nombre', '$categoria', ' $cantidad', ' $pre_unitario', ' $pre_total', ' $hoy')";
    
    if(DB::query($sql)){
        echo "Persona guardada correctamente";
    }else{
        echo "No se ha podido guardar la persona. " . $con->error;
    } 

    header('Location: index.php');
?>