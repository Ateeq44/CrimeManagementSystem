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
        'fname',
        'phone',
        'cnic',
        'address',
        'loca_crime',
        'doc',
        'tocrime',
        'incident',
        'ps_id',
        'complaint_no',
    ];

    public function policestations()
    {
        return $this->belongsTo(PoliceStation::class, 'ps_id', 'id');
    }
}
