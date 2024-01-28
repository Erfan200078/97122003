<?php $__env->startSection('content'); ?>
    <h3>Your search for "<?php echo e(Request::input('query')); ?>"</h3>

    <?php if(!$users->count()): ?>
        <p>Sorry no results found :(</p>
    <?php else: ?>
        <div class="row" style="width: 50%;">









            <div class="card-body">
                <h6 class="card-subtitle mb-2 text-muted">Friends</h6>
                <ul class="list-group">

                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <div class="d-flex align-items-center"
                                 style="display: flex; justify-content: space-between; width: 100%">
                                <a class="pull-left"
                                   href="<?php echo e(route('profile.index' , ['username' => $user->username])); ?>">
                                    <img class="media-project" alt="" src="<?php echo e($user->getAvatarUrl()); ?>"
                                         style="border-radius: 30%">
                                </a>
                                <h6 class="card-title"><a
                                        href="<?php echo e(route('profile.index' , ['username' => $user->username])); ?>"><?php echo e($user->getNameOrUsername()); ?></a>
                                </h6>
                            </div>
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </ul>
            </div>

        </div>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Programming\Social media app\ConnectUs\resources\views/search/results.blade.php ENDPATH**/ ?>