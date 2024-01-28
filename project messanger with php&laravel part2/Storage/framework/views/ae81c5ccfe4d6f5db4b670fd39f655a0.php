<?php if(Session::has('info')): ?>
    <div class="alert alert-info" role="alert">
        <?php echo e(session::get('info')); ?>

    </div>

<?php endif; ?>
<?php /**PATH D:\Programming\Social media app\ConnectUs\resources\views/templates/partials/alerts.blade.php ENDPATH**/ ?>