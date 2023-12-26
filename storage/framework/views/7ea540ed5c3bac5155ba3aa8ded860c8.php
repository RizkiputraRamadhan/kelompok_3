<!doctype html>
<html lang="en">
<head>
    <?php echo $__env->make('templates.partials.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>
<body>
    <script src="./dist/js/demo-theme.min.js?1684106062"></script>
    <div class="page">
        <!-- Navbar -->
        <header>
            <?php echo $__env->make('templates.partials.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </header>

        <div class="page-wrapper">
            <!-- Page header -->
            <!-- Page body -->
            <div class="container-xl">
                <div class="container col-xl-10 col-xxl-8 px-4 py-5">
                    <div class="row align-items-center g-lg-5 py-5">
                        <div class="col-lg-7 text-center text-lg-start">
                            <h1 class="display-4 fw-bold lh-1 mb-3">Login </h1>
                            <p class="col-lg-10 fs-4">Masuk Untuk Memesan penginapan yang anda harapkan dan pilihan yag
                                tepat adalah kesukaan anda saat ini.</p>
                        </div>
                        <div class="col-md-10 mx-auto col-lg-5">
                            <form action="/login" method="post" class="p-4 p-md-5 border rounded-3 bg-light">
                                <?php echo csrf_field(); ?>
                                <div class="form-floating mb-3">
                                    <input name="email" type="email" class="form-control" id="floatingInput"
                                        placeholder="name@example.com">
                                    <label for="floatingInput">Email address</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input name="password" type="password" class="form-control" id="floatingPassword"
                                        placeholder="Password">
                                    <label for="floatingPassword">Password</label>
                                </div>
                                <button class="w-100 btn btn-lg btn-primary" type="submit">Sign up</button>
                                <hr class="my-4">
                                <small class="text-muted">By clicking Sign up, you agree to the terms of .</small>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer footer-transparent d-print-none">
                <?php echo $__env->make('templates.partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </footer>
        </div>
    </div>
    <?php echo $__env->make('templates.partials.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>

</html>
<?php /**PATH C:\Users\Admin\Documents\PROJECT LARAVEL\HomeStay V2\resources\views/login.blade.php ENDPATH**/ ?>