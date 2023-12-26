<!doctype html>
<!--
* Tabler - Premium and Open Source dashboard template with responsive and high quality UI.
* @version 1.0.0-beta19
* @link https://tabler.io
* Copyright 2018-2023 The Tabler Authors
* Copyright 2018-2023 codecalm.net Paweł Kuna
* Licensed under MIT (https://github.com/tabler/tabler/blob/master/LICENSE)
-->
<html lang="en">
  <head>
    @include('templates.partials.head')
  </head>
  <body >
    <script src="./dist/js/demo-theme.min.js?1684106062"></script>
    <div class="page">
      <!-- Navbar -->

      <div class="page-wrapper">
        <!-- Page header -->
        @include('templates.partials.DashboardUser')
        <!-- Page body -->
        <div class="container-xl">
          @yield('content')
        </div>
        <footer class="footer footer-transparent d-print-none">
          @include('templates.partials.footer')
        </footer>
      </div>
    </div>

    <!-- Libs JS -->
      @include('templates.partials.script')
  </body>
</html>
