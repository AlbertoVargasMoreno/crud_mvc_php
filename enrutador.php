<?php
// echo "in the router";
// esto antes era
// include_once("controladores/controlador_controlador.php");
// ahora es
include_once("controladores/controlador_".$controlador.".php");

// upper case first para el nombre
$nombreDeLaClase="controlador".ucfirst($controlador);
$controlador= new $nombreDeLaClase();
$controlador->$accion();
?>
