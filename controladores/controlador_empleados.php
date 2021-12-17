<?php

include_once("modelos/empleado.php");
include_once("conexion.php");
BD::crearInstancia();

class controladorEmpleados{
	public function inicio(){
		$empleados=Empleado::consultar();
		include_once("vistas/empleados/inicio.php");
	}

	public function crear(){
		if ($_POST) {
			print_r($_POST);
			$nombreRecibido=$_POST['nombre'];
			$correoRecibido=$_POST['correo'];
			Empleado::crear($nombreRecibido,$correoRecibido);
		}

		include_once("vistas/empleados/crear.php");
	}

	public function editar(){
		include_once("vistas/empleados/editar.php");
	}
}
?>
