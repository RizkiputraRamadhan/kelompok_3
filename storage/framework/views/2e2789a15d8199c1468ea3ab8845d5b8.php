<?php $__env->startSection('title', 'Pendaftaran Pasien'); ?>
<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-sm-6 mb-3 mb-sm-0">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title"> Tindakan</h5>
          <p class="card-text">Jumlah keseluruhan data : .</p>
          <a href="/tindakan" class="btn btn-primary"> Tindakan</a>
        </div>
      </div>
    </div>
    <div class="col-sm-6  mb-3">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Rawat Jalan</h5>
          <p class="card-text">Jumlah keseluruhan data : .</p>
          <a href="/rawatjalan" class="btn btn-primary">Rawat Jalan</a>
        </div>
      </div>
    </div>
    <div class="col-sm-6  mb-3">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Poli</h5>
          <p class="card-text">Jumlah keseluruhan data : .</p>
          <a href="/poli" class="btn btn-primary">Poli</a>
        </div>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Admin\Documents\project laravel\eklinikadel\resources\views/RawatJalan/index.blade.php ENDPATH**/ ?>