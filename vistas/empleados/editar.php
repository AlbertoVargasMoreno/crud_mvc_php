<?php 
    var_dump(
        $_REQUEST,
        $_GET,
        $_POST
    );
    [$empleado]=$empleados_array;
?>
<div class="card">
    <div class="card-header">
            Editar Empleado
    </div>
    <div class="card-body">
        <form action="" method="post">
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" name="nombre" id="" 
                    class="form-control" placeholder="" aria-describedby="helpId" 
                    value="<?php echo $empleado->nombre; ?>">
                <small id="helpId" class="text-muted">Help text</small>
            </div>
            <div class="mb-3">
                <label for="correo" class="form-label">Correo</label>
                <input type="text" name="correo" id="" 
                    class="form-control" placeholder="" aria-describedby="helpId" 
                    value="<?php echo $empleado->correo; ?>">
                <small id="helpId" class="text-muted">Help text</small>
            </div>
            <input name="" id="" class="btn btn-success" type="submit" value="Actualizar empleado">
        </form>
    </div>
</div>
