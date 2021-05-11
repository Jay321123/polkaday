<?php

use App\VehicleCategory;
use Illuminate\Database\Seeder;

class VehicleCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        VehicleCategory::insert([
            ['name' => 'motor'],
            ['name' => 'car'],
        ]);
    }
}
