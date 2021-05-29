<?php

use App\VehicleCategory;
use App\VehicleType;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleSeeder::class);
        $this->call(FakeUserSeeder::class);
        $this->call(Student::class);
        $this->call(VehicleCategorySeeder::class);
        $this->call(VehicleTypeSeeder::class);
        $this->call(ColorSeeder::class);
        $this->call(BlockSeeder::class);
        $this->call(SlotSeeder::class);
       
    }
}
