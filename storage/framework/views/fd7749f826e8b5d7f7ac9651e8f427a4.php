<?php $__env->startSection('title', 'Rooms'); ?>

<?php $__env->startSection('content'); ?>
<h3 class="display fw-bold lh-1 my-3"><i class="fa-solid fa-house"></i> Daftar Rooms Yang Terposting.</h3>
<a href="/admin/room/create" class="btn btn-primary mb-3">Tambah Room</a>

    <div class="col-lg-12 ">
        <div class="card">
            <div class="table-responsive">
                <table class="table table-vcenter card-table">
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
                            <th class="w-3">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $rooms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $room): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($loop->iteration); ?></td>
                            <td><img src="<?php echo e(asset('storage/' . $room->image)); ?>" alt="Room Image" width="50"></td>
                            <td><?php echo e($room->nama_kamar); ?></td>
                            <td><?php echo e($room->no_kamar); ?></td>
                            <td><?php echo e($room->kapasitas); ?></td>
                            <td><?php echo e($room->category_pinjam); ?></td>
                            <td><?php echo e($room->category); ?></td>
                            <td><?php echo e($room->harga); ?></td>
                            <td><?php echo e($room->peta); ?></td>
                            <td class="w-3 ">
                                <a href="/admin/room/edit/<?php echo e($room->id); ?>" class="m-2 btn btn-primary btn-sm">Edit</a>
                                <form action="/admin/room/delete/<?php echo e($room->id); ?>" method="post">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('yaqin ingin menghapus room ini ?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('templates.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Admin\Documents\PROJECT LARAVEL\HomeStay V2\resources\views/v_admin/room.blade.php ENDPATH**/ ?>