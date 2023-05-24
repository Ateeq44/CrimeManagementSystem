<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Criminal extends Model
{
    use HasFactory;
    protected $table = "criminals";
    protected $fillable = [
        'name',
        'fname',
        'address',
        'cnic',
        'po_station',
        'karwai',
        'user_id',
    ];
}
