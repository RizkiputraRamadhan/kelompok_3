<?php $__env->startSection('title', 'Create Data Pasien'); ?>

<?php $__env->startSection('content'); ?>
<div class="row col-lg-12 mt-3">
    <div class="card col-lg-12">
        <div class="card-body">
            <form action="/admin/room/store" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="mb-3">
                    <label for="image" class="form-label">Foto Kamar</label>
                    <input type="file" name="file" class="form-control"  value="<?php echo e(old('file')); ?>" />
                </div>
                <div class="mb-3">
                    <label for="no_kamar" class="form-label">Nomor Kamar</label>
                    <input type="text" name="no_kamar" class="form-control"  value="<?php echo e(old('no_kamar')); ?>" placeholder="Masukkan Nomor Kamar">
                </div>
                <div class="mb-3">
                    <label for="kapasitas" class="form-label">Kapasitas</label>
                    <input type="text" name="kapasitas"  value="<?php echo e(old('kapasitas')); ?>" class="form-control" placeholder="Masukkan Kapasitas" />
                </div>
                <div class="mb-3">
                    <label for="category_pinjam" class="form-label">Kategori Peminjaman</label>
                    <input type="text" name="category_pinjam"  value="<?php echo e(old('category_pinjam')); ?>" class="form-control" placeholder="Masukkan Kategori Peminjaman" />
                </div>
                <div class="mb-3">
                    <label for="nama_kamar" class="form-label">Nama Kamar</label>
                    <input type="text" name="nama_kamar"  value="<?php echo e(old('nama_kamar')); ?>" class="form-control" placeholder="Masukkan Nama Kamar" />
                </div>
                <div class="mb-3">
                    <label for="harga" class="form-label">Harga</label>
                    <input type="text" name="harga" class="form-control"  value="<?php echo e(old('harga')); ?>" placeholder="Masukkan Harga" />
                </div>
                <div class="mb-3">
                    <label for="category" class="form-label">Kategori</label>
                    <input type="text" name="category" class="form-control"  value="<?php echo e(old('category')); ?>" placeholder="Masukkan Kategori" />
                </div>
                <div class="mb-3">
                    <label for="peta" class="form-label">Peta</label>
                    <input type="text" name="peta" class="form-control"  value="<?php echo e(old('peta')); ?>" placeholder="Masukkan Peta" />
                </div>
                <div class="mb-3">
                    <label for="status" class="form-label">Status</label>
                    <select  value="<?php echo e(old('status')); ?>" name="status" class="form-control">
                        <option value="1">publish</option>
                        <option value="2">Draft</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="desc" class="form-label">Deskripsi</label>
                    <input type="text"  value="<?php echo e(old('desc')); ?>" name="desc" class="form-control" placeholder="Masukkan Deskripsi" />
                </div>
                <div class="my-5">
                    <input type="submit" value="Simpan" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Admin\Documents\PROJECT LARAVEL\HomeStay V2\resources\views/v_admin/create.blade.php ENDPATH**/ ?>