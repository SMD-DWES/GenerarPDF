<?php
/**
 * Autor: Sergio Matamoros Delgado
 * Descripción: Muestra la lista de todos los empleados.
 */


require_once __DIR__."/../bd/database.php";


//INCLUIR CSS
//Esto será capaz de incluir el estilo del CSS dentro del PDF
echo "<style>";
    //Utilizamos include y no require porque no queremos que si hay un error en el archivo
    //nos muestre el mismo.
    include "css/estilo.css";
echo "</style>";
//FIN CSS

$bd = new Database();

$result = $bd->selectEmpleados();

echo "<h1>Impreso de la lista de empleados</h1>";

//Comprobamos que existan los empleados antes de imprimirlos...
if($bd->numFilas($result) > 0) {
    echo "<table>";
    echo "<tr>";
    echo "<th>DNI</th>";
    echo "<th>Nombre</th>";
    echo "<th>Correo</th>";
    echo "<th>Teléfono</th>";
    echo "<th>Contraseña</th>";
    echo "</tr>";
    //Iteramos sobre cada fila del result set
    while($fila = $bd->fetchArray($result))
    {
        echo "<tr>";
            echo "<td>".$fila["DNI"]."</td>";
            echo "<td>".$fila["Nombre"]."</td>";
            echo "<td>".$fila["Correo"]."</td>";
            echo "<td>".$fila["Tlfno"]."</td>";
            echo "<td>".$fila["pw"]."</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo 'No hay empleados disponibles...';
}
?>