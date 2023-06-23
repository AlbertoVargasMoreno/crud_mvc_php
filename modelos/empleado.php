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

	public static function consultar($id = null) {
		$listaEmpleados=[];
		$conexionBD=BD::crearInstancia();
		if ($id) {
			$select=$conexionBD->prepare("SELECT * FROM empleados WHERE id=?");
			$select->execute(array($id));

		} else {
			$select=$conexionBD->query("SELECT * FROM empleados");
		}
		
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

	public static function editar($nuevo_nombre,$nuevo_correo,$id) {
		$conexionBD=BD::crearInstancia();

		$editar=$conexionBD->prepare("UPDATE empleados SET nombre=?, correo=? WHERE id=?");
		$editar->execute(array($nuevo_nombre,$nuevo_correo,$id));
	}
}

?>
