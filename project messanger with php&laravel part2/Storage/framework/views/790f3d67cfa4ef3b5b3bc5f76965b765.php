<nav class="navbar navbar-expand-lg navbar-light bg-light" role="navigation">

    <div class="container">

        <!-- nav header -->
        <div class="navbar-header">
            <a class="navbar-brand" href="<?php echo e(route('home')); ?>">
                <span class="text-primary font-weight-bold" style="font-size: 24px;">Connect</span><span
                    class="text-danger" style="font-size: 30px; font-weight: bold;">Us</span>
            </a>
        </div>

        <div class="collapse navbar-collapse" id="navbarSupportedContent" style="justify-content: space-between">

            <!-- if user is signed in -->
            <?php if(Auth::check()): ?>

                <!-- nav items -->
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item"><a class="nav-link btn btn-primary" href="<?php echo e(route('home')); ?>">TimeLine</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle"
                           href="<?php echo e(route('profile.index' , ['username' => Auth::user()->username])); ?>"
                           id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                           aria-expanded="false">
                            <?php echo e(Auth::user()->getNameOrUsername()); ?>

                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item"
                               href="<?php echo e(route('profile.index' , ['username' => Auth::user()->username])); ?> ">Profile</a>
                            <a class="dropdown-item" href="<?php echo e(route('friends.index')); ?>">Friends</a>
                            <a class="dropdown-item" href="<?php echo e(route('profile.edit')); ?>">Update profile</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item text-danger" href="<?php echo e(route('auth.signout')); ?>">Sign out</a>
                        </div>
                    </li>
                    
                    
                    
                </ul>

                <!-- nav search -->
                <form class="form-inline my-2 my-lg-0" action="<?php echo e(route('search.results')); ?>">
                    <div class="input-group" style="gap: 10px">
                        <input class="form-control" type="text" name="query" placeholder="Find People"
                               aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="submit">Search</button>
                        </div>
                    </div>
                </form>

            <?php else: ?>

                <!-- if user is NOT signed in -->
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link btn btn-primary" href="<?php echo e(route('auth.signup')); ?>">Sign Up</a></li>
                    <li class="nav-item"><a class="nav-link btn btn-primary" href="<?php echo e(route('auth.signin')); ?>">Sign In</a></li>
                </ul>

            <?php endif; ?>

        </div>

    </div>

</nav>
<?php /**PATH D:\Programming\Social media app\ConnectUs\resources\views/templates/partials/navigation.blade.php ENDPATH**/ ?>