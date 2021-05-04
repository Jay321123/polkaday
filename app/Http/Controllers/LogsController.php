<?php

namespace App\Http\Controllers;

use App\Attendance;
use App\ParkerLog;
use App\User;
use Illuminate\Http\Request;

class LogsController extends Controller
{
    public function driver_logs(){

//        $users = User::with('attendances')->latest()->get();
        $users = ParkerLog::with('parker')
            ->latest()
            ->get();

        return view('logs.parker',compact('users'));
    }
    public function guest_logs(){

        $guests = Attendance::where('user_id',null)->with('employee')
        ->latest()
        ->get();
        return view('logs.guest',compact('guests'));
    }
}
