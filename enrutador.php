<?php
echo $controlador;
echo $accion;
// echo "in the router";
// esto antes era
// include_once("controladores/controlador_controlador.php");
// ahora es
include_once("controladores/controlador_".$controlador.".php");

// $controlador= new controladorPaginas();
$controlador->inicio();
?>
