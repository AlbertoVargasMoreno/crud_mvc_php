<?php
$controlador="paginas";
$accion="inicio";

// si controlador y accion se les da un valor a través de GET, de lo contrario usar los valores definidos por defecto
if ( isset($_GET['controlador']) && isset($_GET['accion'])  ) {
	// si controlador no esta vacío y accion no vacia; se podrá if ( ($_get['controlador']) en lugar de la comparación
	if( ($_GET['controlador']!="") && ($_GET['accion']!="")) {
		$controlador=$_GET['controlador'];
		$accion=$_GET['accion'];
	}
}

  require_once('vistas/template.php');
?>
