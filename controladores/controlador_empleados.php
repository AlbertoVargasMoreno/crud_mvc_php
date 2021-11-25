<?php
class controladorEmpleados{
	public function inicio(){
		// echo "estoy en empleados/inicio";
		include_once("vistas/empleados/inicio.php");
	}

	public function crear(){
		include_once("vistas/empleados/crear.php");
	}

	public function editar(){
		include_once("vistas/empleados/editar.php");
	}
}
?>
