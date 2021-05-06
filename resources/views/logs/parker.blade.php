@extends('layouts.table')
@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <!-- Card header -->
                <div class="card-header border-0">
                   
                    <form  action="parker" method="POST">
                        @csrf
                    <h3 class="mb-0">Parker Logs</h3>
                    <a href="/sample-report" class="btn btn-primary m-4">Generate Report</a>
                    <input type="text" placeholder="Search parker.." name="search">
                        <button type="search"><i class="fa fa-search"></i></button>
                        
                </form>
                
                </div>
             
               
                
                    <!-- Light table -->
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                        <tr>
                            <th scope="col" class="sort" data-sort="name">Drivers name</th>
                            <th scope="col" class="sort" data-sort="name">drivers school ID</th>
                            <th scope="col" class="sort" data-sort="name" >Date/Time Entered</th>
                           <th scope="col" class="sort" data-sort="name">Date/Time Out</th>
                            <th scope="col">Plate Number</th>
                            <th scope="col" class="sort" data-sort="name">Owner of vehicle</th>
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
                            <th scope="row">
                                <div class="media align-items-center">
                                    <div class="media-body">
                                        <span class="name mb-0 text-sm">{{$user->owner_name}}</span>
                                    </div>
                                </div>

                            </th>
                            
                            
                            
                        </tr>

                        @endforeach

                        </tbody>
                    </table>
                </div>
                <!-- Card footer -->
                <div class="card-footer py-4">
                    <nav aria-label="...">
                        <ul class="pagination justify-content-end mb-0">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1">
                                    <i class="fas fa-angle-left"></i>
                                    <span class="sr-only">Previous</span>
                                </a>
                            </li>
                            <li class="page-item active">
                                <a class="page-link" href="#">1</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">
                                    <i class="fas fa-angle-right"></i>
                                    <span class="sr-only">Next</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection


