<?php

if ( isset($_GET['controlador']) && isset($_GET['accion'])  ) {
	$controlador=$_GET['controlador'];
	$accion=$_GET['accion'];
	// cuando: localhost/sistema/?controlador=paginas&accion=inicio
	// controlador = paginas; accion=inicio; 
	// Array ( [controlador] => manda [accion] => nudes )
	// print_r($_GET);
}
/* comentario */
  require_once('vistas/template.php');
?>
