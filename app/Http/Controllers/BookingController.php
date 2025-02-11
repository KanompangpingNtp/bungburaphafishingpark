<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\BookRoom;

class BookingController extends Controller
{
    public function Booking()
    {
        $rooms = Room::with('roomType', 'bookRooms')->get();
        $bookedDatesByRoom = [];

        foreach ($rooms as $room) {
            $bookedDatesByRoom[$room->id] = BookRoom::where('room_id', $room->id)
                ->pluck('date')->toArray();
        }

        return view('users.booking.index', compact('rooms', 'bookedDatesByRoom'));
    }

    public function createBooking(Request $request, $id)
    {
        $dates = explode(',', $request->input('dates')[0]);
        $request->merge(['dates' => $dates]);

        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'dates' => 'required|array',
            'dates.*' => 'date',
        ]);

        // dd($request);

        $room = Room::findOrFail($id);

        foreach ($request->dates as $date) {
            $existingBooking = BookRoom::where('room_id', $room->id)
                ->where('date', $date)
                ->first();

            if ($existingBooking) {
                return redirect()->back()->with('error', "ห้องนี้มีการจองในวันที่ $date แล้ว");
            }

            BookRoom::create([
                'room_id' => $room->id,
                'date' => $date,
                'name' => $request->name,
                'phone' => $request->phone,
                'book_room_status' => 1,
            ]);
        }

        $room->update(['room_status' => '2']);

        return redirect()->back()->with('success', 'จองที่พักสำเร็จแล้ว');
    }
}
