<?php


use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
namespace App\Http\Controllers;

use App\User;

use Student;

class StudViewController extends Controller
{
    public function index(){
        $student = Student::get();
        return view('home',['students'=>$student]);
}}
