<?php $__env->startSection('content'); ?>
    <div class="bg-light p-5 rounded">
        <h4>Reports</h4>

        <!-- Table untuk daftar domain -->
        <table class="table mt-4">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Trans Date</th>
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
                        
                        <td><?php echo e($d->id); ?></td>
                        <td><?php echo e($d->adjusted_login_date); ?></td>
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

<?php echo $__env->make('layouts.app-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/MSRADIUS/ms_radius_apps_reports_untuk_share/resources/views/reports/index.blade.php ENDPATH**/ ?>