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

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
</head>

<body>
<!-- Sidenav -->
@include('sweetalert::alert')

<!-- Main content -->
<div class="main-content" id="panel"  >
    <!-- Topnav -->
   
    <!-- Page content -->
    <div class="container-fluid bg-green">
            <div class="col ml-auto mr-auto" >
                <div class="card card-upgrade bg-green">
                    <div class="card-header text-center border-bottom-0 bg-green" >
                       <h4 class="card-title" style="color: black"><b>Register Vehicle </b> </h4>
{{--                        <p class="card-category">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur cupiditate excepturi, quae quidem suscipit tempore veniam veritatis? </p>--}}
                    </div>
                    <div class="card-body" >
                        <form method="post" action="{{route('parker')}}" name="myForm" >
                            @csrf
                            {{-- <h6 class="heading-small text-muted mb-4">Personal information</h6> --}}
                            <div class="pl-lg-4" >
                                <div class="row" >
                                    
                                    <div class="col-lg-10 " >
                                        
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-first-name" style="color: black" black><b>Owner's Name</b> </label>
                                             <input type="text" id="input-first-name" class="form-control @error('owner_name') is-invalid @enderror" placeholder="Owner Name" value="" name="owner_name" required>
                                            @error('owner_name')
                                            <span class="invalid-feedback" role="alert">
                                                 <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label class="form-control-label" for="input-first-name" style="color: black"><b>Plate Number </b> </label>
                                             <input type="text" id="input-first-name" class="form-control @error('plate_number') is-invalid @enderror" placeholder="Plate Number" value="" name="plate_number" required>
                                            @error('plate_number')
                                            <span class="invalid-feedback" role="alert">
                                                 <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-first-name" style="color: black"><b> phone number</b></label>
                                             <input max="11" type="number"  id="input-first-name" class="form-control @error('phone_number') is-invalid @enderror" placeholder="Phone Number" value="" name="phone_number" $required>
                                            @error('phone_number')
                                            <span class="invalid-feedback" role="alert">
                                                 <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="title" style="color: black"><b> Select Vehicle Type</b></label>
                                            <select name="state" class="form-control" style="width:350px" name="vehicle_model_id">
                                                <option value="">--- Select Vehicle Type ---</option>
                                                @foreach ($states as $key => $value)
                                                    <option value="{{ $key }}">{{ $value }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="title" style="color: black"><b> Select Brand:</b></label>
                                            <select name="city" class="form-control" style="width:350px">
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="title" style="color: black"><b> Select Color:</b></label>
                                            <select name="color" class="form-control" style="width:350px">
                                                <option value="red">Red</option>
                                                <option value="yellow">Yellow</option>
                                                <option value="white">White</option>
                                                <option value="blue">Blue</option>
                                                <option value="green">Green</option>
                                            </select>
                                        </div>
                                        {{-- <div class="form-group">
                                            <label for="title" style="color: black"><b> Select Department:</b></label>
                                            <select name="color" class="form-control" style="width:350px">
                                                <option value="cete">CETE</option>
                                                <option value="ccje">CCJE</option>
                                                <option value="cbma">CBMA</option>
                                                <option value="cte">CTE</option>
                                            </select>
                                        </div> --}}
                                        <div class="form-group"> 
                                            <label for="title" style="color: black"><b> Select Department</b></label>
                                              <div class="checkbox  ">
                                                <label class="form-checkbox form-icon" for="s_fac">
                                                    CETE
                                                </label>
                                                <input id="s_fac" type="checkbox" value="cete"  name="department" class="sev_check">
                                            </div>
                                            <div class="checkbox">
                                                <label class="form-checkbox form-icon" for="s_fac1">
                                                   CCJE
                                                </label>
                                                <input id="s_fac1" type="checkbox"  value="ccje"   name="department"  class="sev_check">
                                            </div>
                                            <div class="checkbox">
                                                <label class="form-checkbox form-icon" for="s_fac2">
                                                    CBMA
                                                </label>
                                                <input id="s_fac2" type="checkbox"  value="cbma"  name="department" class="sev_check">
                                            </div>

                                            <div class="checkbox">
                                                <label class="form-checkbox form-icon" for="s_fac3">
                                                    CTE 
                                                </label>
                                                <input id="s_fac3" type="checkbox"  value="cte" name="department"   class="sev_check">
                                            </div>

                                        </div>
                                        <div class="form-group">
                                            <label for="title" style="color: black"><b> Select Type Of Parker:</b></label>
                                            <select name="parker_type" class="form-control" style="width:350px">
                                                <option value="student">Student</option>
                                                <option value="employee">Employee</option>
                                            
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

<script type="text/javascript">
$(function () {
  $('.sev_check').click(function(e) {
    $('.sev_check').not(this).prop('checked', false);
  });
});


    $(document).ready(function() {
        $('select[name="state"]').on('change', function() {
            var stateID = $(this).val();
            if(stateID) {
                $.ajax({
                    url: '/myform/ajax/'+stateID,
                    type: "GET",
                    dataType: "json",
                    success:function(data) {

                        
                        $('select[name="city"]').empty();
                        $.each(data, function(key, value) {
                            $('select[name="city"]').append('<option value="'+ key +'">'+ value +'</option>');
                        });


                    }
                });
            }else{
                $('select[name="city"]').empty();
            }
        });
    });
</script>

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
