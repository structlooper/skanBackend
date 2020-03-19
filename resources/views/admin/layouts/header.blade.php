<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
 
  <title>@yield('adminTitle')</title>
 
  {{-- including page specific css --}}
  @yield('adminStyleCss')
 
  <!-- General CSS Files -->
  <link rel="stylesheet" href={{ url("assets/css/app.min.css") }}>
  <!-- Template CSS -->
  <link rel="stylesheet" href={{ url("assets/css/style.css") }}>
  <link rel="stylesheet" href={{ url("assets/css/components.css") }}>
  <!-- Custom style CSS -->
  <link rel="stylesheet" href={{ url("assets/css/custom.css") }}>
  <link rel='shortcut icon' type='image/x-icon' href="assets/img/favicon.ico' ")>
</head>

<body>
  <div class="loader"></div>
    @yield('adminBody')


    <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2019 <div class="bullet"></div> Design By <a href="#">Redstar</a>
        </div>
        <div class="footer-right">
        </div>
      </footer>
    </div>
  </div>
  
  <!-- General JS Scripts -->
  
  
  
  <script src={{ url("assets/js/app.min.js") }}> </script>
  <!-- JS Libraies -->
  <script src={{ url("assets/bundles/apexcharts/apexcharts.min.js") }}></script>
  <!-- Page Specific JS File -->
  <script src={{ url("assets/js/page/index.js") }}></script>
  <!-- Template JS File -->
  <script src={{ url("assets/js/scripts.js") }}></script>
  <!-- Custom JS File -->
  <script src={{ url("assets/js/custom.js") }}></script>
  @yield('adminJsFile')

</body>


</html>