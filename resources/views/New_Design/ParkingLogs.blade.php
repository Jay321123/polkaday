@extends('layouts.Parkerlogs_Layout')

@section( 'content')

<div class="row">
  

  

<style>
  table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
     
  }
  
  td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 10px;
  }
  
  tr:nth-child(even) {
    background-color: #dddddd;
  }
  </style>
  <body>
    <div>
                   
      <form  action="{{ url('/parkerslogs') }}" method="GET">
          @csrf
      <h3 class="mb-0"><b> Parker Logs </b></h3>
      <a href="/sample-report" class="btn btn-primary m-4">Generate Report</a>
      <input type="search" placeholder="Search parker.." name="search">
          <button type="search"><i class="fa fa-search"></i></button>
          
  </form>
  
  </div>
  
  <table>
    <tr style="background-color: transparent">
      <th>Action</th>
      <th>Drivers Name</th>
      <th>student_id</th>
      <th>Date Time in</th>
      <th>Date Time out</th>
      <th>owners name</th>
      
    </tr>
 @foreach($parkers as $parker)
 <tr style="background-color: transparent">
   <td><button class="btn btn-primary">Notify owner</button> </td>
  <td style="background-color: transparent">{{ $parker->student->firstname}} {{ $parker->student->lastname }}</td>
  <td style="background-color: transparent">{{ $parker->student->id_number }}</td>
  <td style="background-color: transparent">{{ $parker->dateTime_in }}</td>
  <td style="background-color: transparent">{{ $parker->dateTime_out }}</td>
  <td style="background-color: transparent">{{ $parker->owner_name }}</td>
</tr>
 @endforeach
    
    
  </table>
  
  </body>
  
</div>



@endsection