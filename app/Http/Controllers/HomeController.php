<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function myform()
    {
        
        $states = DB::table("vehicle_categories")->pluck("name","id");
       
        return view('myform',compact('states'));
    }
    public function myformAjax($id)
    {
        $cities = DB::table("vehicle_models")
                    ->where("vehicle_category_id",$id)
                    ->pluck("name","id");
        return json_encode($cities);
    }

}
