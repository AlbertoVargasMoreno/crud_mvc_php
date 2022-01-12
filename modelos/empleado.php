<?php

class Empleado {

	public $id;
	public $nombre;
	public $correo;

	public function __construct($arg1, $arg2, $arg3) {
		$this->id=$arg1;
		$this->nombre=$arg2;
		$this->correo=$arg3;
	}

	public static function consultar() {
		$listaEmpleados=[];
		$conexionBD=BD::crearInstancia();
		$select=$conexionBD->query("SELECT * FROM empleados");

		foreach($select->fetchAll() as $empleado) {
			$listaEmpleados[]= new Empleado($empleado['id'],$empleado['nombre'],$empleado['correo']);
		}
		return $listaEmpleados;
	}

	public static function crear($nombre, $correo) {
		$conexionBD=BD::crearInstancia();

		$insertar=$conexionBD->prepare("INSERT INTO empleados(nombre, correo) VALUES(?,?)");
		$insertar->execute(array($nombre,$correo));
	}

	public static function borrar($id) {
		$conexionBD=BD::crearInstancia();

		$borrar=$conexionBD->prepare("DELETE FROM empleados WHERE id=?");
		$borrar->execute(array($id));
	}
}

?>
