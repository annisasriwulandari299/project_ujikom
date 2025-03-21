<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tracker Financial</title>
  <link rel="shortcut icon" type="image/png" href="{{asset('user.template/assets/images/logos/favicon.png')}}" />
  <link rel="stylesheet" href="{{asset('user.template/assets/css/styles.min.css')}}" />
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    @include('include.user.backend.sidebar')
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      @include('include.user.backend.navbar')
      <!--  Header End -->
      <div class="container-fluid">
        <!--  Row 1 -->
        @yield('content')
        
      </div>
    </div>
  </div>
  <script src="{{asset('user.template/assets/libs/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{asset('user.template/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('user.template/assets/js/sidebarmenu.js')}}"></script>
  <script src="{{asset('user.template/assets/js/app.min.js')}}"></script>
  <script src="{{asset('user.template/assets/libs/apexcharts/dist/apexcharts.min.js')}}"></script>
  <script src="{{asset('user.template/assets/libs/simplebar/dist/simplebar.js')}}"></script>
  <script src="{{asset('user.template/assets/js/dashboard.js')}}"></script>
</body>

</html>