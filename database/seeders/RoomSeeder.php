<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Room;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        $data = [
            ['room_type_id' => 1, 'room_name' => 'No.6 Ban PlaWan (Whale) (หลังที่ 6 บ้านปลาวาฬ )', 'room_status' => '1'],

            ['room_type_id' => 2, 'room_name' => 'No.5 Ban PlaChalam (Shark) (หลังที่ 5 บ้านปลาฉลาม )', 'room_status' => '2'],
            ['room_type_id' => 2, 'room_name' => 'No.20 Ban Pla MorTale (Grouper fish) (หลังที่ 20 บ้านปลาหมอทะเล)', 'room_status' => '2'],

            ['room_type_id' => 3, 'room_name' => 'No.13 Ban Pla Ronan (Ronan fish) (หลังที่ 13 บ้านปลาโรนัน)', 'room_status' => '3'],
            ['room_type_id' => 3, 'room_name' => 'No.14 Ban Pla Kraben (Stingray) (หลังที่ 14 บ้านปลากระเบน)', 'room_status' => '3'],

            ['room_type_id' => 4, 'room_name' => 'No.3 Ban Pla ChomNgam (African pompano) (หลังที่ 3 บ้านปลาโฉมงาม )', 'room_status' => '4'],
            ['room_type_id' => 4, 'room_name' => 'No.4 Ban Pla SeaKun (Spotted Mackerel) (หลังที่ 4 บ้านปลาสีกุน)', 'room_status' => '4'],
            ['room_type_id' => 4, 'room_name' => 'No.7 Ban Pla KarangYak (Giant trevally) (หลังที่ 7 บ้านปลากะรังยักษ์)', 'room_status' => '4'],
            ['room_type_id' => 4, 'room_name' => 'No.10 Ban Pla Bin (Sailfish) (หลังที่ 10 บ้านปลาบิน)', 'room_status' => '4'],

            ['room_type_id' => 5, 'room_name' => 'No.1 Ban Pla Sak (Great barracuda) (หลังที่ 1 บ้านปลากะพง)', 'room_status' => '5'],
            ['room_type_id' => 5, 'room_name' => 'No.2 Ban Pla Sak (Great barracuda) (หลังที่ 2 บ้านปลาสาก)', 'room_status' => '5'],
            ['room_type_id' => 5, 'room_name' => 'No.8 Ban Pla Kratongrom (SwellFish) (หลังที่ 8 บ้านปลากระโทงร่ม)', 'room_status' => '5'],
            ['room_type_id' => 5, 'room_name' => 'No.9 Ban Pla Gramongdang (Thread fin bream) (หลังที่ 9 บ้านปลากระมงแดง)', 'room_status' => '5'],
            ['room_type_id' => 5, 'room_name' => 'No.11 Ban Pla Tapaen (Eastern Little Tuna) (หลังที่ 11 บ้านปลาตะเพียน)', 'room_status' => '5'],
            ['room_type_id' => 5, 'room_name' => 'No.15 Ban Pla Kabong (Butterfish) (หลังที่ 15 บ้านปลากะพง)', 'room_status' => '5'],
            ['room_type_id' => 5, 'room_name' => 'No.16 Ban Pla Yeesok (Talang queenfish) (หลังที่ 16 บ้านปลายี่สก)', 'room_status' => '5'],
            ['room_type_id' => 5, 'room_name' => 'No.17 Ban Pla Kapongyai (Grey Snapper) (หลังที่ 17 บ้านปลากะพงใหญ่)', 'room_status' => '5'],

            ['room_type_id' => 5, 'room_name' => 'No.18 Ban PlaCartoon (Clownfish) (หลังที่ 18 บ้านปลาการ์ตูน)', 'room_status' => '6'],
            ['room_type_id' => 5, 'room_name' => 'No.19 Ban PlaSingTo (Lionfish) (หลังที่ 19 บ้านปลาสิงโต)', 'room_status' => '6'],
        ];

        foreach ($data as $item) {
            Room::create($item);
        }
    }
}
