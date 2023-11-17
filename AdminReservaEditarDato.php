<?php
    include_once("../models/Conexion.php");
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $Id = isset($_POST['id']) ? $_POST['id'] : false;
        $Precio = isset($_POST['precio']) ? $_POST['precio'] : false;
        $FechaInicio = isset($_POST['FechaInicio']) ? $_POST['FechaInicio'] : false;
        $FechaFinal = isset($_POST['FechaFinal']) ? $_POST['FechaFinal'] : false;
        $IDUsur = isset($_POST['IDUsur']) ? $_POST['IDUsur'] : false;
        if($Id && $Precio && $FechaInicio && $FechaFinal && $IDUsur){

            $Id = $_POST['id'];
            $Precio = $_POST['Precio'];
            $FechaInicio = $_POST['FechaInicio'];
            $CorrFechaFinaleo = $_POST['FechaFinal'];
            $IDUsur = $_POST['IDUsur'];

            $sql = "UPDATE usuario SET ID ='$Id', Precio ='$Precio', FechaInicio = '$FechaInicio', FechaFinal = '$FechaFinal', IDUsur = '$IDUsur' WHERE ID = '$Id';";

            $query = mysqli_query($conexion, $sql);
            
            if($query){
                header('Location: AdminReserva.php');
            }
        }
    }
?>
