<?php

namespace App\Http\Controllers;

use App\Attendance;
use App\ParkerLog;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class LogsController extends Controller
{

    public function search(){
        $users = ParkerLog::where('plate_number', 'like', request()->plate_number)
        ->get();

        return view('logs.parker',compact('users'));
    }
    public function driver_logs(){
//  dd();
//        $users = User::with('attendances')->latest()->get();
        $users = ParkerLog::with('parker')
            ->latest()
            ->paginate(10);

        return view('logs.parker',compact('users'));
    }
    public function guest_logs(){
      
        $guests = Attendance::where('user_id',null)->with('employee')
        ->latest()
        ->get();
        return view('logs.guest',compact('guests'));
    }
}
