<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\RoomType;

class RoomTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $data = [
            ['room_types_name' => 'XL'],
            ['room_types_name' => 'XL(special)'],
            ['room_types_name' => 'L'],
            ['room_types_name' => 'M'],
            ['room_types_name' => 'S']
        ];

        foreach ($data as $item) {
            RoomType::create($item);
        }
    }
}
