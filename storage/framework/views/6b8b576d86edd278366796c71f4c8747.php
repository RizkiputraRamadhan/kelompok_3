<?php $__env->startSection('title', 'Pasien'); ?>
<?php if(Auth::user()->role == 'dokter'): ?>
<?php else: ?>
<?php $__env->startPush('page-action'); ?>
    <a href="<?php echo e(route ('pasien.create')); ?>" class="btn btn-primary mb-3">Tambah Data</a>
<?php $__env->stopPush(); ?>
<?php endif; ?>
<?php $__env->startSection('content'); ?>
    <div class="col-lg-12 ">
        <div class="card">
            <div class="table-responsive">
                <table class="table table-vcenter card-table ">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>RM</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>No Telepon</th>
                            <th class="w-1"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $pasiens; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pasien): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($loop->iteration); ?></td>
                            <td class="text-secondary">
                                <?php echo e($pasien->no_rm); ?>

                            </td>
                            <td class="text-secondary">
                                <?php echo e($pasien->nama); ?>

                            </td>
                            <td class="text-secondary">
                                <?php echo e($pasien->alamat); ?>

                            </td>
                            <td class="text-secondary">
                                <?php echo e($pasien->nomor_telp); ?>

                            </td>
                            <?php if(Auth::user()->role == 'dokter'): ?>
                            <?php else: ?>
                            <td>
                                <div class="row">
                                    <a href="<?php echo e(route('pasien.edit', $pasien->id)); ?>" class="col btn btn-secondary">Edit</a>
                                    <form action="<?php echo e(route('pasien.destroy', $pasien->id)); ?>" method="post" class="col">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <input type="submit" value="Hapus" class="btn btn-danger">
                                    </form>
                                </div>
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


<?php echo $__env->make('templates.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Admin\Documents\project laravel\eklinikadel\resources\views/pasien/index.blade.php ENDPATH**/ ?>