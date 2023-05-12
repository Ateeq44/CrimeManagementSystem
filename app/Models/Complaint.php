<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Complaint extends Model
{
    use HasFactory;
    protected $table = "complaints";
    protected $fillable = [
        'name',
        'cnic',
        'address',
        'loca_crime',
        'police_station',
        'doc',
        'tocrime',
        'incident',
        'user_id',
        'complaint_no',
    ];
}
