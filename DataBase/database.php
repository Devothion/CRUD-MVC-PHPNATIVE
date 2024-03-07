<?php 
class Conectar {
    public static function conexion() 
    {
        $conexion = new mysqli('localhost', 'root', '', 'mediweb', 3306);
        $conexion->query('SET NAMES "utf8"'); 
        return $conexion;
    }
};

?>