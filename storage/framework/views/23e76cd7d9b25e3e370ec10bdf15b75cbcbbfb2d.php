<?php $__env->startSection('content'); ?>
  <div class="container">
    <div class="row">
      <div class="col-8 mx-auto">
        <div class="card border-0 bg-light mb-3 shadow-sm">
          <status-form></status-form>
        </div>
        <statuses-list/>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/social/resources/views/welcome.blade.php ENDPATH**/ ?>