<!-- Esta es la tabla donde puedes ver la lista de empleados -->
<div class="row justify-content-end g-2">
    <div class="col-4">
        <a href="?controldaor=paginas&accion=inicio" class="btn btn-success"> Ir a Inicio </a>
        <a href="?controlador=empleados&accion=crear" class="btn btn-success"> Agregar Empleado </a>
    </div>
</div>
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
                        <a href="?controlador=empleados&accion=editar&id=<?php echo $empleado->id; ?>" 
                            class="btn"> 
                            Editar 
                        </a>
                        <a href="?controlador=empleados&accion=borrar&id=<?php echo $empleado->id; ?>" 
                            class="btn"> 
                            Borrar 
                        </a>
                    </div>
                </th>
            </tr>
        <?php } ?>
    </tbody>
</table>
