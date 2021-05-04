<?php

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
        VehicleType::insert([
            [
                'brand_name' =>'toyota',
                'model' => 'Toyota Avalon'
                // 'vechicle_type' =>'',
            ],
            [
                'brand_name' =>'kawasaki',
                'model' => 'Kawasaki Barako II'
                // 'vechicle_type' =>'',
            ],
            [
                'brand_name' =>'honda',
                'model' => 'Civic Hatchback'
                // 'vechicle_type' =>'',
            ],
            [
                'brand_name' =>'honda',
                'model' => 'Click 150'
                // 'vechicle_type' =>'',
            ],
            
        ]);
    }
}
