<?php

class Empleado {

	public static function crear($nombre, $correo) {
		$conexionBD=BD::crearInstancia();

		$insertar=$conexionBD->prepare("INSERT INTO empleados(nombre, correo) VALUES(?,?)");
		$insertar->execute(array($nombre,$correo));
	}
}

?>
