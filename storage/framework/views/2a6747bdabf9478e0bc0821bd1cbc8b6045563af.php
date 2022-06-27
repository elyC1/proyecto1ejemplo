<form action="<?php echo e(route('usuario.insertar')); ?>" method="POST">
    <h1>Registrar Usuario</h1>
    <?php echo csrf_field(); ?>
    <label for="">Nombre de usuario</label>
    <input type="text" name="username"> <br>
    <label for="">Contraseña:</label>
    <input type="text" name="pass"> <br>

    <input type="submit">
</form><?php /**PATH C:\xampp\htdocs\proyecto1\resources\views/formulario_usuario.blade.php ENDPATH**/ ?>