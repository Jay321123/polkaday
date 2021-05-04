<?php

use App\Color;
use Illuminate\Database\Seeder;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Color::insert([
            [
                'color_name' => 'white'
            ],
            [
                'color_name' => 'red'
            ],
            [
                'color_name' => 'blue'
            ],
            [
                'color_name' => 'black'
            ],
            [
                'color_name' => 'gray'
            ],
            [
                'color_name' => 'green'
            ],
        ]);
    }
}
