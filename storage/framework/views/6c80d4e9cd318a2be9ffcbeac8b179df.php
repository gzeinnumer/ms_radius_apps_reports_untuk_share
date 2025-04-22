<?php $__env->startSection('content'); ?>
    <div class="bg-light p-5 rounded">
        <h4>CronJob Task</h4>

        <!-- Table untuk daftar domain -->
        <table class="table mt-4">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Domain</th>
                    <th>Message</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($loop->iteration); ?></td>
                        <?php if(str_contains($d->domain, 'https')): ?>
                            <td><a href="<?php echo e($d->domain); ?>" target="_blank"><?php echo e($d->domain); ?></a></td>
                        <?php else: ?>
                            <td><?php echo e($d->domain); ?></td>
                        <?php endif; ?>
                        <td><b><?php echo e($d->created_at); ?></b> : <?php echo e($d->msg); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/MSRADIUS/ms_radius_apps_reports_untuk_share/resources/views/cronjobtask/index.blade.php ENDPATH**/ ?>