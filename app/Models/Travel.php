<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Travel extends Model
{
    use HasFactory;
    protected $table ='travel';
    protected $fillable = [
        'dtravel',
        'f_number',
        'status',
        'passport',
        's_name',
        'destination',
        'cri_id',
    ];
}
