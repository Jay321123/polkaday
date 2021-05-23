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
            'firstname' =>'Jhimmy ',
            'lastname' =>'Villarde',
            'id_number' =>'12-3131-12',
            'course' =>'BSIT'
        ]);
        AppStudent::create([
            'firstname' =>'Jayson ',
            'lastname' =>'Cedeno',
            'id_number' =>'87-6543-19',
            'course' =>'BSIT'
        ]);
        AppStudent::create([
            'firstname' =>'Jayson ',
            'lastname' =>'Andilab',
            'id_number' =>'12-1231-31',
            'course' =>'BSCS'
            
        ]);
        AppStudent::create([
            'firstname' =>'Margie ',
            'lastname' =>'Ando',
            'id_number' =>'22-2222-22',
            'course' =>'BSCP'
        ]);
        AppStudent::create([
            'firstname' =>'Louie ',
            'lastname' =>'Rulete',
            'id_number' =>'33-3333',
            'course' =>'Ganner'
        ]);
        AppStudent::create([
            'firstname' =>'Roland ',
            'lastname' =>'Villa',
            'id_number' =>'44-4444-11',
            'course' =>'Tanod'
        ]);
        AppStudent::create([
            'firstname' =>'Rhyan ',
            'lastname' =>'Dechosa',
            'id_number' =>'55-5555-10',
            'course' =>'Mamayotay'
        ]);
    }

}
