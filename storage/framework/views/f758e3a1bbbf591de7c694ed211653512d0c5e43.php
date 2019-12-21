<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card border-0 bg-light px-4 py-2">
                    <form action="<?php echo e(route('login')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Email:</label>
                                <input class="form-control" type="email" name="email" placeholder="Tu correo...">
                            </div>
                            <div class="form-group">
                                <label>Contraseña:</label>
                                <input class="form-control" type="password" name="password" placeholder="Tu contraseña">
                            </div>
                            <button class="btn btn-primary btn-block" id="login-btn">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\social\resources\views/auth/login.blade.php ENDPATH**/ ?>