<?php $__env->startSection('content'); ?>
    <h4>Oops, that page could not be found</h4>
    <a href="<?php echo e(route('home')); ?>">Go home</a>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Programming\Social media app\ConnectUs\resources\views/errors/404.blade.php ENDPATH**/ ?>