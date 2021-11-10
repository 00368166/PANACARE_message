<?php
if (!empty($_GET['id'])) {
    require("../sesion.php");
    $id = $_GET['id'];
    $query_delete = mysqli_query($conexion, "DELETE FROM clientes WHERE clientes_id = $id");
    mysqli_close($conexion);
    header("location: clientes.php"); 
}
?>
