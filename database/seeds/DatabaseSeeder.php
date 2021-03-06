<?php

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
        $this->call(VehicleTypeSeeder::class);
        $this->call(ColorSeeder::class);
       
    }
}
