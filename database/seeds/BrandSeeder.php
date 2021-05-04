<?php

use App\Brand;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Brand::insert([
            [
                'brand_name' =>'toyota',
                'vechicle_type' =>'car'
            ],
            [
                'brand_name' =>'honda',
                'vechicle_type' =>'car'
            ],
            [
                'brand_name' =>'russi',
                'vechicle_type' =>'motor'
            ],
            [
                'brand_name' =>'ktm',
                'vechicle_type' =>'motor'
            ],
            [
                'brand_name' =>'kawasaki',
                'vechicle_type' =>'motor'
            ],
        ]);
        
    }
}
