<?php

namespace App\Http\Controllers;

use App\ParkerLog;
use App\Parkers;
use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Barryvdh\DomPDF\Facade as PDF;
use Carbon\Carbon;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;

class ParkerController extends Controller
{
    public function logs(){
        $parker = Parkers::where('qr_number',request()->qr_number)->first();

        if($parker ==null){
            return response()->json(
                'error'
            );
        }
        $student = Student::where('id_number',request()->school_id)->first();
        if($student ==null){
            return response()->json(
                'error ss'
            );
        }
     
      DB::transaction(function() use($parker,$student){
        $logs = ParkerLog::create([
            'student_id' =>$student->id,
            'plate_number' =>$parker->plate_number,
            'dateTime_in' =>$parker->created_at,
            'dateTime_out' =>Carbon::now(),
            'owner_name' =>$parker->owner_name
        ]);
        $parker->update(['isValid' =>false]);

        
      });
    }
  
    public function register(Request $request){
        //generate unique id for qr
        $qr_code = Str::uuid();

        //validation check if student enrolled
        $check_student = Student::where('id_number',$request->school_id)->first();
        if($check_student ===null){
          return redirect()->back()->with('info', 'Student is not Enrolled!');
        }
        
        //create/register parker/driver
        $parker = Parkers::create([
            'school_id' =>$request->school_id,
            'plate_number' =>$request->plate_number,
            'vehicle_type'=>$request->vehicle_type,
            'qr_number' =>$qr_code,
            'owner_name' =>$request->owner_name,
            'phone_number'=>$request->phone_number
        ]); 

        //generate qr
        $qr=  QrCode::size(500)
            ->format('png')
            ->generate($qr_code,public_path('QR/'.$qr_code.'.png'));

            //clear cache in view
            Artisan::call('view:clear');
            //view qr in pdf
        $pdf = PDF::loadView('qrCode',compact('parker'))->setPaper('legal','portrait');
        return $pdf->stream();
    }

   
}
