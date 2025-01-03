<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $fillable = ['room_name', 'room_status', 'room_type_id'];

    public function roomType()
    {
        return $this->belongsTo(RoomType::class,'room_type_id');
    }

    public function bookRooms()
    {
        return $this->hasMany(BookRoom::class);
    }
}
