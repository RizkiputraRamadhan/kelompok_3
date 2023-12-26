<header class="navbar navbar-expand-md d-print-none">
    <div class="container-xl">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu"
            aria-controls="navbar-menu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-md-3 pe-0">
            <a href=".">
                Homesaty Syariah
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
<header class="navbar-expand-md m-auto">
    <div class="navbar-collapse collapse" id="navbar-menu">
        <div class="navbar m-auto">
            <div class="container-xl">
                <ul class="navbar-nav  m-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">
                            <span
                                class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon-tabler icon-tabler-align-box-left-middle" width="24"
                                    height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path
                                        d="M3 3m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v14a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z">
                                    </path>
                                    <path d="M9 15h-2"></path>
                                    <path d="M13 12h-6"></path>
                                    <path d="M11 9h-4"></path>
                                </svg>
                            </span>
                            <span class="nav-link-title">
                                Home
                            </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/room">
                            <span class="nav-link-icon d-md-none d-lg-inline-block">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon-tabler icon-tabler-emergency-bed" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M16 18m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                    <path d="M8 18m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                    <path d="M4 8l2.1 2.8a3 3 0 0 0 2.4 1.2h11.5"></path>
                                    <path d="M10 6h4"></path>
                                    <path d="M12 4v4"></path>
                                    <path d="M12 12v2l-2.5 2.5"></path>
                                    <path d="M14.5 16.5l-2.5 -2.5"></path>
                                </svg>
                            </span>
                            <span class="nav-link-title">
                                Rooms
                            </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/login">
                            <span
                                class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-pills"
                                    width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                    stroke="currentColor" fill="none" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M8 8m-5 0a5 5 0 1 0 10 0a5 5 0 1 0 -10 0"></path>
                                    <path d="M17 17m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0"></path>
                                    <path d="M4.5 4.5l7 7"></path>
                                    <path d="M19.5 14.5l-5 5"></path>
                                </svg>
                            </span>
                            <span class="nav-link-title">
                                Login
                            </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/register">
                            <span
                                class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-pills"
                                    width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                    stroke="currentColor" fill="none" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M8 8m-5 0a5 5 0 1 0 10 0a5 5 0 1 0 -10 0"></path>
                                    <path d="M17 17m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0"></path>
                                    <path d="M4.5 4.5l7 7"></path>
                                    <path d="M19.5 14.5l-5 5"></path>
                                </svg>
                            </span>
                            <span class="nav-link-title">
                                Daftar
                            </span>
                        </a>
                    </li>


                </ul>
            </div>
        </div>
    </div>
</header>
<?php /**PATH C:\Laravel\homestay\kelompok_3\resources\views/templates/partials/navbar.blade.php ENDPATH**/ ?>