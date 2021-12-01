<?php

include_once("conexion.php");
BD::crearInstancia();

class controladorEmpleados{
	public function inicio(){
		// echo "estoy en empleados/inicio";
		include_once("vistas/empleados/inicio.php");
	}

	public function crear(){
		if ($_POST) {
			print_r($_POST);
		}

		include_once("vistas/empleados/crear.php");
	}

	public function editar(){
		include_once("vistas/empleados/editar.php");
	}
}
?>
