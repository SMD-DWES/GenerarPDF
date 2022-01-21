<?php

require_once __DIR__."/../config_bd.php";

/**
 * Autor: Sergio Matamoros Delgado
 */
class Operaciones
{
    //creamos una variable privada para el contexto de esta clase.
    private $mysql = null;

    function inicioBD()
    {
        //Devolvemos la variable $mysql
        return $this->mysql = new mysqli(MYSQL_HOST,MYSQL_USERNAME,MYSQL_PASSWORD,MYSQL_DATABASE);
    }

    function querySelect($sql) {
        return $this->mysql->query($sql);
    }
    function fetchArray($resultado) {
        return $resultado->fetch_array(MYSQLI_ASSOC);
    }
    function numFilas($resultado){
        return $resultado->num_rows;
    }
}
