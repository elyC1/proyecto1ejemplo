<style>
    table{
        background-color: blue;
    }
</style>
<h1>Lista de usuarios</h1>
<table>
    <tr>
        <th>Nombre de usuario</th>
        <th>Contraseña</th>
        <th>Estatus</th>
        <th>Fecha de registro</th>
        <th>Opciones</th>
    </tr>
    <?php $__currentLoopData = $datos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fila): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($fila["username"]); ?></td>
            <td><?php echo e($fila->pass); ?></td>
            <td><?php echo e($fila["estatus"]); ?></td>
            <td><?php echo e($fila["created_at"]); ?></td>
            <td>
                <a href="<?php echo e(route('usuario.editar', $fila->id)); ?>">Editar</a>
                <form action="<?php echo e(route('usuario.eliminar', $fila->id)); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field("delete"); ?>
                    <input type="submit" value="Eliminar">
                </form>
                <a href="<?php echo e(route('usuario.baja', $fila->id)); ?>">Dar de baja</a>
            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table><?php /**PATH C:\xampp\htdocs\proyecto1\resources\views/lista_usuarios.blade.php ENDPATH**/ ?>