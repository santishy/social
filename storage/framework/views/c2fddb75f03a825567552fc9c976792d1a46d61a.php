<?php $__env->startSection('content'); ?>
  <div class="container">
    <div class="row">
      <div class="col-md-6 mx-auto">
        <div class="card border-0 bg-light px-2 py-2">
          <form  action="<?php echo e(url('/login')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <div class="card-body">
              <div class="form-group">
                <label for="">Email</label>
                <input class="form-control border-0" type="email" placeholder="tu email..."name="email" >
              </div>
              <div class="form-group">
                <label for="">Password</label>
                <input class="form-control border-0" type="password" placeholder="tu contraseña..." name="password" >
              </div>
              <button id="login-btn" class="btn btn-primary btn-block">Login</button>
            </div>
          </form>
        </div>
      </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/social/resources/views/auth/login.blade.php ENDPATH**/ ?>