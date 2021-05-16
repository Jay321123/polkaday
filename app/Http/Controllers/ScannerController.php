<?php

namespace App\Http\Controllers;

use App\ParkerLog;
use App\Parkers;
use App\Student;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ScannerController extends Controller
{
    public function scanned(){
        $dateTime =Carbon::now('hongkong');

    
        $parse = Carbon::parse($dateTime->toDateTime());
        $data = json_decode(request()->text);
        if($data ==null){
            return redirect()->back()->with('info','QR Does not Exist!');
        }


        $parker = Parkers::where('qr_number',$data->qr_code)->first();
    
            if($parker ==null){
                return redirect()->back()->with('info','QR Does not Exist!');
            }
            $student = Student::where('id_number',request()->student_id)->first();
            if($student ==null){
              return redirect()->back()->with('info','Student Does not Exist!');
            }   
            //if first time palang niya mag login
            if(count($student->logs)==0){
                
                DB::transaction(function() use($parker,$student,$parse){
                    $logs = ParkerLog::create([
                        'student_id' =>$student->id,
                        'plate_number' =>$parker->plate_number,
                        'dateTime_in' =>$parse,
                        'owner_name' =>$parker->owner_name,
                    ]);
                    $logs->update(['created_at' =>$parse]);
                    $parker->update(['isValid' =>false]);        
                  });

                  return redirect()->back()->with('success','Success!');
            }
            
            $logs = ParkerLog::where('student_id',$student->id)
            ->get();
           
            if($student->logs->first()->dateTime_out == null){
                $student->logs->first()->update(['dateTime_out' => $parse]);
                $student->logs->first()->update(['updated_at' => $parse]);
                return redirect()->back()->with('success','Success!');
            }

                foreach($logs->reverse() as $log){
                      if($log->dateTime_in!=null && $log->dateTime_out !=null){
                        DB::transaction(function() use($parker,$student,$parse){
                            $logs = ParkerLog::create([
                                'student_id' =>$student->id,
                                'plate_number' =>$parker->plate_number,
                                'dateTime_in' =>$parse,
                                'owner_name' =>$parker->owner_name,
                            ]);
                            $logs->update(['created_at' =>$parse]);
                            $parker->update(['isValid' =>false]);        
                           
                          });
                          return redirect()->back()->with('success','Success!');
                        
                      }  
                      if($log->dateTime_in !=null && $log->dateTime_out==null){
                        $log->update(['dateTime_out' => $parse]);
                        $log->update(['updated_at' => $parse]);
                        return redirect()->back()->with('success','Success!');
                      }
                }
    }
}
