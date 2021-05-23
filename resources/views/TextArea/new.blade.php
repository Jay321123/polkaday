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
      color:black;
    }
    tra
    #customers tr:nth-child(even){background-color: transparent;}
    
    #customers tr:hover {background-color: whitesmoke; opacity: ;}
    
    #customers th {
      padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: white;
      color: black;
    }
    button {

  font-size: 14px;
  text-align: center;
  cursor: pointer;
  color: #fff;
  background-color: #def1ea;
  
  border-radius: 15px;
  
}

.button:hover {background-color: #3e8e41}

.button:active {
  background-color: #3e8e41;

  transform: translateY(5px);
}
    </style>

<br>
<br>
<br>
<form  action="/searchOwner" method="get">
<input type="text" placeholder="Search ID number.." name="school_id">
<button type="submit"><i class="fa fa-search"></i></button>
</form>
<table id="customers" >
    <tr>
      
      <th>actiom</th>
      <th>owners name</th>
      <th>id number</th>
      <th>plate number</th>
      <th>contact number</th>

    </tr>  
     @if(count($parkers) <= 0)
    <h2 class="text-green">ID Number Not Found!</h2>
    @endif
    @foreach($parkers as $parker)
    <tr>
      <td>
        <a href="/notify/{{ $parker->id }}" class="btn btn-primary"
          style="background-color: #2dce89
          ; color: black">
          <b> Notify owner</b>
      </a>
      </td>
        <td>{{ $parker->owner_name }}</td>
        <td>{{ $parker->school_id }}</td>
        <td>{{ $parker->plate_number }}</td>
        <td>{{ $parker->phone_number }}</td>
      </tr>

    @endforeach
    

  
  </table>
 
@endsection