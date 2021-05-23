<!--
=========================================================
* Argon Dashboard - v1.2.0
=========================================================
* Product Page: https://www.creative-tim.com/product/argon-dashboard


* Copyright  Creative Tim (http://www.creative-tim.com)
* Coded by www.creative-tim.com



=========================================================
* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html >

@include('include.head')

<body  >
<!-- Sidenav -->
@include('include.nav-side')
<!-- Main content -->
<div class="main-content" id="panel" >
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-green border-bottom">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Search form -->
            <!-- Navbar links -->
                @include('include.navbar')
            </div>
        </div>
    </nav>
    <!-- Header -->
    <!-- Header -->
    <div class="header pb-6 bg-green">
        <div class="container-fluid">
            <div class="header-body" >
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7 ">

                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6 ">
       @yield('content')
        @include('sweetalert::alert')
        @include('include.footer')
    </div>
</div>
<!-- Argon Scripts -->
<!-- Core -->

</body>

</html>
