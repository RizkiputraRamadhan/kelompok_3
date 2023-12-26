<header class="navbar navbar-expand-md d-print-none rounded-pill">
    <div class="container-xl">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu"
            aria-controls="navbar-menu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-md-3 pe-0">
            <a href="">
               Homestay
            </a>
        </h1>
        <div class="navbar-nav order-md-last flex-row">
            
            <div class="nav-item dropdown">
                <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown"
                    aria-label="Open user menu">
                    <span class="avatar avatar-sm" style="background-image: url(./static/avatars/000m.jpg)"></span>
                    <div class="d-none d-xl-block ps-2">
                        <div><?php echo e(Auth::user()->name ?? ''); ?></div>
                        <div class="small text-muted mt-1"><?php echo e(Auth::user()->email ?? ''); ?></div>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <form action="<?php echo e(route('logout')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <button type="submit" class="dropdown-item">Logout</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</header>
<?php /**PATH C:\Users\Admin\Documents\PROJECT LARAVEL\HomeStay V2 - Copy\resources\views/templates/partials/DashboardUser.blade.php ENDPATH**/ ?>