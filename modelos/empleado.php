<?php
/*
echo "hola";
var_dump("funciona?");
var_dump(Empleado::consultar());
$emp = new Empleado(1,'miguel','mig@mail.com');
$respuesta = $emp->consultar();
var_dump($respuesta);
var_dump( $emp->editar(1));
*/

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
		//var_dump( $id ); die();
		$conexionBD=BD::crearInstancia();

		// $consultar=$conexionBD->prepare("SELECT * FROM empleados WHERE id=?");
		// $consultar->execute(array($id));
		// var_dump($consultar->fetchAll());
		// die();
		// $row = $consultar->fetchAll();
		// return $row;
//		$resultado = $consultar->fetchAll();
//		var_dump( $resultado );

		//$insertar=$conexionBD->prepare("INSERT INTO empleados(nombre, correo) VALUES(?,?)");
		//$insertar->execute(array($nombre,$correo));
		$editar=$conexionBD->prepare("UPDATE empleados SET nombre=?, correo=? WHERE id=?");
		$editar->execute(array($nuevo_nombre,$nuevo_correo,$id));

		$consultar=$conexionBD->prepare("SELECT * FROM empleados WHERE id=?");
		$consultar->execute(array($id));
		// var_dump($consultar->fetchAll());
		foreach($consultar->fetchAll() as $empleado) {
			$listaEmpleados[]= new Empleado($empleado['id'],$empleado['nombre'],$empleado['correo']);
		}
		return $listaEmpleados;
	}
}

?>
