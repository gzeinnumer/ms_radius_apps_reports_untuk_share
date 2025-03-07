<?php $__env->startSection('content'); ?>
    <div class="bg-light p-5 rounded">
        <?php if(auth()->guard()->check()): ?>
            <h1>Dashboard</h1>
            <p class="lead">Aplikasi khusus yang dibuatkan oleh MSRadius untuk load data harian yang bisa di olah diluar Aplikasi MSRadius</p>
            <a class="btn btn-lg btn-primary" href="https://msradius.com" role="button">Kunjungi MSRadius &raquo;</a>
        <?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/MSRADIUS/ms_radius_apps_reports_untuk_share/resources/views/home/index.blade.php ENDPATH**/ ?>