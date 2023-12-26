<?php $__env->startSection('title', 'Pasien'); ?>
<?php if(Auth::user()->role == 'dokter'): ?>
<?php else: ?>
<?php $__env->startPush('page-action'); ?>
    <a href="/data_pasien/create" class="btn btn-primary mb-3">Tambah Data</a>
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
                            <th>NO RM</th>
                            <th>Nama Lengkap</th>
                            <th>NIK</th>
                            <th>Tanggal Lahir</th>
                            <th>Umur</th>
                            <th>Alamat</th>
                            <th>Kecamatan</th>
                            <th>Kabupaten</th>
                            <th>Status</th>
                            <th>Dibuat</th>
                            <th class="w-1"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $dataPasien; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pasien): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td class="text-secondary">
                                <?php echo e($loop->iteration); ?>

                            </td>
                            <td class="text-secondary">
                                <?php echo e($pasien->no_rm); ?>

                            </td>
                            <td class="text-secondary">
                                <?php echo e($pasien->Nama_lengkap); ?>

                            </td>
                            <td class="text-secondary">
                                <?php echo e($pasien->nik); ?>

                            </td>
                            <td class="text-secondary">
                                <?php echo e($pasien->tgl_lahir); ?>

                            </td> <td class="text-secondary">
                                <?php echo e($pasien->umur); ?>

                            </td> <td class="text-secondary">
                                <?php echo e($pasien->alamat); ?>

                            </td> <td class="text-secondary">
                                <?php echo e($pasien->kecamatan); ?>

                            </td> <td class="text-secondary">
                                <?php echo e($pasien->kabupaten); ?>

                            </td> <td class="text-secondary">
                                <?php echo e($pasien->status); ?>

                            </td> <td class="text-secondary">
                                <?php echo e(\Carbon\Carbon::parse($pasien->created_at)->diffForHumans()); ?>

                            </td>
                            <?php if(Auth::user()->role == 'dokter'): ?>
                            <?php else: ?>
                            <td>
                                <div class="row">
                                    <a href="/data_pasien/<?php echo e($pasien->id); ?>/edit" class="col btn btn-secondary">Edit</a>
                                    <form action="/data_pasien/<?php echo e($pasien->id); ?>" method="post" class="col">
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


<?php echo $__env->make('templates.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Admin\Documents\project laravel\eklinikadel\resources\views/data_pasien/index.blade.php ENDPATH**/ ?>