<?php
if (!empty($_GET['id'])) {
    require("../sesion.php");
    $id = $_GET['id'];
    $query_delete = mysqli_query($conexion, "DELETE FROM enfermeras WHERE enfermeras_id = $id");
    mysqli_close($conexion);
    header("location: enfermeras.php");
}
?>
