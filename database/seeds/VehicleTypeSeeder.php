<?php

use App\VehicleModel;
use App\VehicleType;
use Illuminate\Database\Seeder;

class VehicleTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        VehicleModel::insert([
            [
               
                'name' => 'Toyota Avalon',
                'vehicle_category_id' =>2
          
            ],
            [
                'name' => 'Kawasaki Barako II',
                'vehicle_category_id' =>1
         
            ],
            [
                'name' => 'Civic Hatchback',
                'vehicle_category_id' =>2
        
            ],
            [
                'name' => 'Click 150',
                'vehicle_category_id' =>1
            ],
            [
                'name' => 'Raider 150',
                'vehicle_category_id' =>1
            ],
            [
                'name' => 'Sniper 150',
                'vehicle_category_id' =>1
                
                // 'vechicle_type' =>'',
            ],
            [
                'name' => 'Montero',
                'vehicle_category_id' =>2
                
                // 'vechicle_type' =>'',
            ],
            [
                'name' => 'Ranger',
                'vehicle_category_id' =>2
                // 'vechicle_type' =>'',
            ],
            
            
        ]);
    }
}
