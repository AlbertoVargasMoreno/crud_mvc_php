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
			header("Location: ./?controlador=empleados&accion=inicio"); 
		}

		include_once("vistas/empleados/crear.php");
	}

	public function editar(){
		include_once("vistas/empleados/editar.php");
		if ($_GET) {
			//var_dump( $_GET );
			$id=$_GET['id'];
			$respuesta=Empleado::editar($id);
			var_dump( $respuesta );
		}
	}

	public function borrar(){
		if ($_GET) {
//			var_dump($_GET);
			$id=$_GET['id'];
			Empleado::borrar($id);
			header("Location: ./?controlador=empleados&accion=inicio"); 
		}
	}
}
?>
