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
      color:green;
    }
    tra
    #customers tr:nth-child(even){background-color: transparent;}
    
    #customers tr:hover {background-color: whitesmoke; opacity: ;}
    
    #customers th {
      padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #4CAF50;
      color: black;
    }
    button {

  font-size: 14px;
  text-align: center;
  cursor: pointer;
  color: #fff;
  background-color: #04AA6D;
  
  border-radius: 15px;
  
}

.button:hover {background-color: #3e8e41}

.button:active {
  background-color: #3e8e41;

  transform: translateY(5px);
}
    </style>

<table id="customers" >
    <tr>
      <th>actiom</th>
      <th>owners name</th>
      <th>id number</th>
      <th>plate number</th>
      <th>contact number</th>

    </tr>
    @foreach($parkers as $parker)
    <tr>
      <td><button class="button" style="background-color: rgb(60, 201, 60); color: black"><b> Notify owner</b></button></td>
        <td>{{ $parker->owner_name }}</td>
        <td>{{ $parker->school_id }}</td>
        <td>{{ $parker->plate_number }}</td>
        <td>{{ $parker->phone_number }}</td>
      </tr>

    @endforeach
    

  
  </table>
@endsection