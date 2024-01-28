<?php $__env->startSection('content'); ?>

    <!--------------------------------------- Status submit form ----------------------------------------------------->
    <div class="row">
        <div class="container mt-5 mb-5">
            
            
            
            
            
            
            
            
            
            

            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Share Your Status</h4>
                            <form role="form" action="<?php echo e(route('status.post')); ?>" method="post">
                                <div class="form-group mb-3">
                                    <textarea placeholder="What's up <?php echo e(Auth::user()->getNameOrUsername()); ?>?"
                                              name="status"
                                              class="form-control<?php echo e($errors->has('status') ? ' is-invalid' : ''); ?>"
                                              rows="3"></textarea>
                                    <span class="help-block invalid-feedback"><?php echo e($errors->first('status')); ?></span>
                                </div>
                                <button type="submit" class="btn btn-primary">Update status</button>
                                <input type="hidden" name="_token" value="<?php echo e(Session::token()); ?>">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>

    <!--------------------------------------- Status timeline --------------------------------------------------------->
    <div class="container mt-5">

        
        <?php if(!$statuses->count()): ?>
            <p>There is nothing in your timeline. :(</p>
        <?php else: ?>
            <?php $__currentLoopData = $statuses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $status): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="card mb-4 shadow">
                            <div
                                class="card-header d-flex justify-content-between align-items-center bg-primary text-white">
                                <div class="d-flex align-items-center">
                                    <a href="<?php echo e(route('profile.index', ['username' => $status->user->username])); ?>">
                                        <img src="<?php echo e($status->user->getAvatarUrl()); ?>" alt="Profile Image" class="rounded-circle me-2"
                                             style="width: 40px; height: 40px;">
                                    </a>
                                    <a href="<?php echo e(route('profile.index', ['username' => $status->user->username])); ?>" style="color: white">
                                        <span class="fw-bold"><?php echo e($status->user->getNameOrUsername()); ?></span>
                                    </a>

                                </div>
                                <small class="text-muted"><?php echo e($status->created_at->diffForHumans()); ?></small>
                            </div>
                            <div class="card-body">
                                <p class="card-text"><?php echo e($status->body); ?>    </p>


                                <!-- Reply Form for Main Reply  -->

                                <div class="reply-form bg-light p-3 mb-3">
                                    <h5 class="card-title mb-3">Reply to <?php echo e($status->user->getNameOrUsername()); ?>'s Status</h5>
                                    <form role="form" method="post" action="<?php echo e(route('status.reply' , ['statusId' =>$status->id ])); ?>">
                                        <div class="mb-3">
                                            <textarea class="form-control<?php echo e($errors->has("reply-". $status->id) ? ' is-invalid' : ''); ?>" rows="2"
                                                      placeholder="Write your reply" name="reply-<?php echo e($status->id); ?>"></textarea>
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
                                                <img src="<?php echo e($reply->user->getAvatarUrl()); ?>" alt="Profile Image" class="rounded-circle me-2"
                                                     style="width: 30px; height: 30px;">
                                                <span class="fw-bold"><?php echo e($reply->user->getNameOrUsername()); ?></span>
                                            </div>
                                            <small class="text-muted"><?php echo e($reply->created_at->diffForHumans()); ?></small>
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text"><?php echo e($reply->body); ?></p>
                                        </div>
                                        <div class="card-footer d-flex justify-content-end align-items-center bg-light">
                                            <div class="d-flex align-items-center">

                                                <span class="text-muted me-2"><?php echo e($reply->likes->count()); ?> Likes</span>
                                                <?php if($reply->user_id !== Auth::user()->id): ?>
                                                    <a class="btn btn-primary btn-sm" href="<?php echo e(route('status.like', ['statusId' => $reply->id])); ?>">Like</a>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </div>
                            <div class="card-footer d-flex justify-content-between align-items-center bg-light">
                                <div class="d-flex align-items-center">
                                    <?php if($status->user_id !== Auth::user()->id): ?>
                                        <a class="btn btn-primary btn-sm" href="<?php echo e(route('status.like', ['statusId' => $status->id])); ?>">Like</a>
                                    <?php endif; ?>

                                    <span class="text-muted"><?php echo e($status->likes->count()); ?> Likes</span>
                                </div>
                            </div>
                        </div>

                        <!------------------------------------------ Old --------------------------------------------->
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        

                        
                        

                        
                        
                        
                        
                        

                        
                        
                        
                        

                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        

                        
                        
                        

                        
                        
                        
                        
                        
                        
                        
                        
                        

                        



                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <?php echo e($statuses->links()); ?>


        <?php endif; ?>

    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Programming\Social media app\ConnectUs\resources\views/timeLine/index.blade.php ENDPATH**/ ?>