<?php 
    include('includes/db.php');
    
    $nombre = strtoupper($_POST["nombre"]);

    $categoria = strtoupper($_POST["categoria"]);
    $cantidad = $_POST["cantidad"];
    $pre_unitario = $_POST["pre_unitario"];
    $pre_total = ($pre_unitario*$cantidad);
    $hoy= date('Y-m-d');
    $imagen_producto = $_FILES['imagen_producto']['name'];
    $ruta = $_FILES['imagen_producto']['tmp_name'];
    $destino = "imagen/" . $imagen_producto;
    copy($ruta, $destino);

    $sql = "insert into inventario(nombre_producto,categoria,cantidad,precio_unitario,precio_total,fecha,imagen_producto)
        values('$nombre', '$categoria', ' $cantidad', ' $pre_unitario', ' $pre_total', ' $hoy', ' $destino')";
    
    if(DB::query($sql)){
        echo "Persona guardada correctamente";
    }else{
        echo "No se ha podido guardar la persona. ";
    } 
    header('Location: index.php');
?>