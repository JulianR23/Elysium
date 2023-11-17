<?php 
class DataBase{
    public static function connect(){
        //Creamos la conexion
        $conexion = new mysqli("localhost", "root", "", "elysium");
        // Para que la Base de datos venga codificada en UTF8
        $conexion->query("SET NAMES 'utf8'");
        return $conexion;
    }
}
?>