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
    <?php echo $__env->make('templates.partials.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </head>
  <body >
    <script src="./dist/js/demo-theme.min.js?1684106062"></script>
    <div class="page">
      <!-- Navbar -->
      
      <div class="page-wrapper">
        <!-- Page header -->
        <?php echo $__env->make('templates.partials.DashboardUser', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- Page body -->
        <div class="container-xl">
          <?php echo $__env->yieldContent('content'); ?>
        </div>
        <footer class="footer footer-transparent d-print-none">
          <?php echo $__env->make('templates.partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </footer>
      </div>
    </div>
    
    <!-- Libs JS -->
      <?php echo $__env->make('templates.partials.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </body>
</html>
<?php /**PATH C:\Users\Admin\Documents\PROJECT LARAVEL\eklinikadel\resources\views/templates/user.blade.php ENDPATH**/ ?>