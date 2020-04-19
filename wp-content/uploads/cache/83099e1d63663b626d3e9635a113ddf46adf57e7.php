<?php $__env->startSection('content'); ?>
<div class="accroche">
  <p>A student from iut de chambery </p>
</div>
<div class="main-content">
<?php if($featured_post): ?>
<?php $__currentLoopData = $featured_post; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<a class="item" href="<?php echo e($post->link); ?>">
  <h1><?php echo e($post->title); ?></h1>
  <img src="<?php echo e($post->image); ?>">
</a>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>
</div>

<div class="voirplus">
<a href="<?php echo e(get_permalink(25)); ?>" class="button">Voir plus</a>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>