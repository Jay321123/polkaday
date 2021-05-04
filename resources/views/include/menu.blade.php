<div class="collapse navbar-collapse" id="sidenav-collapse-main">
  <!-- Nav items -->
  <ul>
    <li class="nav-item">
      <a class="nav-link active" href="/home">
        
        <span style="color: green; font-size: 16px"><b> Dashboard </b></span>
      </a>
    </li>
{{--    <li class="nav-item">--}}
{{--      <a class="nav-link" href="{{ route('user.index') }}">--}}
{{--        <i class="ni ni-planet text-orange"></i>--}}
{{--        <span class="nav-link-text">Employee List</span>--}}
{{--      </a>--}}
{{--    </li>--}}
{{--      <li class="nav-item">--}}
{{--          <a class="nav-link" href="examples/tables.html">--}}
{{--              <i class="ni ni-bullet-list-67 text-default"></i>--}}
{{--              <span class="nav-link-text">List of Employees</span>--}}
{{--          </a>--}}
{{--      </li>--}}

{{--    <li class="nav-item">--}}
{{--      <a class="nav-link" href="/register">--}}
{{--        <i class="ni ni-circle-08 text-pink"></i>--}}
{{--        <span class="nav-link-text">Add Employee</span>--}}
{{--      </a>--}}
@include('sweetalert::alert')

      @role('super_admin')
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
             aria-expanded="false">
              <i class="ni ni-circle-08 text-primary"></i>
              <span style="color: green; background-color: grey; font-size: 16px">User List</span>
          </a>
          <div class="dropdown-menu">
              {{-- <a href="/admin" class="nav-link">
                  <i class="ni ni-circle-08 text-yellow"></i>
                  <span class="nav-link-text">Super Admins</span>
              </a>
              <a href="/employee" class="nav-link">
                  <i class="ni ni-single-02 text-yellow"></i>
                  <span class="nav-link-text">Admin</span>
              </a> --}}
              <a href="/user" class="nav-link">
                  <i class="ni ni-single-02 text-yellow"></i>
                  <span style="color: green; font-size: 16px"><b>All User</b></span>
              </a>
          </div>
      </li>
      @endrole
       <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
             aria-expanded="false">
              <i class="ni ni-books text-primary"></i>
              <span style="color: green; font-size: 16px"><b> Report</b></span>
          </a>
          <div class="dropdown-menu">
              <a href="#" class="nav-link">
                  <i class="ni ni-single-02 text-yellow"></i>
                  <span style="color: green; font-size: 16px"><b>Monthly Report</b></span>
              </a>
              <a href="#" class="nav-link">
                  <i class="ni ni-single-02 text-yellow"></i>
                  <span style="color: green; font-size: 16px"><b> Report</b></span>
              </a>
          </div>
      </li> 
      {{-- <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
             aria-expanded="false">
              <i class="ni ni-box-2 text-primary"></i>
              <span class="nav-link-text"> Driver</span>
          </a>
          <div class="dropdown-menu">
              <a href="/people" class="nav-link">
                  <i class="ni ni-single-02 text-yellow"></i>
                  <span class="nav-link-text">Drivers List</span>
              </a>
              <!-- <a href="#" class="nav-link">
                  <i class="ni ni-single-02 text-yellow"></i>
                  <span class="nav-link-text">Weekly Report</span>
              </a> -->
          </div>
      </li> --}}

  </ul>
  <!-- Divider -->
  <hr class="my-3" style="background-color: grey">
  <!-- Heading -->
  <h6 class="navbar-heading p-0 text-muted">
    <span style="color: green; font-size: 16px"><b> LOGS </b></span>
  </h6>
  
  <!-- Navigation -->
  <ul class="navbar-nav mb-md-3">
    
    <li class="nav-item">
      <a class="nav-link" href="/logs/parker"
    >
        <i class="ni ni-spaceship"></i>
        <span style="color: green; font-size: 16px"><b> HTC Parkers Logs </b></span>
      </a>
    </li>
   
    <li class="nav-item">
      <a class="nav-link" href="/scanner-test"
        >
        <i class="ni ni-palette"></i>
        <span style="color: green; font-size: 16px"><b> Scanner Form </b></span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/register/driver"
        >
        <i class="ni ni-palette"></i>
        <span style="color: green; font-size: 16px"><b> Register Driver </b></span>
      </a>
    </li>

    {{-- <li class="nav-item">
      <i class="ni "></i>
      <!-- Button trigger modal -->
      <button type="button" class="btn btn-light text-center text-dark" data-toggle="modal" data-target="#exampleModalCenter">
        Register Driver
      </button>

      <!-- Modal -->
      <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"   aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="max-width: 80%;" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              @include('guest-register')
            </div>
            
          </div>
        </div>
      </div>
    </li>  --}}

{{--    <li class="nav-item">--}}
{{--      <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/components/alerts.html"--}}
{{--        target="_blank">--}}
{{--        <i class="ni ni-ui-04"></i>--}}
{{--        <span class="nav-link-text">Components</span>--}}
{{--      </a>--}}
{{--    </li>--}}
{{--    <li class="nav-item">--}}
{{--      <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/plugins/charts.html"--}}
{{--        target="_blank">--}}
{{--        <i class="ni ni-chart-pie-35"></i>--}}
{{--        <span class="nav-link-text">Plugins</span>--}}
{{--      </a>--}}
{{--    </li>--}}
{{--    <li class="nav-item">--}}
{{--      <a class="nav-link active active-pro" href="examples/upgrade.html">--}}
{{--        <i class="ni ni-send text-dark"></i>--}}
{{--        <span class="nav-link-text">Upgrade to PRO</span>--}}
{{--      </a>--}}
{{--    </li>--}}
  </ul>
</div>
