<?php $__env->startSection('content'); ?>
    <div class="bg-light p-5 rounded">
        <h4>List Reports</h4>

        <!-- Table untuk daftar domain -->
        <table class="table mt-4">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Trans Date</th>
                    <th>Investor</th>
                    <th>Name Desa</th>
                    <th>Domain</th>
                    <th>Profile Name</th>
                    <th>Per Item</th>
                    <th>QTY</th>
                    <th>Income</th>
                    
                    
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($loop->iteration); ?></td>
                        <td><?php echo e($d->adjusted_login_date); ?></td>
                        <td><?php echo e($d->investor); ?></td>
                        <td><?php echo e($d->name); ?></td>
                        <td><?php echo e($d->url_app); ?></td>
                        <td><?php echo e($d->profile_name); ?></td>
                        <td><?php echo e(number_format($d->price_sell)); ?></td>
                        <td><?php echo e(number_format($d->qty)); ?></td>
                        <td><?php echo e(number_format($d->first_bill)); ?></td>
                        
                        
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/reports/index.blade.php ENDPATH**/ ?>