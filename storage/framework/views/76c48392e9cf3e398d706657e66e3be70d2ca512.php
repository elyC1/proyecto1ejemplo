<form action="<?php echo e(route('usuario.actualizar', $id)); ?>" method="POST">
    <h1>Editar datos de usuario</h1>
    <?php echo csrf_field(); ?>
    <?php echo method_field("put"); ?>
    <label for="">Nombre de usuario</label>
    <input value="<?php echo e($id->username); ?>" type="text" name="username"> <br>
    <label for="">Contraseña:</label>
    <input value="<?php echo e($id->pass); ?>" type="text" name="pass"> <br>

    <input type="submit">
</form><?php /**PATH C:\xampp\htdocs\proyecto1\resources\views/editar_usuario.blade.php ENDPATH**/ ?>