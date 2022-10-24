<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'logo1',
        'logo2',
        'location',
        'phone',
        'fax',
        'website',
        'email'
        
    ];
}
