<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fir extends Model
{
    use HasFactory;
    protected $table ='fir';
    protected $fillable = [
        'fir_number',
        'crime',
        'remarks',
        'doc',
        'ps_id',
        'cri_id',
        'name',
        'fname',
        'cnic',
        'address',
        'loca_crime',
        'doc',
        'incident',
        'phone',

    ];
    public function polstations()
    {
        return $this->belongsTo(PoliceStation::class, 'ps_id', 'id');
    }
}
