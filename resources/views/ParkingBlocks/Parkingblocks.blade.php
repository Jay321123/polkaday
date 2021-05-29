@extends('layouts.MotorcycleBlocks')

@section( 'content')
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Float four columns side by side */
.column {
  float: left;
  width: 25%;
  padding: 0 10px;
}

/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color: #f1f1f1;
}
</style>
</head>
<body >


<div class="col s12 m3 ">
  <div class="col s12 m3 ">
    <div class="card ">
      <h3>Parking Status</h3>
      <p></p>
    </div>
  </div>
</div>
<div class="container ">
    <div class="row ">
        <div class="col">
          <div class="card">
              <h3>Motor Blocks</h3>
              <div class="row">
                @foreach($firsts as $motor)
                  @if($motor->status =='occupied')
                  <div class="col bg-danger m-2 p-5">{{ $motor->slot_name }}</div>
                  @else
                  <div class="col bg-primary m-2 p-5">{{ $motor->slot_name }}</div>
                  @endif
                @endforeach
                 </div>
          </div>

          <div class="card">
            <h3>Car Blocks</h3>
            <div class="row">
              <div class="w-100"></div>
              @foreach($secondaries as $car)
              @if($car->status =='occupied')
              <div class="col bg-danger m-2 p-5">{{ $car->slot_name }}</div>
              @else
              <div class="col bg-warning m-2 p-5">{{ $car->slot_name }}</div>
              @endif
              @endforeach
            </div>
        </div>
        </div>
    
            
      
      <div class="w-100 "></div>
    </div>
  </div>
@endsection