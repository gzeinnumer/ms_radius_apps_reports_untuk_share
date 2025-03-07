<?php $__env->startSection('content'); ?>
    <div class="bg-light p-5 rounded">
        <h4 id="form-title">Tambah Domain</h4>

        <?php if(session('success')): ?>
            <div class="alert alert-success">
                <?php echo e(session('success')); ?>

            </div>
        <?php endif; ?>

        <?php if(session('error')): ?>
            <div class="alert alert-danger">
                <?php echo e(session('error')); ?>

            </div>
        <?php endif; ?>

        <?php if($errors->any()): ?>
            <div class="alert alert-danger">
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>

        <!-- Form untuk Tambah & Update -->
        <form id="domain-form" action="/domains/store" method="POST">
            <?php echo csrf_field(); ?>
            <input type="hidden" id="domain-id" name="id">
            <div class="mb-3">
                <label for="investor" class="form-label">Investor/Owner</label>
                <input type="text" class="form-control" id="investor" name="investor" required placeholder="Nama Investor/Owner">
            </div>
	<div class="mb-3">
		<label for="island" class="form-label">Island</label>
		<input type="text" class="form-control" id="island" name="island" required placeholder="Kabupaten/Provinsi">
	</di>
            <div class="mb-3">
                <label for="name" class="form-label">Nama</label>
                <input type="text" class="form-control" id="name" name="name" required placeholder="Nama Daerah">
            </div>
            <div class="mb-3">
                <label for="domain" class="form-label">Domain</label>
                <input type="text" class="form-control" id="domain" name="domain" required placeholder="e.g : https://0000000.msradius.com">
            </div>
            <button type="submit" class="btn btn-primary" id="submit-button">Tambah</button>
            <button type="button" class="btn btn-secondary" id="cancel-update" style="display: none;">Batal</button>
        </form>

        <br>
        <h4>List Domain</h4>

        <!-- Table untuk daftar domain -->
        <table class="table mt-4">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Investor</th>
                    <th>Nama</th>
                    <th>Domain</th>
                    <th>Created At</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($loop->iteration); ?></td>
                        <td><?php echo e($d->investor); ?></td>
                        <td><?php echo e($d->name); ?></td>
                        <td><?php echo e($d->domain); ?></td>
                        <td><?php echo e($d->created_at); ?></td>
                        <td>
                            <button type="button" class="btn btn-warning btn-sm edit-btn" data-id="<?php echo e($d->id); ?>" data-name="<?php echo e($d->name); ?>" data-domain="<?php echo e($d->domain); ?>" data-investor="<?php echo e($d->investor); ?>">
                                Edit
                            </button>
                            <form action="/domains/destroy/<?php echo e($d->id); ?>" method="POST" style="display:inline;">
                                <?php echo csrf_field(); ?>
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>

    <script>
        document.querySelectorAll('.edit-btn').forEach(button => {
            button.addEventListener('click', function() {
                const id = this.getAttribute('data-id');
                const name = this.getAttribute('data-name');
                const domain = this.getAttribute('data-domain');
                const investor = this.getAttribute('data-investor');

                document.getElementById('domain-id').value = id;
                document.getElementById('name').value = name;
                document.getElementById('domain').value = domain;
                document.getElementById('investor').value = investor;

                document.getElementById('domain-form').action = `/domains/update/${id}`;
                document.getElementById('submit-button').textContent = "Update";
                document.getElementById('submit-button').classList.replace('btn-primary', 'btn-warning');
                document.getElementById('form-title').textContent = "Edit Domain";
                document.getElementById('cancel-update').style.display = "inline-block";
            });
        });

        document.getElementById('cancel-update').addEventListener('click', function() {
            document.getElementById('domain-id').value = "";
            document.getElementById('name').value = "";
            document.getElementById('domain').value = "";
            document.getElementById('investor').value = "";

            document.getElementById('domain-form').action = "/domains/store";
            document.getElementById('submit-button').textContent = "Tambah";
            document.getElementById('submit-button').classList.replace('btn-warning', 'btn-primary');
            document.getElementById('form-title').textContent = "Tambah Domain";
            document.getElementById('cancel-update').style.display = "none";
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/MSRADIUS/ms_radius_apps_reports_untuk_share/resources/views/domains/index.blade.php ENDPATH**/ ?>