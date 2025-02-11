<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BookRoom;
use Carbon\Carbon;

class AdminController extends Controller
{
    //
    public function AdminIndex()
    {
        Carbon::setLocale('th');

        $bookRooms = BookRoom::with('room', 'roomType')
        ->orderBy('created_at', 'desc')
        ->get();

        return view('admin.show_room_booking', compact('bookRooms'));
    }

    public function approve($id)
    {
        $bookRoom = BookRoom::findOrFail($id);
        $bookRoom->book_room_status = 2;
        $bookRoom->save();

        return redirect()->back()->with('success', 'สถานะอัปเดตเรียบร้อยแล้ว!');
    }

    public function deleteBooking($bookingId)
    {
        // หาข้อมูลการจองที่ต้องการลบ
        $booking = BookRoom::findOrFail($bookingId);

        // ลบการจอง
        $booking->delete();

        // หากหลังจากการลบการจองแล้ว ไม่มีการจองห้องแล้ว ให้รีเซ็ตสถานะของห้อง
        $room = $booking->room;
        $roomBookings = BookRoom::where('room_id', $room->id)->count();

        if ($roomBookings === 0) {
            $room->update(['room_status' => '1']);  // รีเซ็ตสถานะห้องให้กลับเป็นสถานะปกติ
        }

        return redirect()->back()->with('success', 'การจองห้องถูกลบเรียบร้อยแล้ว!');
    }
}
