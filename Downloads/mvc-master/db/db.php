<?php
class Conectar{
    public static function conexion(){
        $conexion=new mysqli("remotemysql.com", "RznufuIQQj", "7CrmrZQf52", "RznufuIQQj");
        $conexion->query("SET NAMES 'utf8'");
        return $conexion;
    }
}
?>
