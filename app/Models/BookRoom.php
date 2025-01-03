<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookRoom extends Model
{
    use HasFactory;

    protected $fillable = ['date', 'name', 'phone', 'book_room_status', 'room_id'];

    public function room()
    {
        return $this->belongsTo(Room::class);
    }

    public function roomType()
    {
        return $this->belongsTo(RoomType::class);
    }
}
