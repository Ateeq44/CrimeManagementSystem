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
        'karwai',
        'caseno',
        'ps_id',
    ];


    public function police_station()
    {
        return $this->belongsTo(PoliceStation::class, 'ps_id', 'id');
    }
}
