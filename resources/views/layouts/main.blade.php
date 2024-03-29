<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Components / Accordion - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ URL::asset('assets/vendor/bootstrap/css/bootstrap.min.css'); }}" rel="stylesheet">
  <link href="{{ URL::asset('assets/vendor/bootstrap-icons/bootstrap-icons.css'); }}" rel="stylesheet">
  <link href="{{ URL::asset('assets/vendor/boxicons/css/boxicons.min.css'); }}" rel="stylesheet">
  <link href="{{ URL::asset('assets/vendor/quill/quill.snow.css'); }}" rel="stylesheet">
  <link href="{{ URL::asset('assets/vendor/quill/quill.bubble.css'); }}" rel="stylesheet">
  <link href="{{ URL::asset('assets/vendor/remixicon/remixicon.css'); }}" rel="stylesheet">
  <link href="{{ URL::asset('assets/vendor/simple-datatables/style.css'); }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ URL::asset('assets/css/style.css'); }}" rel="stylesheet">

  {{-- Trix Editor --}}
  <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.8/dist/trix.css">
  <script type="text/javascript" src="https://unpkg.com/trix@2.0.8/dist/trix.umd.min.js"></script>
</head>
<style>
  trix-toolbar [data-trix-button-group="file-tools"] {
    display: none;
  }
</style>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    @include('layouts.header')

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    @include('layouts.sidebar')

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    @yield('container')

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ URL::asset('assets/vendor/apexcharts/apexcharts.min.js'); }}"></script>
  <script src="{{ URL::asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js'); }}"></script>
  <script src="{{ URL::asset('assets/vendor/chart.js/chart.umd.js'); }}"></script>
  <script src="{{ URL::asset('assets/vendor/echarts/echarts.min.js'); }}"></script>
  <script src="{{ URL::asset('assets/vendor/quill/quill.min.js'); }}"></script>
  <script src="{{ URL::asset('assets/vendor/simple-datatables/simple-datatables.js'); }}"></script>
  <script src="{{ URL::asset('assets/vendor/tinymce/tinymce.min.js'); }}"></script>
  <script src="{{ URL::asset('assets/vendor/php-email-form/validate.js'); }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ URL::asset('assets/js/main.js'); }} "></script>
</body>

</html>