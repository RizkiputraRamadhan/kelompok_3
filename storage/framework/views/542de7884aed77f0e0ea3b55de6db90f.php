<?php $__env->startSection('title', 'Pendaftaran Pasien'); ?>
<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-sm-6 mb-3 mb-sm-0">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Data Pasien</h5>
          <p class="card-text">Jumlah keseluruhan data : .</p>
          <a href="/data_pasien" class="btn btn-primary">Data Pasien</a>
        </div>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Pendaftaran</h5>
          <p class="card-text">Jumlah keseluruhan data : .</p>
          <a href="/pendaftaran" class="btn btn-primary">Daftarkan</a>
        </div>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Admin\Documents\PROJECT LARAVEL\eklinikadel\resources\views/daftar/index.blade.php ENDPATH**/ ?>