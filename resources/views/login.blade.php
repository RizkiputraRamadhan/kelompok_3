<!doctype html>
<html lang="en">

<head>
    @include('templates.partials.head')
</head>

<body>
    <script src="./dist/js/demo-theme.min.js?1684106062"></script>
    <div class="page">
        <!-- Navbar -->
        <header>
            @include('templates.partials.navbar')
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

                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @elseif(session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif
                        <div class="col-md-10 mx-auto col-lg-5">
                            <form action="/login" method="post" class="p-4 p-md-5 border rounded-3 bg-light">
                                @csrf
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
                @include('templates.partials.footer')
            </footer>
        </div>
    </div>
    @include('templates.partials.script')
</body>

</html>