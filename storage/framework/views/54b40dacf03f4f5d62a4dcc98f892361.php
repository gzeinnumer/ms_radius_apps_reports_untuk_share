<?php $__env->startSection('content'); ?>
    <div class="bg-light p-5 rounded">
        <h1>Cara Load Otomatis setiap hari</h1>
        <p class="lead">Catatan : aplikasi ini hanya diizinkan load data sekali sehari, mengingat beban yang tidak terprediksi seiring pertumbuhan domains/aplikasi</p>
        <p class="lead">Silahkan tanam CRON JOB pada ubuntu :</p>
        <br>
        <p class="lead">crontab -e</p>
        <p class="lead">* * * * * php /path/to/laravel/artisan schedule:run >> /dev/null 2>&1</p>
        <p class="lead">php artisan schedule:run</p>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/MSRADIUS/ms_radius_apps_reports/resources/views/documentation/index.blade.php ENDPATH**/ ?>