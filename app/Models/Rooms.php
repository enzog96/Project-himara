<?php

namespace App\Models;

use App\Models\RoomOption;
use App\Models\CategoryRoom;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Rooms extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'title',
        'description',
        'smalldescription',
        'price',
        'bed',
        'guest',
        'rating',
        'stars',
        'size',
        'category_rooms_id',
        
    ];

    public function category_rooms() {
        return $this->belongsTo(CategoryRoom::class);
    }

    public function room_option() {
        return $this->hasMany(RoomOption::class);
    }
}
