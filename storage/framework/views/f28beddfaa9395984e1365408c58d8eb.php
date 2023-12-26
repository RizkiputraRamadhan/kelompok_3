<?php $__env->startSection('title', 'Rooms'); ?>

<?php $__env->startSection('content'); ?>
<h3 class="display fw-bold lh-1 my-3"><i class="fa-solid fa-house"></i> Daftar Rooms Yang Terposting.</h3>
<a href="/admin/room/create" class="btn btn-primary mb-3">Tambah Room</a>

    <div class="col-lg-12 ">
        <div class="card">
            <div class="table-responsive">
                <table class="table table-vcenter card-table ">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Foto</th>
                            <th>Nama</th>
                            <th>No Kamar</th>
                            <th>Kapasitas</th>
                            <th>Category Pinjam</th>
                            <th>Category</th>
                            <th>Harga</th>
                            <th>Peta</th>
                            <th>Description</th>
                            <th class="w-1"></th>
                        </tr>
                    </thead>
                    <tbody>
                      
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('templates.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Admin\Documents\PROJECT LARAVEL\eklinikadel\resources\views/v_admin/room.blade.php ENDPATH**/ ?>