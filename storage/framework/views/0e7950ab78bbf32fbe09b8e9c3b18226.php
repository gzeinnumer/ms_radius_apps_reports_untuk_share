<header class="p-3 bg-dark text-white">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                    <use xlink:href="#bootstrap" />
                </svg>
            </a>

            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <?php if(auth()->guard()->check()): ?>
                    <li><a href="/" class="nav-link px-2 text-white">Home</a></li>
                    <li><a href="/domains" class="nav-link px-2 text-white">Domains</a></li>
                    <li><a href="/cronjobtask" class="nav-link px-2 text-white">CronJob Task</a></li>
                    <li><a href="/reports" class="nav-link px-2 text-white">Daily Reports</a></li>
                    <li><a href="/documentation" class="nav-link px-2 text-white">Documentation</a></li>
                <?php endif; ?>
            </ul>

            <?php if(auth()->guard()->check()): ?> <?php echo e(auth()->user()->name); ?>

                <div class="text-end">
                    <a href="<?php echo e(route('logout.perform')); ?>" class="btn btn-outline-light me-2">Logout</a>
                </div>
                <?php endif; ?> <?php if(auth()->guard()->guest()): ?>
                <div class="text-end">
                    <a href="<?php echo e(route('login.perform')); ?>" class="btn btn-outline-light me-2">Login</a>
                    <a href="<?php echo e(route('register.perform')); ?>" class="btn btn-warning">Sign-up</a>
                </div>
            <?php endif; ?>
        </div>
    </div>
</header>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/MSRADIUS/ms_radius_apps_reports_untuk_share/resources/views/layouts/partials/navbar.blade.php ENDPATH**/ ?>