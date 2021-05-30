<?php

namespace App\Http\Controllers;

use App\ParkerLog;
use App\Parkers;
use App\ParkingBlock;
use App\Slots;
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

        if($parker->expiration_status == 'expired') {
          return redirect()->back()->with('info','Your QR is Expired!');
        }

    
            if($parker ==null){
                return redirect()->back()->with('info','QR Does not Exist!');
            }

            //block
            $blk_car = ParkingBlock::where('parking_type','car')->first();
            $blk_motor = ParkingBlock::where('parking_type','motor')->first();
            $slots_motor = Slots::where('parking_block_id',1)
            ->where('status','available')
            ->first();
       
            $slots_car = Slots::where('parking_block_id',2)
            ->where('status','available')
            ->first();

            //if first time palang niya mag login
            if(count($parker->logs)==0){
                DB::transaction(function() use($parker,$parse,$slots_car,$slots_motor){
                    $logs = ParkerLog::create([
                        'parker_id' =>$parker->id,
                        'plate_number' =>$parker->plate_number,
                        'dateTime_in' =>$parse,
                        'owner_name' =>$parker->owner_name,
                    ]);
                    $logs->update(['created_at' =>$parse]);
                    $parker->update(['isValid' =>false]);     
                    
                    
                    if($parker->vehicle_category->name =='motor'){
                      $slots_motor->update([
                          'status' =>'occupied'
                      ]);
                    }if($parker->vehicle_category->name =='car'){
                      $slots_car->update([
                          'status' =>'occupied'
                      ]);
                    }

                  });
                

                  return redirect()->back()->with('success','Success!');
            }
            
            $logs = ParkerLog::where('parker_id',$parker->id)
            ->get();
           
            if($parker->logs->first()->dateTime_out == null){
                $parker->logs->first()->update(['dateTime_out' => $parse]);
                $parker->logs->first()->update(['updated_at' => $parse]);
                // sasas
                if($parker->vehicle_category->name =='motor'){

                    $slots_motor = Slots::where('parking_block_id',1)
                    ->where('status','occupied')
                    ->first();
               
                    $slots_motor->update([
                        'status' =>'available'
                    ]);

                  }if($parker->vehicle_category->name =='car'){

                    $slots_car = Slots::where('parking_block_id',2)
                    ->where('status','occupied')
                    ->first();

                    $slots_car->update([
                        'status' =>'available'
                    ]);
                  }
                return redirect()->back()->with('success','Success!');
            }

                foreach($logs->reverse() as $log){
                      if($log->dateTime_in!=null && $log->dateTime_out !=null){
                        DB::transaction(function() use($parker,$parse){
                            $logs = ParkerLog::create([
                                'parker_id' =>$parker->id,
                                'plate_number' =>$parker->plate_number,
                                'dateTime_in' =>$parse,
                                'owner_name' =>$parker->owner_name,
                            ]);
                            $logs->update(['created_at' =>$parse]);
                            $parker->update(['isValid' =>false]);        
                            
                           
                          });
                          if($parker->vehicle_category->name =='motor'){

                            $slots_motor = Slots::where('parking_block_id',1)
                            ->where('status','available')
                            ->first();
                       
                            $slots_motor->update([
                                'status' =>'occupied'
                            ]);
        
                          }if($parker->vehicle_category->name =='car'){
        
                            $slots_car = Slots::where('parking_block_id',2)
                            ->where('status','available')
                            ->first();
        
                            $slots_car->update([
                                'status' =>'occupied'
                            ]);
                          }
                          return redirect()->back()->with('success','Success!');
                        
                      }  
                      if($log->dateTime_in !=null && $log->dateTime_out==null){
                        $log->update(['dateTime_out' => $parse]);
                        $log->update(['updated_at' => $parse]);
                        if($parker->vehicle_category->name =='motor'){

                            $slots_motor = Slots::where('parking_block_id',1)
                            ->where('status','occupied')
                            ->first();
                       
                            $slots_motor->update([
                                'status' =>'available'
                            ]);
        
                          }if($parker->vehicle_category->name =='car'){
        
                            $slots_car = Slots::where('parking_block_id',2)
                            ->where('status','occupied')
                            ->first();
        
                            $slots_car->update([
                                'status' =>'availables'
                            ]);
                          }
                        return redirect()->back()->with('success','Success!');
                      }
                }
    }
}
