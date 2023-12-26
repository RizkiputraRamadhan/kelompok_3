<?php $__env->startSection('content'); ?>
<main class="bg-light">

    <section id="pesan" class="py-5 text-center container">
      <div class="row py-lg-5">
        <div class="col-lg-6 col-md-8 mx-auto">
          <h1 class="fw-light">Cari Penginapan Yang efisien untuk kamu bermalam.</h1>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <button type="button" class="btn btn-outline-secondary">Cari Room</button>
                </div>
                <input type="text" class="form-control" aria-label="Text input with segmented dropdown button">
              </div>
          </p>
        </div>
      </div>
    </section>

    <div class="album py-5 bg-light">
      <div class="container">

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
          <div class="col">
            <div class="card shadow-sm">
              <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>

              <div class="card-body">
                <p style="font-weight: 700;" class="font-weight-bold">Judul Nama.</p>
                <p class="font-weight-bold">Lorem, ipsum dolor sit amet consectetur adipisicing elit..</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <small class="text-muted">Rp. 200.000</small>
                </div>
                <a href="/detail" class="btn btn-sm btn-outline-secondary">Lihat fasilitas</a>
                </div>
              </div>
            </div>
          </div>
         
        </div>
      </div>
    </div>

  </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Admin\Documents\PROJECT LARAVEL\eklinikadel\resources\views/room.blade.php ENDPATH**/ ?>