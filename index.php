<?php

/**
 * Autor: Sergio Matamoros Delgado
 * Descripción: Genera un PDF con los datos seleccionados de la B.D
 */

 
//Use devuelve un array con los nombres de los "traits" que usa la clase.
//Un trait es similar a una clase, con la diferencia de que esta agrupa funcionalidades
//especificas para poder reutilizar código de una manera sencilla.
//Los traits no se pueden instanciar directamente.
use Dompdf\Dompdf;

//Utilizamos una librería externa para generar un PDF
require_once "librerias/dompdf/autoload.inc.php";
$pdf = new Dompdf();

//Si devolvierá algun error utilizar ob_start();

//Incluimos el fichero
include "public/listaEmpleados.php";

//Carga el HTML maquetandolo
//Y carga el contenido del buffer de entrada.
$pdf->loadHtml(ob_get_clean());

//Carga el HTML a través de un fichero sin necesidad de maquetar aquí.
//(investigar como funciona, ya que todavía da algunos errores)
//$pdf->loadHtmlFile(ob_get_clean());

$pdf->render();

//Especificamos que es un aplicación de tipo PDF para que el navegador sea capaz de mostrarala.
header("Content-type: application/pdf");
//y le especificamos un nombre por si el usuario quiere descargarlo.
header("Content-Disposition: inline; filename=empleados.pdf");

//Mostramos el PDF en el navegador directamente
echo $pdf->output();