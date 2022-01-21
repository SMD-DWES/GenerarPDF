<?php
require_once __DIR__."/operaciones.php";
/**
 * Autor: Sergio Matamoros Delgado
 */
class Database extends Operaciones
{
    private $mysql = null;
    function __construct()
    {
        //Recogemos el objeto que representa la conexión a la B.D y lo utilizamos en el
        //contexto de esta clase
        $this->mysql = $this->inicioBD();        
    }    

    function selectEmpleados() 
    {
        $sql = 'SELECT DNI, Nombre, Correo, Tlfno FROM empleados';
        $query = $this->querySelect($sql);

        //Si hay un error lo muestro
        if(!$query) echo $this->mysql->errno;
        else return $query;
    } 
}
