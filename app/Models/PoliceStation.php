<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PoliceStation extends Model
{
    use HasFactory;
    protected $table = 'polish_stations';
    protected $fillable = [
        'name',
        'contact_no',
    ];
}
