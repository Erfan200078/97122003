<?php $__env->startSection('content'); ?>

    <h3>Update profile</h3>
    <div class="row">
        <div class="col-lg-6">
            <form class="form-vertical" role="form" method="post" action="<?php echo e(route('profile.edit')); ?>">

                <div class="row">

                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="first_name" class="control-label">First name</label>
                            <input type="text" name="first_name" class="form-control<?php echo e($errors->has('first_name') ? ' is-invalid' : ''); ?>" id="first_name" value="<?php echo e(Request::old('first_name') ?: Auth::user()->first_name); ?>">
                            <span class="help-block invalid-feedback"><?php echo e($errors->first('first_name')); ?></span>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="last_name" class="control-label">Last name</label>
                            <input type="text" name="last_name" class="form-control<?php echo e($errors->has('last_name') ? ' is-invalid' : ''); ?>" id="last_name" value="<?php echo e(Request::old('last_name') ?: Auth::user()->last_name); ?>">
                            <span class="help-block invalid-feedback"><?php echo e($errors->first('last_name')); ?></span>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="location" class="control-label">Location</label>
                    <input type="text" name="location" class="form-control<?php echo e($errors->has('location') ? ' is-invalid' : ''); ?>" id="location" value="<?php echo e(Request::old('location') ?: Auth::user()->location); ?>">
                    <span class="help-block invalid-feedback"><?php echo e($errors->first('location')); ?></span>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary mt-2">Update</button>
                </div>
                <input type="hidden" name="_token" value="<?php echo e(Session::token()); ?>">
            </form>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Programming\Social media app\ConnectUs\resources\views/profile/edit.blade.php ENDPATH**/ ?>