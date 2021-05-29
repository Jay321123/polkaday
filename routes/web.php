<?php

use App\ParkerLog;
use App\Parkers;
use App\ParkingBlock;
use App\Slots;
use App\Student;
use App\User;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Barryvdh\DomPDF\Facade as PDF;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login-v2');
});
//localhost:8000/test/temp/body_temp?asasasa
Route::post('test/temp',function (){
    dd(request()->all());
    \App\Temperature::create(['body_temp' =>request()->body_temp]);
});






Route::get('/sample-report','ReportController@report_all_logs');
Route::get('/report/guest','ReportController@report_all_guest');


Route::get('/download',function (){

});

Route::get('/scanner',function(){
    return view('scanner.qr-scanner');
});

Route::get('scanned-qr','ScannerController@scanned');

Route::view('test/register','test');

//Route::view('login-v2','auth.login-v2');

\Illuminate\Support\Facades\Auth::routes();


Route::get('myform',array('as'=>'myform','uses'=>'HomeController@myform'));
Route::get('myform/ajax/{id}',array('as'=>'myform.ajax','uses'=>'HomeController@myformAjax'));


Route::get('/register/driver','GuestController@guest_form_regis');


Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/user', 'UserController');

Route::get('/userDetails/{id}','UserController@userDetails');

Route::get('/people', 'UserController@list_people');

Route::get('/guest/show/{guest}', 'UserController@show_guest_profile');

Route::get('dataTableUSer', 'UserController@dataTable')->name('dataTableUser');

Route::view('/profile','profile');

Route::get('/employee','UserController@employee')->name('user.employee');

Route::get('/admin','UserController@admin');

Route::get('/list/registered','GuestController@list_guest');

Route::get('/add/admin','UserController@register');

Route::post('/register/guest','GuestController@register')->name('guest');

Route::get('/qrCard','GuestController@download_stream_pdf');

Route::get('send/test','SendMailController@send');


Route::get('scanner-test', function (){
  
    return view('parking_logs.autosave');
});

Route::post('qr-log','ParkerController@logs');

Route::prefix('logs')->group(function (){
    // Route::get('/parker','LogsController@driver_logs');
    Route::get('guest','LogsController@guest_logs');
});
Route::get('/logs/parker','LogsController@driver_logs');

//new route
Route::post('/register/parker','ParkerController@register')->name('parker');
// Route::get('/parker/list','Par');

Route::get('/search','LogsController@search');

Route::get('/searchOwner','VehicleController@searchOwner');

Route::get('/admin', function(){
    
    $users = User::get();
    return view('home',compact('users'));
});

Route::get('/mission', function(){

    return view('TextArea.Mission');
});
Route::get('/Rules', function(){

    return view('TextArea.ParkingRules');
});
// 
Route::get('/RegisteredVehicle','VehicleController@parkers');

Route::get('/notify/{id}','VehicleController@send_sms');

Route::get('/ParkerLogs', function()
{
return view('layouts.ParkerLogs-New-Table');
});
Route::get('/Mblocks' , function(){

$blocks = ParkingBlock::get();

$firsts = Slots::where('parking_block_id',1)->get();
$secondaries = Slots::where('parking_block_id',2)->get();
return view('ParkingBlocks.Parkingblocks',compact('blocks','firsts','secondaries'));


});



Route::get('/test-sms',function(){
    $ch = curl_init();
    $itexmo = array('1' => '09456442758', '2' => 'message asasasas', '3' => 'TR-JAYSO609284_59JR5', 'passwd' => 'w7]9{86f9{');
    curl_setopt($ch, CURLOPT_URL,"https://www.itexmo.com/php_api/api.php");
    curl_setopt($ch, CURLOPT_POST, 1);
     curl_setopt($ch, CURLOPT_POSTFIELDS, 
              http_build_query($itexmo));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    return curl_exec ($ch);
    curl_close ($ch);
});