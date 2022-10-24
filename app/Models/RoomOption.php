<?php

namespace App\Models;

use App\Models\Rooms;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RoomOption extends Model
{
    use HasFactory;


    protected $fillable = [
        'breakfast',
        'bathroom',
        'wifi',
        'tv',
        'internet',
        'balcony',
        'newspaper',
        'AC',
        'beach',
        'roomservice',
        'room_id'
        
    ];

    public function room() {
        return $this->belongsTo(Rooms::class);
    }
}
