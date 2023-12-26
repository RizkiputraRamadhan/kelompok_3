<?php $__env->startSection('title', 'Tidak Ada'); ?>
<?php
    $title = 'Halaman 404';
    $preTitle = '';
?>
<?php $__env->startSection('content'); ?>
<div class="d-flex align-items-center justify-content-center vh-100">
    <div class="text-center row">
        <div class=" col-md-6">
            <img src="https://cdn.pixabay.com/photo/2017/03/09/12/31/error-2129569__340.jpg" alt=""
                class="img-fluid">
        </div>
        <div class=" col-md-6 mt-5">
            <p class="fs-3"> <span class="text-danger">Opps!</span> Page not found.</p>
            <p class="lead">
                Tidak ada halaman yang anda cari.
            </p>
            <a href="/" class="btn btn-primary">Go Home</a>
        </div>

    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laravel\WP-homestaysyari'ah\kelompok_3\resources\views/errors/404.blade.php ENDPATH**/ ?>