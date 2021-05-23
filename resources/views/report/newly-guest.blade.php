<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style type="text/css" media="all">

        table, td, th {
            border: 1px solid black;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }
        * {box-sizing: border-box;}

        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
        }

        .header {
            overflow: hidden;
            background-color: #f1f1f1;
            padding: 20px 10px;
        }

        .header a {
            float: left;
            color: black;
            text-align: center;
            padding: 12px;
            text-decoration: none;
            font-size: 18px;
            line-height: 25px;
            border-radius: 4px;
        }

        .header a.logo {
            font-size: 25px;
            font-weight: bold;
        }

        .header a:hover {
            background-color: #ddd;
            color: black;
        }

        .header a.active {
            background-color: dodgerblue;
            color: white;
        }

        .header-right {
            float: right;
        }

        @media screen and (max-width: 500px) {
            .header a {
                float: none;
                display: block;
                text-align: left;
            }

            .header-right {
                float: none;
            }
        }
        .button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}

.button1 {
  background-color: white; 
  color: black; 
  border: 2px solid #4CAF50;
}

.button1:hover {
  background-color: #4CAF50;
  color: white;
}

.button2 {
  background-color: white; 
  color: black; 
  border: 2px solid #008CBA;
}

.button2:hover {
  background-color: #008CBA;
  color: white;
}

.button3 {
  background-color: white; 
  color: black; 
  border: 2px solid #f44336;
}

.button3:hover {
  background-color: #f44336;
  color: white;
}

.button4 {
  background-color: white;
  color: black;
  border: 2px solid #e7e7e7;
}

.button4:hover {background-color: #e7e7e7;}

.button5 {
  background-color: white;
  color: black;
  border: 2px solid #555555;
}

.button5:hover {
  background-color: #555555;
  color: white;
}
    </style>
</head>
<body>

<div class="header" style="text-align: center">
    <h1>List Of All People Parked</h1>
    {{-- <p>Resize the browser window to see the effect.</p> --}}
</div>
<hr>
<br>
<br>

{{--<div style="padding-left:20px">--}}
{{--    <h1>Responsive Header</h1>--}}
{{--    <p>Resize the browser window to see the effect.</p>--}}
{{--</div>--}}

<table>
    <tr>
        <th>Driver's Name</th>
        <th>Parker School Id</th>
        <th>Date Time out</th>
        <th>Date  Time In</th>
        <th>Plate Number</th>
        <th>Owner's Name</th>


    </tr>
    @foreach($users as $user)
    <tr>
            <td>{{$user->student->firstname}} {{$user->student->lastname}}</td>
            <td>{{$user->student->id_number}}</td>
            <td>{{$user->dateTime_out}}</td>
            <td>{{$user->dateTime_in}}</td>
            <td>{{$user->plate_number}}</td>
            <td>{{$user->owner_name}}</td> 
            
    </tr>
    
    @endforeach


</table>
<div class="card-header border-2">

<a  class="button" href="/home">Dashboard</a>
</div>
</body>
</html>
