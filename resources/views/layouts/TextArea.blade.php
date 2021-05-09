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

<body style="background-image: url(Logo.png), url(qqqqqqqqqqqqqqqqqqqqqq.png);
background-position: top right , left top;
background-repeat: no-repeat, repeat;" >

<!-- Sidenav -->

@include('include.nav-side')
<!-- Main content -->
<div class="main-content" id="panel">

    <!-- Topnav -->
 
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
    <div>
        <div class="container-fluid">
            <div class="header-body" >
                
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                        <div>
                            <div > 
                            <H1 style="color: green;"><b>Mission</b></H1>
                        </div>
                        <Div>
                        <P style="color: green"><B>
                            As a Filipino, non-sectarian educational institution, founded on the teaching of God, Holy Trinity College is committed to empower the person to be self-reliant, productive, morally-upright and socially-responsible member of the society.</B></P>
                        </Div>
                        <div> 
                            <H1 style="color: green;"><b>Vision</b></H1>
                        </div>
                        <Div>
                        <P style="color: green"><B>
                            Holy Trinity College of General Santos City is a leading educational institution and an internationally recognized provider of quality, accessible and relevant education towards the holistic development of its graduates.</B></P>
                        </Div>
                        
                            </Div>
                        
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Page content -->
   
</div>
<!-- Argon Scripts -->
<!-- Core -->
<script src="{{asset('assets/vendor/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/vendor/js-cookie/js.cookie.js')}}"></script>
<script src="{{asset('assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js')}}"></script>
<script src="{{asset('assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js')}}"></script>
<!-- Argon JS -->
<script src="{{asset('assets/js/argon.js?v=1.2.0')}}"></script>
</body>

</html>
