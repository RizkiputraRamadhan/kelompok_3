<?php $__env->startSection('title', 'Home'); ?>

<?php $__env->startSection('content'); ?>
    <h3 class="display fw-bold lh-1 my-3"><i class="fa-solid fa-house"></i> room yang sedang pesan</h3>
    <div class="col-lg-12">
        <div class="card">
            <div class="table-responsive">
                <table class="table-vcenter card-table table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NO Kamar</th>
                            <th>Nama Kamar</th>
                            <th>Nama Tamu</th>
                            <th>Status</th>
                            <th>Dibuat</th>
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

<?php echo $__env->make('templates.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Admin\Documents\PROJECT LARAVEL\HomeStay V2\resources\views/v_admin/index.blade.php ENDPATH**/ ?>