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
            ['room_type_id' => 1, 'room_name' => 'No.6 Ban PlaWen (Whale) (หลังที่ 6 บ้านปลาวาฬ)', 'room_status' => '1'],
            ['room_type_id' => 2, 'room_name' => 'No.5 Ban PlaChalam (Shark) (หลังที่ 5 บ้านปลาฉลาม )', 'room_status' => '2'],
            ['room_type_id' => 2, 'room_name' => 'No.20 Ban Pla MorTale (Grouper fish) (หลังที่ 20 บ้านปลาหมอทะเล)', 'room_status' => '2'],

            ['room_type_id' => 3, 'room_name' => 'No.13 Ban Pla Ronan (Ronan fish) (หลังที่ 13 บ้านปลาโรนัน)', 'room_status' => '3'],
            ['room_type_id' => 3, 'room_name' => 'No.14 Ban Pla Kraben (Stingray) (หลังที่ 14 บ้านปลากระเบน)', 'room_status' => '3'],

            ['room_type_id' => 4, 'room_name' => 'No.3 Ban Pla ChomNgam (African pompano) (หลังที่ 3 บ้านปลาโฉมงาม )', 'room_status' => '4'],
            ['room_type_id' => 4, 'room_name' => 'No.4 Ban Pla InSea (Spotted Mackerel) (หลังที่ 4 บ้านปลาอินทรี)', 'room_status' => '4'],
            ['room_type_id' => 4, 'room_name' => 'No.19 Ban PlaSingTo (Giant trevally) (หลังที่ 19 บ้านปลาประมง)', 'room_status' => '4'],
            ['room_type_id' => 4, 'room_name' => 'No.21 Ban Pla KraThongRom (Sailfish) (หลังที่ 21 บ้านปลากระโทงร่ม)', 'room_status' => '4'],

            ['room_type_id' => 5, 'room_name' => 'No.1 Ban Pla Sak (Great barracuda) (หลังที่ 1 บ้านปลาสาก)', 'room_status' => '5'],
            ['room_type_id' => 5, 'room_name' => 'No.2 Ban Pla Kea (Grouper Fish) (หลังที่ 2 บ้านปลาเก๋า)', 'room_status' => '5'],
            ['room_type_id' => 5, 'room_name' => 'No.7 Ban Pla Tu (Mackerel) (หลังที่ 7 บ้านปลาทู)', 'room_status' => '5'],
            ['room_type_id' => 5, 'room_name' => 'No.10 Ban Pla PukPao (Swellfish) (หลังที่ 10 บ้านปลาขี้เป้า)', 'room_status' => '5'],
            ['room_type_id' => 5, 'room_name' => 'No.11 Ban Pla Gramongdang (Thread fin bream) (หลังที่ 9 บ้านปลากระมงแดง)', 'room_status' => '5'],
            ['room_type_id' => 5, 'room_name' => 'No.12 Ban Pla-O (Eastern Little tuna) (หลังที่ 12 บ้านปลาโอ)', 'room_status' => '5'],
            ['room_type_id' => 5, 'room_name' => 'No.15 Ban KuLao (Threadfin) (หลังที่ 15 บ้านปลาดุกลา)', 'room_status' => '5'],
            ['room_type_id' => 5, 'room_name' => 'No.16 Ban PlaJamed (Butterfish) (หลังที่ 16 บ้านปลาจะระเม็ด)', 'room_status' => '5'],
            ['room_type_id' => 5, 'room_name' => 'No.17 Ban PlaSaLa (Talang queenfish) (หลังที่ 17 บ้านปลาสละ)', 'room_status' => '5'],
            ['room_type_id' => 5, 'room_name' => 'No.18 Ban PlaAngGrey (Grey Snapper) (หลังที่ 18 บ้านปลาข้างเฆม)', 'room_status' => '5'],

            ['room_type_id' => 5, 'room_name' => 'No.8 Ban PlaCartoon (Clownfish) (หลังที่ 8 บ้านปลาการ์ตูน)', 'room_status' => '6'],
            ['room_type_id' => 5, 'room_name' => 'No.9 Ban PlaSingTo (Lionfish) (หลังที่ 9 บ้านปลาสิงโต)', 'room_status' => '6'],
        ];

        foreach ($data as $item) {
            Room::updateOrCreate(
                ['room_name' => $item['room_name']], // เงื่อนไขค้นหา
                $item // ค่าที่จะอัปเดตหรือใช้สร้าง
            );
        }
    }
}
