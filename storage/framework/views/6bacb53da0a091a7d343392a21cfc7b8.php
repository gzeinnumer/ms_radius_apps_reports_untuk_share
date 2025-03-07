<?php $__env->startSection('content'); ?>
    <div class="bg-light p-5 rounded">
        <h4>List Task</h4>

        <!-- Table untuk daftar domain -->
        <table class="table mt-4">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Investor</th>
                    <th>Name</th>
                    <th>Domain</th>
                    <th>Message</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($loop->iteration); ?></td>
                        <td><?php echo e($d->investor); ?></td>
                        <td><?php echo e($d->name); ?></td>
                        <td><?php echo e($d->domain); ?></td>
                        <td><b><?php echo e($d->created_at); ?></b> : <?php echo e($d->msg); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/cronjobtask/index.blade.php ENDPATH**/ ?>