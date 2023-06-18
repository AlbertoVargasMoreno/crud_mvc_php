<!-- Esta es la tabla donde puedes ver la lista de empleados -->
<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($empleados as $empleado) { ?>
            <tr>
                <th> <?php echo $empleado->id; ?> </th>
                <th> <?php echo $empleado->nombre; ?> </th>
                <th> <?php echo $empleado->correo; ?> </th>
                <th>
                    <div>
		        <a href="?controlador=empleados&accion=editar&id=<?php echo $empleado->id; ?>" class="btn"> Editar </a>
			<a href="?controlador=empleados&accion=borrar&id=<?php echo $empleado->id; ?>" class="btn"> Borrar </a>
                    </div>
                </th>
            </tr>
        <?php } ?>
    </tbody>
    <a href="?controlador=empleados&accion=crear" class="btn btn-success"> Agregar Empleado </a>
</table>
