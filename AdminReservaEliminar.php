<?php
    include_once('../models/Conexion.php');
    $id = $_REQUEST['Id'];
    $sql = "DELETE FROM usuario where ID = '$id'";
    $query = mysqli_query($conexion, $sql);

    if($query){
        header('Location: AdminReserva.php');
    }
?>