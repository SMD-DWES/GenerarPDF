<?php

/**
 * Autor: Sergio Matamoros Delgado
 * Descripción: Muestra la lista de todos los empleados.
 */

require_once __DIR__."/../bd/database.php";

$bd = new Database();

$result = $bd->selectEmpleados();

//Iteramos sobre cada fila del result set
if($bd->numFilas($result) > 0) {
    echo "<table>";
    echo "<tr>";
    echo "<th>DNI</th>";
    echo "<th>Nombre</th>";
    echo "<th>Correo</th>";
    echo "<th>Teléfono</th>";
    echo "</tr>";
    while($fila = $bd->fetchArray($result))
    {
        echo "<tr>";
            echo "<td>".$fila["DNI"]."</td>";
            echo "<td>".$fila["Nombre"]."</td>";
            echo "<td>".$fila["Correo"]."</td>";
            echo "<td>".$fila["Tlfno"]."</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo 'No hay empleados disponibles...';
}