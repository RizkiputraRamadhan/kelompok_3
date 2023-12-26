<?php $__env->startSection('title', 'Pendaftaran Pasien'); ?>
<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-sm-6 mb-3 mb-sm-0">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Kasir</h5>
          <p class="card-text">Jumlah keseluruhan data : .</p>
          <a href="/data_pasien" class="btn btn-primary">Kasir</a>
        </div>
      </div>
    </div>
    <div class="col-sm-6 mb-3 ">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Detail Transaksi</h5>
          <p class="card-text">Jumlah keseluruhan data : .</p>
          <a href="/pendaftaran" class="btn btn-primary">Detail Transaksi</a>
        </div>
      </div>
    </div>
    <div class="col-sm-6 mb-3 ">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Detail Transaksi</h5>
          <p class="card-text">Jumlah keseluruhan data : .</p>
          <a href="/pendaftaran" class="btn btn-primary">Detail Transaksi</a>
        </div>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Admin\Documents\project laravel\eklinikadel\resources\views/kasirs/index.blade.php ENDPATH**/ ?>