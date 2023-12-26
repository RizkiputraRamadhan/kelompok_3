<?php $__env->startSection('title', 'Create Data Pasien'); ?>

<?php $__env->startSection('content'); ?>
<div class="row col-lg-12">  
    <div class="card col-lg-12">
        <div class="card-body">
            <form action="/data_pasien/store" class="" method=post>
            <?php echo csrf_field(); ?>
                <div class="mb-3">
                    <label class="form-label">Nama</label>
                    <input type="text" name="nama" class="form-control" name="example-text-input" placeholder="Masukan Nama">
                </div>
                <div class="mb-3">
                    <label class="form-label">Alamat</label>
                    <input type="text" name="alamat" class="form-control" name="example-text-input" placeholder="Masukan Alamat">
                </div>
                <div class="mb-3">
                    <label class="form-label">Nomor Telepon</label>
                    <input type="text" name="nomor_telp" class="form-control" name="example-text-input" placeholder="Masukan No Telepon">
                </div>

                <div class="my-5">
                    <input type="submit" value="Simpan" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
</div>      
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Admin\Documents\project laravel\eklinikadel\resources\views/pasien/create.blade.php ENDPATH**/ ?>