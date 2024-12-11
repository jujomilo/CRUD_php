<?php 

// 1 incluimos nuestro controlador
include_once("controladores/controlador_paginas.php");

// 2 instanciamos un Objeto de la clase ControladorPaginas que tenemos en el archivo controlador_paginas
$controlador = new ControladorPaginas();

//con esta instancia de la clase llamo al método inicio
$controlador->inicio();

?>