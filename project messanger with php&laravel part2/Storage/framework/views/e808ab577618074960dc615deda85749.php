<?php $__env->startSection('content'); ?>
    <div class="row">


        <div class="card-body" style="width:50%;">
            <h2 class="card-subtitle mb-2 text-muted">Your Friends</h2>
            <ul class="list-group">
                <?php if(!$friends->count()): ?>
                    <p>you have no friends :)</p>
                <?php else: ?>
                    <?php $__currentLoopData = $friends; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="list-group-item d-flex justify-content-between align-items-center" >
                            <div class="d-flex align-items-center" style="display: flex; justify-content: space-between; width: 100%">
                                <a class="pull-left" href="<?php echo e(route('profile.index' , ['username' => $user->username])); ?>" >
                                    <img class="media-project" alt="" src="<?php echo e($user->getAvatarUrl()); ?>" style="border-radius: 30%">
                                </a>
                                <h6 class="card-title"><a href="<?php echo e(route('profile.index' , ['username' => $user->username])); ?>"><?php echo e($user->getNameOrUsername()); ?></a></h6>
                            </div>
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>

            </ul>
        </div>
















        <div class="card-body" style="width:50%;">
            <h2 class="card-subtitle mb-2 text-muted">Friend Requests</h2>
            <ul class="list-group">
                <?php if(!$requests->count()): ?>
                    <p>You have no friend requests.</p>
                <?php else: ?>
                    <?php $__currentLoopData = $requests; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="list-group-item d-flex justify-content-between align-items-center" >
                            <div class="d-flex align-items-center" style="display: flex; justify-content: space-between; width: 100%">
                                <a class="pull-left" href="<?php echo e(route('profile.index' , ['username' => $user->username])); ?>" >
                                    <img class="media-project" alt="" src="<?php echo e($user->getAvatarUrl()); ?>" style="border-radius: 30%">
                                </a>
                                <h6 class="card-title"><a href="<?php echo e(route('profile.index' , ['username' => $user->username])); ?>"><?php echo e($user->getNameOrUsername()); ?></a></h6>
                            </div>
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>

            </ul>
        </div>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Programming\Social media app\ConnectUs\resources\views/friends/index.blade.php ENDPATH**/ ?>