<?php

// Analizar si existe alguna petición vía GET del usuario
if( isset($_GET['controlador']) && isset($_GET['accion']) )
{
   // Si me llega el string "controlador", lo guardo en una variable del mismo nombre
   $controlador = $_GET['controlador'];
   // Si me llega el string "accion", lo guardo en una variable del mismo nombre
   $accion = $_GET['accion'];

   // depuración imprimo en pantalla qué me está llegando
   //print_r($_GET);
}


 require_once("vistas/template.php");
 ?>