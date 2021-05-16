@extends('layouts.table')
@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <!-- Card header -->
                <div class="card-header border-0">
                    <h3 class="mb-0">Guest Logs</h3>
                    <a href="/report/guest" class="btn btn-primary m-4">Generate Report</a>
                </div>
                <!-- Light table -->
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                        <tr>
                            <th scope="col" class="sort" data-sort="name">Name</th>
                            <th scope="col" class="sort" data-sort="name">Address</th>
                            <th scope="col" class="sort" data-sort="name">Contact No</th>
                            <th scope="col" class="sort" data-sort="name">Date Entered</th>

                            <th scope="col"></th>
                        </tr>
                        </thead>
                        <tbody class="list">
                            @if(count($guests) <= 0)
                            <h2 class="text-red">NO LOGS CREATED!</h2>
                            @else
                            @endif
                            @foreach($guests as $guest)
                        <tr>
                            <td class="budget">
                               {{$guest->guest->fname}}     {{$guest->guest->lname}}
                            </td>
                            <td class="budget">
                                {{$guest->guest->address}}     {{$guest->guest->city}}     {{$guest->guest->prk_brgy}}
                            </td>
                            <td class="budget">
                                {{$guest->guest->contact_no}}  
                            </td>
                            <td class="budget">
                                {{$guest->created_at}}  
                            </td>
                           
                            <!-- <td class="text-right">
                                <div class="dropdown">
                                    <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-ellipsis-v"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                </div>
                            </td> -->
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- Card footer -->
                </div>
            </div>
        </div>
    </div>
@endsection

