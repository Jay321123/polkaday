<!DOCTYPE html>
<html>

<head>
    @include('include.head')
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
</head>

<body style="background-image: url(qqqqqqqqqqqqqqqqqqqqqq.png)">
  <!-- Sidenav -->
  @include('include.nav-side')
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class=" navbar-expand " >
      <div >
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Search form -->
          @include('include.search')
          <!-- Navbar links -->

        </div>
      </div>
    </nav>
    <!-- Header -->
    <!-- Header -->
    <div class=" py-7" >
     
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
    @include('sweetalert::alert')

    @include('include.content')

    </div>
  </div>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="{{ asset('assets/vendor/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/js-cookie/js.cookie.js') }}"></script>
  <script src="{{ asset('assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js') }}"></script>
  <!-- Optional JS -->
  <script src="{{ asset('assets/vendor/chart.js/dist/Chart.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/chart.js/dist/Chart.extension.js') }}"></script>
  <!-- Argon JS -->
  <script src="{{ asset('assets/js/argon.js?v=1.2.0') }}"></script>
  {{-- DataTables JS --}}
  <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
  @yield('scripts')
</body>

</html>
