<?php

use App\ParkingBlock;
use Illuminate\Database\Seeder;

class BlockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ParkingBlock::insert([
            [
                'block_name' => 'Motorcycle Block',
                'parking_type' =>'motor'
            ],
            [
                'block_name' => 'Car Block',
                'parking_type' =>'car'
            ],
        ]);
    }
}
