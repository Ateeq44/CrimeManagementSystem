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
        'po_station',
        'cri_id',
    ];
}
