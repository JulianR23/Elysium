<?php
    include_once("../models/Conexion.php");
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $Id = isset($_POST['id']) ? $_POST['id'] : false;
        $contrasena = isset($_POST['contrasena']) ? $_POST['contrasena'] : false;
        $Nombre = isset($_POST['NombreUsuario']) ? $_POST['NombreUsuario'] : false;
        $Telefono = isset($_POST['telefono']) ? $_POST['telefono'] : false;
        $Correo = isset($_POST['Correo']) ? $_POST['Correo'] : false;
        if($Id && $contrasena && $Nombre && $Telefono && $Correo){

            $Id = $_POST['id'];
            $Nombre = $_POST['NombreUsuario'];
            $Telefono = $_POST['telefono'];
            $Correo = $_POST['Correo'];
            $Contrasena = $_POST['contrasena'];

            $sql = "UPDATE usuario SET ID ='$Id', NOMBRE ='$Nombre', TELEFONO = '$Telefono', CORREO = '$Correo', CONTRASENA = '$Contrasena' WHERE ID = '$Id';";

            $query = mysqli_query($conexion, $sql);
            
            if($query){
                header('Location: AdminUsuarios.php');
            }
        }
    }
?>
