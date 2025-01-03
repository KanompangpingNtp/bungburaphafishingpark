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
            ['room_type_id' => 1, 'room_name' => 'หลังที่ 6 บ้านปลาวาฬ (Whale) (No.6 Ban PlaWan)', 'room_status' => '1'],

            ['room_type_id' => 2, 'room_name' => 'หลังที่ 5 บ้านปลาฉลาม (Shark) (No.5 Ban PlaChalam)', 'room_status' => '1'],
            ['room_type_id' => 2, 'room_name' => 'หลังที่ 20 บ้านปลาหมอทะเล (Grouper fish) (No.20 Ban Pla MorTale)', 'room_status' => '1'],

            ['room_type_id' => 3, 'room_name' => 'หลังที่ 13 บ้านปลาโรนัน (Ronan fish) (No.13 Ban Pla Ronan)', 'room_status' => '1'],
            ['room_type_id' => 3, 'room_name' => 'หลังที่ 14 บ้านปลากระเบน (Stingray) (No.14 Ban Pla Kraben)', 'room_status' => '1'],

            ['room_type_id' => 4, 'room_name' => 'หลังที่ 3 บ้านปลาโฉมงาม (African pompano) (No.3 Ban Pla ChomNgam)', 'room_status' => '1'],
            ['room_type_id' => 4, 'room_name' => 'หลังที่ 4 บ้านปลาสีกุน (Spotted Mackerel) (No.4 Ban Pla SeaKun)', 'room_status' => '1'],
            ['room_type_id' => 4, 'room_name' => 'หลังที่ 7 บ้านปลากะรังยักษ์ (Giant trevally) (No.7 Ban Pla KarangYak)', 'room_status' => '1'],
            ['room_type_id' => 4, 'room_name' => 'หลังที่ 10 บ้านปลาบิน (Sailfish) (No.10 Ban Pla Bin)', 'room_status' => '1'],

            ['room_type_id' => 5, 'room_name' => 'หลังที่ 1 บ้านปลากะพง (Great barracuda) (No.1 Ban Pla Sak)', 'room_status' => '1'],
            ['room_type_id' => 5, 'room_name' => 'หลังที่ 2 บ้านปลาสาก (Great barracuda) (No.2 Ban Pla Sak)', 'room_status' => '1'],
            ['room_type_id' => 5, 'room_name' => 'หลังที่ 8 บ้านปลากระโทงร่ม (SwellFish) (No.8 Ban Pla Kratongrom)', 'room_status' => '1'],
            ['room_type_id' => 5, 'room_name' => 'หลังที่ 9 บ้านปลากระมงแดง (Thread fin bream) (No.9 Ban Pla Gramongdang)', 'room_status' => '1'],
            ['room_type_id' => 5, 'room_name' => 'หลังที่ 11 บ้านปลาตะเพียน (Eastern Little Tuna) (No.11 Ban Pla Tapaen)', 'room_status' => '1'],
            ['room_type_id' => 5, 'room_name' => 'หลังที่ 15 บ้านปลากะพง (Butterfish) (No.15 Ban Pla Kabong)', 'room_status' => '1'],
            ['room_type_id' => 5, 'room_name' => 'หลังที่ 16 บ้านปลายี่สก (Talang queenfish) (No.16 Ban Pla Yeesok)', 'room_status' => '1'],
            ['room_type_id' => 5, 'room_name' => 'หลังที่ 17 บ้านปลากะพงใหญ่ (Grey Snapper) (No.17 Ban Pla Kapongyai)', 'room_status' => '1'],
            ['room_type_id' => 5, 'room_name' => 'หลังที่ 18 บ้านปลาการ์ตูน (Clownfish) (No.18 Ban PlaCartoon)', 'room_status' => '1'],
            ['room_type_id' => 5, 'room_name' => 'หลังที่ 19 บ้านปลาสิงโต (Lionfish) (No.19 Ban PlaSingTo)', 'room_status' => '1'],
        ];

        foreach ($data as $item) {
            Room::create($item);
        }
    }
}
