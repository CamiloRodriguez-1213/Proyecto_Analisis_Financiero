<?php
include('includes/db.php');
$sql = "select * from inventario";
$result = DB::query($sql);


if (isset($_POST['cant'])) {
    $cant = $_POST['cant'];
    $canmx= $_POST['canmx'];
    $cantotal=$canmx-$cant;
    $id_producto=$_POST['id'];
    $sql = "UPDATE inventario set cantidad='$cantotal' WHERE id='$id_producto'";

    DB::query($sql);
    header('Location: ventas.php');
}
?>