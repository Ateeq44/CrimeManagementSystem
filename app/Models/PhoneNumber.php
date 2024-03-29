<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhoneNumber extends Model
{
    use HasFactory;
    protected $table ='phone';
    protected $fillable = [
        'n_number',
        'network',
        'cri_id',
    ];
}
