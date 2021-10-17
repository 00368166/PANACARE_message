<?php
if (!empty($_GET['id'])) {
    require("../sesion.php");
    $id = $_GET['id'];
    $query_delete = mysqli_query($conexion, "DELETE FROM message WHERE message_id = $id");
    mysqli_close($conexion);
    header("location: messages.php");
}
?>
