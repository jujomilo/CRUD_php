<?php 

// Verificar que nos lleganlas solicitudes vía GET  Solicitud  NO CONFUNDIR CON INSTANCIA $controlador
//echo $controlador; // controlador recibido por URL
//echo $accion;  // acción recibida por URL

//:::::::::::::DEFINIR ELL CONTROLADOR DE FORMA DINÁMICA::::::::::::::::::::::::::::::::
// cargamos el contorlador que llegue via GET
include_once("controladores/controlador_".$controlador.".php");  

// Componer el nombre d el ainstancia
$objControlador = "Controlador".ucfirst($controlador);  // = (NOMBRE DE LA CLASE) Controlador + Lo que venga en URL con la primera en mayúscula

// 2 instanciamos un Objeto de la clase que venga por URL que tenemos en el archivo controlador_paginas
$controlador = new $objControlador();  


//:::::::::::::DEFINIR LA ACCIÓN DE FORMA DINÁMICA::::::::::::::::::::::::::::::::::::::
//con esta instancia de la clase llamo al método inicio
$controlador->$accion();  // Se ejecuta la acción que se pieda por URL

?>