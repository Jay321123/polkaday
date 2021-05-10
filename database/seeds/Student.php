<?php

use App\Student as AppStudent;
use Illuminate\Database\Seeder;

class Student extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AppStudent::create([
            'firstname' =>'John ',
            'lastname' =>'Doe',
            'id_number' =>'12345678',
            'course' =>'BSIT',
        ]);
        AppStudent::create([
            'firstname' =>'Jane ',
            'lastname' =>'Cruz',
            'id_number' =>'87654321',
            'course' =>'BScoE',
        ]);
        AppStudent::create([
            'firstname' =>'Marie ',
            'lastname' =>'Smith',
            'id_number' =>'12341234',
            'course' =>'BSCS',
            
        ]);
        AppStudent::create([
            'firstname' =>'Margie ',
            'lastname' =>'Ando',
            'id_number' =>'111111111',
            'course' =>'BSCP',
            
        ]);
        AppStudent::create([
            'firstname' =>'Louie ',
            'lastname' =>'Rulete',
            'id_number' =>'222222222',
            'course' =>'Ganner',
        ]);
        AppStudent::create([
            'firstname' =>'Roland ',
            'lastname' =>'Villa',
            'id_number' =>'333333333',
            'course' =>'Tanod',
        ]);
        AppStudent::create([
            'firstname' =>'Rhyan ',
            'lastname' =>'Dechosa',
            'id_number' =>'444444444',
            'course' =>'Mamayotay',
        ]);
    }

}
