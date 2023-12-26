<?php $__env->startSection('title', 'Pasien'); ?>
<?php if(Auth::user()->role == 'dokter'): ?>
<?php else: ?>
<?php $__env->startPush('page-action'); ?>
    <a href="/pendaftaran/create" class="btn btn-primary mb-3">Tambah Data</a>
<?php $__env->stopPush(); ?>
<?php endif; ?>
<?php $__env->startSection('content'); ?>
    <div class="col-lg-12 ">
        <div class="card">
            <div class="table-responsive">
                <table class="table table-vcenter card-table ">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>No. Reg</th>
                            <th>No. Rekam Medis</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $pendaftarans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pendaftaran): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td class="text-secondary">
                                <?php echo e($loop->iteration); ?>

                            </td>
                            <td class="text-secondary">
                                <?php echo e($pendaftaran->no_reg); ?>

                            </td>
                            <td class="text-secondary">
                                <?php echo e($pendaftaran->no_rm); ?>

                            </td>
                            <?php if(Auth::user()->role == 'dokter'): ?>
                            <?php else: ?>
                            <td>
                                <a href="/pendaftaran/<?php echo e($pendaftaran->no_reg); ?>/detail" class="btn btn-primary">Detail</a>
                                <a href="/pendaftaran/<?php echo e($pendaftaran->no_reg); ?>/edit" class="btn btn-primary">Edit</a>
                                <form action="/pendaftaran/<?php echo e($pendaftaran->no_reg); ?>" method="POST" style="display: inline;">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                </form>
                            </td>
                            <?php endif; ?>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('templates.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Admin\Documents\project laravel\eklinikadel\resources\views/pendaftaran/index.blade.php ENDPATH**/ ?>