<!DOCTYPE html>
<html>

<head >
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <title>Parking System</title>
    <!-- Favicon -->
    <link rel="icon" href="../assets/img/brand/favicon.png" type="image/png">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Icons -->
    <link rel="stylesheet" href="../assets/vendor/nucleo/css/nucleo.css" type="text/css">
    <link rel="stylesheet" href="../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
    <!-- Argon CSS -->
    <link rel="stylesheet" href="../assets/css/argon.css?v=1.2.0" type="text/css" >
</head>

<body>
<!-- Sidenav -->
@include('sweetalert::alert')

<!-- Main content -->
<div class="main-content" id="panel"  >
    <!-- Topnav -->
   
    <!-- Page content -->
    <div class="container-fluid ">
            <div class="col ml-auto mr-auto" >
                <div class="card card-upgrade">
                    <div class="card-header text-center border-bottom-0" >
                       <h4 class="card-title">Register Vehicle</h4>
{{--                        <p class="card-category">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur cupiditate excepturi, quae quidem suscipit tempore veniam veritatis? </p>--}}
                    </div>
                    <div class="card-body" >
                        <form method="post" action="{{route('parker')}}" name="myForm" >
                            @csrf
                            {{-- <h6 class="heading-small text-muted mb-4">Personal information</h6> --}}
                            <div class="pl-lg-4" >
                                <div class="row" >
                                    
                                    <div class="col-lg-10" >
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-first-name">School ID</label>
                                             <input type="number" id="input-first-name" class="form-control @error('school_id') is-invalid @enderror" placeholder="School ID" value="" name="school_id" required>
                                            @error('school_id')
                                            <span class="invalid-feedback" role="alert">
                                                 <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-first-name">Owner's Name</label>
                                             <input type="text" id="input-first-name" class="form-control @error('owner_name') is-invalid @enderror" placeholder="Owner Name" value="" name="owner_name" required>
                                            @error('owner_name')
                                            <span class="invalid-feedback" role="alert">
                                                 <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label class="form-control-label" for="input-first-name">Plate Number</label>
                                             <input type="text" id="input-first-name" class="form-control @error('plate_number') is-invalid @enderror" placeholder="Plate Number" value="" name="plate_number" required>
                                            @error('plate_number')
                                            <span class="invalid-feedback" role="alert">
                                                 <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="sel1">Vehicle brand</label>
                                            <select class="form-control" name="vehicle_type">
                                                @foreach ($vehicle_types as $type)
                                                    <option value="{{ $type->id }}">{{ $type->brand_name }}</option>
                                                @endforeach
        
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="sel1">Vehicle Model</label>
                                            <select class="form-control" name="model">
                                                @foreach ($vehicle_types as $type)
                                                    <option value="{{ $type->id }}">{{ $type->model }}</option>
                                                @endforeach
        
                                            </select>
                                        </div>
                                    </div>
                               
                                </div>
                            </div>
           
                            
                            <hr class="my-4" />

                            <input type="button" value="Submit" class="btn btn-default" id="btnsubmit" onclick="submitForm()">

                        </form>
                        <a href="/home" class="btn btn-primary mt-3"> Back </a>
                    </div>
                </div>
            </div>
     
    </div>
</div>
<!-- Argon Scripts -->
<!-- Core -->
<script src="../assets/vendor/jquery/dist/jquery.min.js"></script>
<script src="../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="../assets/vendor/js-cookie/js.cookie.js"></script>
<script src="../assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
<script src="../assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
<!-- Argon JS -->
<script src="../assets/js/argon.js?v=1.2.0"></script>

<script>
    // function myFunction() {
    //     document.getElementById("myForm").reset();
    // }
    // $('#myForm')[0].reset();
    function submitForm() {
        // Get the first form with the name
        // Usually the form name is not repeated
        // but duplicate names are possible in HTML
        // Therefore to work around the issue, enforce the correct index
        var frm = document.getElementsByName('myForm')[0];
        frm.submit(); // Submit the form
        frm.reset();  // Reset all form data
        return false; // Prevent page refresh
    }
</script>
</body>

</html>
