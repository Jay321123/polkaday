@extends('layouts.table')
@section('content')
<table class="table align-items-center table-flush">
    <thead class="thead-light">
    <tr>
        <th scope="col" class="sort" data-sort="name">Parker Name</th>
        <th scope="col" class="sort" data-sort="name">Parker school ID</th>
        <th scope="col" class="sort" data-sort="name" >Date/Time Entered</th>
       <th scope="col" class="sort" data-sort="name">Date/Time Out</th>
        <th scope="col">Plate Number</th>
    </tr>
    </thead>
    <tbody class="list">
 @if(count($users) <= 0)
    <h2 class="text-red">NO LOGS CREATED!</h2>
 @endif
    @foreach($users as $user)

    <tr>
        <th scope="row">
            <div class="media align-items-center">
                <div class="media-body">
                    <span class="name mb-0 text-sm">{{$user->student->firstname}} {{$user->student->lastname}} </span>
                </div>
            </div>

        </th>
        <th scope="row">
            <div class="media align-items-center">
                <div class="media-body">
                    <span class="name mb-0 text-sm">{{$user->student->id_number}} </span>
                </div>
            </div>

        </th>
        <th scope="row">
            <div class="media align-items-center">
                <div class="media-body">
                    <span class="name mb-0 text-sm">{{$user->dateTime_in}}</span>
                </div>
            </div>

        </th>
        <th scope="row">
            <div class="media align-items-center">
                <div class="media-body">
                    <span class="name mb-0 text-sm">{{$user->dateTime_out}}</span>
                </div>
            </div>

        </th>
        <th scope="row">
            <div class="media align-items-center">
                <div class="media-body">
                    <span class="name mb-0 text-sm">{{$user->plate_number}}</span>
                </div>
            </div>

        </th>
        
        
    </tr>

    @endforeach

    </tbody>
</table>
@endsection