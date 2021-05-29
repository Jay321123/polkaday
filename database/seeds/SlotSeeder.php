<?php

use App\Slots;
use Illuminate\Database\Seeder;

class SlotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $first = Slots::insert([
           [
            'slot_name' => 'slot A',
            'parking_block_id' =>1
           ],
           [
            'slot_name' => 'slot B',
            'parking_block_id' =>1
           ],
           [
            'slot_name' => 'slot C',
            'parking_block_id' =>1
           ],
           [
            'slot_name' => 'slot D',
            'parking_block_id' =>1
           ],
           [
            'slot_name' => 'slot E',
            'parking_block_id' =>1
           ],
        ]);

        $second = Slots::insert([
            [
                'slot_name' => 'slot 1',
                'parking_block_id' =>2
               ],
               [
                'slot_name' => 'slot 2',
                'parking_block_id' =>2
               ],
               [
                'slot_name' => 'slot 3',
                'parking_block_id' =>2
               ],
               [
                'slot_name' => 'slot 4',
                'parking_block_id' =>2
               ],
               [
                'slot_name' => 'slot 5',
                'parking_block_id' =>2
               ],
        ]);
    }
}
