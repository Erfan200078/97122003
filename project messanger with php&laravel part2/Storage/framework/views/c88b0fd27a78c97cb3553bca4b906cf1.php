<?php $__env->startSection('content'); ?>
    
    
    
    

    
    
    
    

    
    
    
    
    
    
    
    
    
    
    
    
    

    
    
    
    
    


    

    
    
    
    
    
    
    
    
    
    
    



    
    

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    

    

    
    
    
    
    
    

    
    
    
    

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    

    
    

    
    
    
    
    

    
    
    
    

    
    
    
    
    
    
    
    
    
    
    
    
    
    

    
    
    

    
    
    
    
    
    
    
    
    

    



    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    

    


    



    

    
    

    
    

    
    
    
    
    

    
    
    
    

    
    
    


    
    
    
    
    
    
    
    
    
    

    <div class="container mt-5">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-3">
                <div class="card shadow">
                    <!-- Profile Image and User Name with Add Friend Button -->
                    <div class="card-header text-center">
                        <a href="<?php echo e(route('profile.index' , ['username' => $user->username])); ?>">
                            <img class="rounded-circle mb-2" alt="" src="<?php echo e($user->getAvatarUrl()); ?>"
                                 style="width: 80px; height: 80px;">
                        </a>
                        <h4 class="card-title"><a
                                href="<?php echo e(route('profile.index' , ['username' => $user->username])); ?>"><?php echo e($user->getNameOrUsername()); ?></a>
                        </h4>
                        <?php if(Auth::user()->hasFriendRequestPending($user)): ?>
                            <p>Waiting for <?php echo e($user->getNameOrUsername()); ?> to accept your request</p>

                        <?php elseif(Auth::user()->hasFriendRequestReceived($user)): ?>
                            <a href="<?php echo e(route('friends.accept' , ['username' =>$user->username])); ?>"
                               class="btn btn-primary">Accept
                                friend request</a>
                        <?php elseif(Auth::user()->isFriendWith($user)): ?>
                            <p>you and <?php echo e($user->getNameOrUsername()); ?> are friends :)</p>

                            <form action="<?php echo e(route('friends.delete', ['username' => $user->username])); ?>" method="post">
                                <input type="submit" value="Delete friend." class="btn btn-warning">
                                <input type="hidden" name="_token" value="<?php echo e(Session::token()); ?>">
                            </form>

                        <?php elseif(Auth::user()->id !== $user->id): ?>
                            <a href="<?php echo e(route('friends.add', ['username'=>$user->username])); ?>" class="btn btn-primary">Add
                                friend</a>
                        <?php endif; ?>
                    </div>

                    <!-- Line Separator -->
                    <hr class="my-0">

                    <!-- Friends List with Profile Images -->



                    <div class="card-body">
                        <h6 class="card-subtitle mb-2 text-muted">Friends</h6>
                        <ul class="list-group">
                            <?php if(!$user->friends()->count()): ?>
                                <p><?php echo e($user->getNameOrUsername()); ?> has no friends :)</p>
                            <?php else: ?>
                                <?php $__currentLoopData = $user->friends(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
            </div>

            <!-- Main Content -->
            <div class="col-md-9">
                <!-- Centered Container for Status Cards -->
                <div class="d-flex justify-content-center">
                    <div class="container">
                        <?php $__currentLoopData = $statuses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $status): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <!-- Status Card 1 -->
                            <div class="card mx-auto mb-4 shadow">
                                <div
                                    class="card-header d-flex justify-content-between align-items-center bg-primary text-white">
                                    <div class="d-flex align-items-center">
                                        <img src="<?php echo e($status->user->getAvatarUrl()); ?>" alt="Profile Image"
                                             class="rounded-circle me-2"
                                             style="width: 40px; height: 40px;">
                                        <span class="fw-bold"><?php echo e($status->user->getNameOrUsername()); ?></span>
                                    </div>
                                    <small class="text-muted"><?php echo e($status->created_at->diffForHumans()); ?></small>
                                </div>
                                <div class="card-body">
                                    <p class="card-text"><?php echo e($status->body); ?></p>

                                    <!-- Reply Form for Main Reply  -->

                                    <div class="reply-form bg-light p-3 mb-3">
                                        <h5 class="card-title mb-3">Reply to <?php echo e($status->user->getNameOrUsername()); ?>'s
                                            Status</h5>
                                        <form role="form" method="post"
                                              action="<?php echo e(route('status.reply' , ['statusId' =>$status->id ])); ?>">
                                            <div class="mb-3">
                                            <textarea
                                                class="form-control<?php echo e($errors->has("reply-". $status->id) ? ' is-invalid' : ''); ?>"
                                                rows="2"
                                                placeholder="Write your reply"
                                                name="reply-<?php echo e($status->id); ?>"></textarea>
                                            </div>
                                            <input type="submit" class="btn btn-success mt-2" value="Submit Reply">
                                            <input type="hidden" name="_token" value="<?php echo e(Session::token()); ?>">
                                        </form>
                                    </div>


                                    <!-------------------------------------- Replies ----------------------------------------->
                                    <?php $__currentLoopData = $status->replies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reply): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                        <div class="card mb-3">
                                            <div class="card-header d-flex justify-content-between align-items-center">
                                                <div class="d-flex align-items-center">
                                                    <img src="<?php echo e($reply->user->getAvatarUrl()); ?>" alt="Profile Image"
                                                         class="rounded-circle me-2"
                                                         style="width: 30px; height: 30px;">
                                                    <span class="fw-bold"><?php echo e($reply->user->getNameOrUsername()); ?></span>
                                                </div>
                                                <small
                                                    class="text-muted"><?php echo e($reply->created_at->diffForHumans()); ?></small>
                                            </div>
                                            <div class="card-body">
                                                <p class="card-text"><?php echo e($reply->body); ?></p>
                                            </div>
                                            <div
                                                class="card-footer d-flex justify-content-end align-items-center bg-light">
                                                <div class="d-flex align-items-center">
                                                    
                                                    <span
                                                        class="text-muted me-2"><?php echo e($reply->likes->count()); ?> Likes</span>
                                                    <?php if($reply->user_id !== Auth::user()->id): ?>
                                                        <a class="btn btn-primary btn-sm"
                                                           href="<?php echo e(route('status.like', ['statusId' => $reply->id])); ?>">Like</a>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>

                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </div>
                                <div class="card-footer d-flex justify-content-between align-items-center bg-light">
                                    <div class="d-flex align-items-center">
                                        <?php if($status->user_id !== Auth::user()->id): ?>
                                            <a class="btn btn-primary btn-sm"
                                               href="<?php echo e(route('status.like', ['statusId' => $status->id])); ?>">Like</a>
                                        <?php endif; ?>

                                        <span class="text-muted"><?php echo e($status->likes->count()); ?> Likes</span>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Programming\Social media app\ConnectUs\resources\views/profile/index.blade.php ENDPATH**/ ?>