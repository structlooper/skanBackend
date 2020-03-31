<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">

  <title>@yield('adminTitle')</title>

  {{-- including page specific css --}}
  @yield('adminStyleCss')

  <!-- General CSS Files -->
  <link rel="stylesheet" href={{ url("public/assets/css/app.min.css") }}>
  <!-- Template CSS -->
  <link rel="stylesheet" href={{ url("public/assets/css/style.css") }}>
  <link rel="stylesheet" href={{ url("public/assets/css/components.css") }}>
  <!-- Custom style CSS -->
  <link rel="stylesheet" href={{ url("public/assets/css/custom.css") }}>
  <link rel='shortcut icon' type='image/x-icon' href={{ url("public/assets/img/favicon.ico' ") }}>
</head>

<body>
  <div class="loader"></div>
    @yield('adminBody')


    <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2020 <div class="bullet"></div> Design By <a href="https://xcrino.com/">Xcrino Business Solutions</a>
        </div>
        <div class="footer-right">
        </div>
      </footer>
    </div>
  </div>

  <!-- General JS Scripts -->



  <script src={{ url("public/assets/js/app.min.js") }}> </script>
  <!-- JS Libraies -->
  <script src={{ url("public/assets/bundles/apexcharts/apexcharts.min.js") }}></script>
  <!-- Page Specific JS File -->
  <script src={{ url("public/assets/js/page/index.js") }}></script>
  <!-- Template JS File -->
  <script src={{ url("public/assets/js/scripts.js") }}></script>
  <!-- Custom JS File -->
  <script src={{ url("public/assets/js/custom.js") }}></script>
  @yield('adminJsFile')

</body>


</html>
