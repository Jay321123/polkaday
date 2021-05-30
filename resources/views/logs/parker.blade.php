@extends('layouts.table')
@section('content')


    <div class="row" >
        <div class="col">
            <div >
                <!-- Card header -->
                <div class="card-header border-2 ">
                    <a href="/sample-report" class="btn btn-primary m-4">Generate Report</a>
                    <form  action="/search" method="get">
                        @csrf
                    <h3 class="mb-0">Parker Logs</h3>
                       <input type="text" placeholder="Search parker.." name="plate_number">
                        <button type="submit"><i class="fa fa-search"></i></button>
                       
                </form>
                
                </div>
             
                
                    <!-- Light table -->
                <div class="table-responsive "  >
                    <table class="table align-items-center table-flush " >
                        <thead class="thead-light " >
                        <tr>
                            <th scope="col" class="sort" data-sort="name" >color</th>
                            <th scope="col" class="sort" data-sort="name" >department</th>
                            <th scope="col" class="sort" data-sort="name" >Date/Time Entered</th>
                           <th scope="col" class="sort" data-sort="name">Date/Time Out</th>
                            <th scope="col">Plate Number</th>
                            <th scope="col" class="sort" data-sort="name">
                                Owner of vehicle
                            </th>
                        </tr>
                        </thead>
                        <tbody class="list ">
                     @if(count($users) <= 0)
                        <h2 class="text-red">NO LOGS CREATED!</h2>
                     @endif
                        @foreach($users as $user)

                        <tr>

                            <th scope="row">
                                <div class="media align-items-center">
                                    <div class="media-body">
                                        <span class="name mb-0 text-sm">{{$user->parker->color}}</span>
                                    </div>
                                </div>
                            </th>
                            <th scope="row">
                                <div class="media align-items-center">
                                    <div class="media-body">
                                        <span class="name mb-0 text-sm">{{$user->parker->department}}</span>
                                    </div>
                                </div>
                            </th>
                           
                         
                            <th scope="row">
                                <div class="media align-items-center">
                                    <div class="media-body">
                                        <span class="name mb-0 text-sm">{{$user->created_at}}</span>
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
              {{ $users->links() }}
            </div>
        </div>
    </div>
@endsection


