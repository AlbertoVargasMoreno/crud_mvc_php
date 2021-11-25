<?php
class controladorPaginas{
	public function inicio(){
		// echo "i'll send you a page";
		include_once("vistas/paginas/inicio.php");
	}

	public function error(){
		include_once("vistas/paginas/error.php");
	}
}
?>
