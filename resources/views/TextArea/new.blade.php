@extends('layouts.RegisteredVehicle')

@section('section')
<style>
    #customers {
      font-family: Arial, Helvetica, sans-serif;
      border-collapse: collapse;
      width: 100%;
      margin-top: 15%;
    }
    
    #customers td, #customers th {
      border: 1px solid #ddd;
      padding: 8px;
    }
    
    #customers tr:nth-child(even){background-color: #f2f2f2;}
    
    #customers tr:hover {background-color: #ddd;}
    
    #customers th {
      padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #4CAF50;
      color: white;
    }
    </style>

<table id="customers">
    <tr>
      <th>owner_name</th>
      <th>ID_number</th>
      <th>Plate_number</th>
      <th>Phone_number</th>
    </tr>
    @foreach($parkers as $parker)
    <tr>
        <td>{{ $parker->owner_name }}</td>
        <td>{{ $parker->school_id }}</td>
        <td>{{ $parker->phone_number }}</td>
        <td>{{ $parker->plate_number }}</td>
      </tr>
    @endforeach
    

  
  </table>
@endsection