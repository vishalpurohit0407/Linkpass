<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>{{ config('app.name', 'Linkpasser') }}</title>
  <!-- Favicon -->
  <link rel="icon" href="{{asset('assets/img/favicon.png')}}" type="image/png">

  <!-- Old CSS : START -->
  <!-- Fonts -->
  {{-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="{{asset('assets/vendor/nucleo/css/nucleo.css')}}" type="text/css">
  <link rel="stylesheet" href="{{asset('assets/vendor/@fortawesome/fontawesome-free/css/all.min.css')}}" type="text/css">
  <!-- Page plugins -->
  <link rel="stylesheet" href="{{asset('assets/vendor/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/vendor/datatables.net/css/responsive.dataTables.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/vendor/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/vendor/datatables.net-select-bs4/css/select.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/vendor/sweetalert2/dist/sweetalert2.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/vendor/select2/dist/css/select2.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/vendor/lightgallery/css/lightgallery.css')}}" type="text/css">
  <!-- Argon CSS -->
  <link rel="stylesheet" href="{{asset('assets/css/argon.css?v=1.1.0')}}" type="text/css">

  <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}" type="text/css"> --}}
  <!-- Old CSS : END -->

  <!-- New CSS : START -->
  <!-- Owl Stylesheets -->
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/slick.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/slick-theme.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/owl.carousel.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/owl.theme.default.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/bootstrap-tagsinput/dist/bootstrap-tagsinput.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/sweetalert2/dist/sweetalert2.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/dropzone/dist/min/dropzone.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/select2/dist/css/select2.min.css')}}">

  <!-- datatables CSS -->
  <link rel="stylesheet" href="{{asset('assets/vendor/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/vendor/datatables.net/css/responsive.dataTables.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/vendor/datatables.net/css/responsive.bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/vendor/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/vendor/datatables.net-select-bs4/css/select.bootstrap4.min.css')}}">

  <!-- Fonts Fontawesome -->
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/fontawesome-all.css')}}">

  <link rel="stylesheet" href="{{asset('assets/css/front-custom.css')}}" type="text/css">

  <!-- CSS bootstrap Plugin  -->
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}">
  <link rel="stylesheet" type="text/css" media="all" href="{{asset('assets/css/stellarnav.css')}}">
  <!-- Animation STYLESHEETS-->

  <!-- Style -->
  <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">

  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <script src="{{asset('assets/js/ie10-viewport-bug-workaround.js')}}"></script>

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
        <script src="{{asset('assets/js/html5shiv.js')}}"></script>
        <script src="{{asset('assets/js/respond.min.js')}}"></script>
      <![endif]-->
<!-- New CSS : END -->

<!-- HEADER SCRIPTS	-->
  @yield('pagewise_css')
</head>

<body>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>

  <!-- Main content -->
  <div id="wrapper">
    @include('layouts.header')
    <!-- Header -->
    <!-- Header -->
    @yield('content')

    @include('layouts.footer')
    <a id="backtop"></a>
  </div>

  <!-- Old JS : START -->
  <!-- Argon Scripts -->
  <!-- Core -->
  {{-- <script src="{{asset('assets/vendor/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/js-cookie/js.cookie.js')}}"></script>
  <script src="{{asset('assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js')}}"></script>
  <script src="{{asset('assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js')}}"></script>

  <script src="{{asset('assets/vendor/dropzone/dist/min/dropzone.min.js')}}"></script>
  <!-- <script src="{{asset('assets/vendor/dropzone-1/dropzone.js')}}"></script> -->

  <script src="{{asset('assets/vendor/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js')}}"></script>

  <!-- Optional JS -->
  <script src="{{asset('assets/vendor/datatables.net/js/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('assets/vendor/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
  <script src="{{asset('assets/vendor/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
  <script src="{{asset('assets/vendor/datatables.net/js/dataTables.responsive.min.js')}}"></script>
  <script src="{{asset('assets/vendor/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js')}}"></script>
  <script src="{{asset('assets/vendor/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
  <script src="{{asset('assets/vendor/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>
  <script src="{{asset('assets/vendor/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
  <script src="{{asset('assets/vendor/datatables.net-select/js/dataTables.select.min.js')}}"></script>
  <script src="{{asset('assets/vendor/chart.js/dist/Chart.min.js')}}"></script>
  <script src="{{asset('assets/vendor/chart.js/dist/Chart.extension.js')}}"></script>
  <script src="{{asset('assets/vendor/sweetalert2/dist/sweetalert2.min.js')}}"></script>
  <script src="{{asset('assets/vendor/select2/dist/js/select2.min.js')}}"></script>
  <script src="{{asset('assets/vendor/quill/dist/quill.min.js')}}"></script>
  <script src="{{asset('assets/vendor/lightgallery/js/lightgallery-all.js')}}"></script>
  <!-- Argon JS -->
  <script src="{{asset('assets/js/argon.js?v=1.1.0')}}"></script>
  <!-- Demo JS - remove this in your project -->
  <script src="{{asset('assets/js/demo.min.js')}}"></script> --}}
  <!-- Setup of jquery JS -->
  <!-- Old JS : END -->

  <!-- New JS : START -->
  <script src="{{asset('assets/js/jquery-3.3.1.min.js')}}"></script>
  <script src="{{asset('assets/js/moment.min.js')}}"></script>
  <script src="{{asset('assets/js/popper.min.js')}}"></script>

  <!-- Setup of Bootstrap JS -->
  <script type="text/javascript" src="{{asset('assets/js/bootstrap.min.js')}}"></script>
  <!-- Setup of Slider JS -->
  <script src="{{asset('assets/js/slick.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('assets/js/owl.carousel.js')}}" type="text/javascript"></script>

  <!-- datatables JS -->
  <script src="{{asset('assets/vendor/datatables.net/js/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('assets/vendor/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
  <script src="{{asset('assets/vendor/datatables.net/js/dataTables.responsive.min.js')}}"></script>
  <script src="{{asset('assets/vendor/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
  <script src="{{asset('assets/vendor/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js')}}"></script>
  <script src="{{asset('assets/vendor/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
  <script src="{{asset('assets/vendor/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>
  <script src="{{asset('assets/vendor/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
  <script src="{{asset('assets/vendor/datatables.net-select/js/dataTables.select.min.js')}}"></script>

  <script src="{{asset('assets/vendor/dropzone/dist/min/dropzone.min.js')}}"></script>
  <script src="{{asset('assets/vendor/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js')}}"></script>
  <script src="{{asset('assets/vendor/sweetalert2/dist/sweetalert2.min.js')}}"></script>
  <script src="{{asset('assets/vendor/select2/dist/js/select2.min.js')}}"></script>


  <!-- Setup of Menu JS -->
  <script type="text/javascript" src="{{asset('assets/js/stellarnav.js')}}"></script>
  <!-- Setup of Custom JS -->
  <script type="text/javascript" src="{{asset('assets/js/custom.js')}}"></script>

  <script src="{{asset('assets/vendor/js-cookie/js.cookie.js')}}"></script>
  <script src="{{asset('assets/js/argon.js?v=1.1.0')}}"></script>
  <!-- New JS : END -->
  <script>
    var btn = $('#backtop');

    $(window).scroll(function() {
      if ($(window).scrollTop() > 300) {
        btn.addClass('show');
      } else {
        btn.removeClass('show');
      }
    });

    btn.on('click', function(e) {
      e.preventDefault();
      $('html, body').animate({scrollTop:0}, '300');
    });
  </script>
  @yield('pagewise_js')
</body>

</html>