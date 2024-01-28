<?php $__env->startSection('content'); ?>

    <div class="row justify-content-center" style="margin-top: 50px">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header text-center">
                    <h4>Sign in</h4>
                </div>
                <div class="card-body">
                    <form role="form" method="post" action="<?php echo e(route('auth.signin')); ?>">
                        <div class="form-group is-invalid">
                            <label for="email" class="control-label">Email</label>
                            <input type="text" name="email" class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" id="email" value="">
                            <span class="help-block invalid-feedback"><?php echo e($errors->first('email')); ?></span>

                        </div>

                        <div class="form-group">
                            <label for="password" class="control-label">Password</label>
                            <input type="password" name="password" class="form-control <?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>" id="password">
                            <span class="help-block invalid-feedback"><?php echo e($errors->first('password')); ?></span>
                        </div>

                        <div class="form-group">
                            <label >
                                <input type="checkbox" name="remember"> Remember me
                            </label>
                        </div>

                        <div class="mt-3">
                            <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                        </div>
                        <input type="hidden" name="_token" value="<?php echo e(Session::token()); ?>">
                    </form>
                </div>
            </div>

        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Programming\Social media app\ConnectUs\resources\views/auth/signin.blade.php ENDPATH**/ ?>