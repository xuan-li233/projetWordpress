<?php $__env->startSection('content'); ?>
  <h1><?php echo e($title); ?></h1>
  <img src="<?php echo e($image); ?>"/>
  <div class="detail>">
  <h2>Author:  <?php echo e($author); ?></h2>
  <h2>Date:  <?php echo e($date); ?></h2>
  </div>
  <p class="description"><?php echo e($description); ?></p>
  <a href="<?php echo e($url); ?>"><?php echo e($url); ?></a>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>