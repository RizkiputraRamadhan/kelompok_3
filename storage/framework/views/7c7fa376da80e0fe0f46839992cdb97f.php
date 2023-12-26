<?php $__env->startSection('title', 'Create Data Pasien'); ?>

<?php $__env->startSection('content'); ?>
<div class="row col-lg-12">  
    <div class="card col-lg-12">
        <div class="card-body">
            <form action="/pendaftaran/store" method="POST">
                <?php echo csrf_field(); ?>
                    <div class="mb-3">
                        <label for="no_rm" class="form-label">No. Rekam Medis</label>
                        <select name="no_rm" class="form-control">
                            <?php $__currentLoopData = $dataPasiens; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dataPasien): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($dataPasien->no_rm); ?>"> <?php echo e($dataPasien->no_rm); ?> - <?php echo e($dataPasien->Nama_lengkap); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                <div class="my-5">
                    <input type="submit" value="Simpan" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
</div>      
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Admin\Documents\project laravel\eklinikadel\resources\views/pendaftaran/create.blade.php ENDPATH**/ ?>