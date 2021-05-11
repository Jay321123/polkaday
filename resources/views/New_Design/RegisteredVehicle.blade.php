@extends('layouts.RegisteredVehicle_layout')

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
      
        <table>
        <tr style="background-color: transparent">
          <th>Action</th>
          <th>owners name</th>
          <th>owners id number</th>
          <th>phone number</th>
          <th>plate number</th>
          <th>vehicle_type</th>
          
          
        </tr>
     @foreach($parkers as $parker)
     <tr style="background-color: transparent">
       <td><button class="btn btn-primary">Notify owner</button> </td>
      <td>{{ $parker->owner_name}}</td>
      <td>{{ $parker->school_id }}</td>
      <td>{{ $parker->phone_number }}</td>
      <td>{{ $parker->plate_number }}</td>
      <td>{{ $parker->vehicle_type }}</td>
    </tr>
     @endforeach
        
        
      </table>
      
      </body>
      
    </div>
    

@endsection