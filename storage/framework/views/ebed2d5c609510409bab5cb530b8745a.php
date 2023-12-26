<?php $__env->startSection('title', 'Pasien'); ?>
<?php $__env->startSection('content'); ?>
    <div class="col-lg-12 ">
        <div class="card">
            <div class="table-responsive">
                <table class="table table-vcenter card-table ">
                    <thead>
                        <tr>
                            <th>No. Rm</th>
                            <th>Nama lengkap</th>
                            <th>Nik</th>
                            <th>ygl lahir</th>
                            <th>umur</th>
                            <th>alamat</th>
                            <th>kabupaten</th>
                            <th>tanggal periksa</th>
                            <th>status</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                            <td class="text-secondary">
                                <?php echo e($detail->dataPasien->no_rm); ?>

                            </td>
                            <td class="text-secondary">
                                <?php echo e($detail->dataPasien->Nama_lengkap); ?>

                            </td>
                            <td class="text-secondary">
                                <?php echo e($detail->dataPasien->nik); ?>

                            </td>
                            <td class="text-secondary">
                                <?php echo e($detail->dataPasien->tgl_lahir); ?>

                            </td>
                            <td class="text-secondary">
                                <?php echo e($detail->dataPasien->umur); ?>

                            </td>
                            <td class="text-secondary">
                                <?php echo e($detail->dataPasien->alamat); ?>

                            </td>
                            <td class="text-secondary">
                                <?php echo e($detail->dataPasien->kabupaten); ?>

                            </td>
                            <td class="text-secondary">
                                <?php echo e($detail->dataPasien->tanggal_terakhir_periksa); ?>

                            </td>
                            <td class="text-secondary">
                                <?php echo e($detail->dataPasien->status); ?>

                            </td>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('templates.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Admin\Documents\project laravel\eklinikadel\resources\views/pendaftaran/detail.blade.php ENDPATH**/ ?>