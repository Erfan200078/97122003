<?php $__env->startSection('content'); ?>

    <div class="row justify-content-center" style="margin-top: 50px">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header text-center">
                    <h4>Sign up</h4>
                </div>
                <div class="card-body">
                    <form role="form" method="post" action="<?php echo e(route('auth.signup')); ?>">
                        <div class="form-group is-invalid">
                            <label for="email" class="control-label">Your email address</label>
                            <input type="text" name="email" class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" id="email" value="<?php echo e(Request::old('email') ?: ''); ?>">
                            <span class="help-block invalid-feedback"><?php echo e($errors->first('email')); ?></span>

                        </div>
                        <div class="form-group">
                            <label for="username" class="control-label">Choose a username</label>
                            <input type="text" name="username" class="form-control<?php echo e($errors->has('username') ? ' is-invalid' : ''); ?>" id="username" value="<?php echo e(Request::old('username') ?: ''); ?>">
                            <span class="help-block invalid-feedback"><?php echo e($errors->first('username')); ?></span>
                        </div>
                        <div class="form-group">
                            <label for="password" class="control-label">Choose a password</label>
                            <input type="password" name="password" class="form-control <?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>" id="password">
                            <span class="help-block invalid-feedback"><?php echo e($errors->first('password')); ?></span>
                        </div>
                        <div class="mt-3">
                            <button type="submit" class="btn btn-primary btn-block">Sign up</button>
                        </div>
                        <input type="hidden" name="_token" value="<?php echo e(Session::token()); ?>">
                    </form>
                </div>
            </div>

        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Programming\Social media app\ConnectUs\resources\views/auth/signup.blade.php ENDPATH**/ ?>