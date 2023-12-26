<?php $__env->startSection('title', 'Home'); ?>

<?php $__env->startSection('content'); ?>
    <h3 class="display fw-bold lh-1 my-3"><i class="fa-solid fa-house"></i> room yang sedang pesan</h3>
    <div class="col-lg-12">
        <?php if(session('success')): ?>
            <div class="alert alert-success">
                <?php echo e(session('success')); ?>

            </div>
        <?php elseif(session('error')): ?>
            <div class="alert alert-danger">
                <?php echo e(session('error')); ?>

            </div>
        <?php endif; ?>
        <div class="card">
            <div class="table-responsive">
                <table class="table-vcenter card-table table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NO Kamar</th>
                            <th>Nama Kamar</th>
                            <th>Nama Tamu</th>
                            <th>Harga</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $rooms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $room): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($loop->iteration); ?></td>
                                <td><?php echo e($room->no_kamar); ?></td>
                                <td><?php echo e($room->nama_kamar); ?></td>
                                <td><?php echo e($room->user->name); ?></td>
                                <td><?php echo e($room->harga); ?></td>
                                <td>
                                    <?php if($room->status == 2): ?>
                                     Sedang ditempati
                                    <?php endif; ?>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Admin\Documents\PROJECT LARAVEL\HomeStay V2\resources\views/v_admin/index.blade.php ENDPATH**/ ?>