<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Arrest extends Model
{
    use HasFactory;
    protected $table ='arrest';
    protected $fillable = [
        'description',
        'date',
        'cri_id',
    ];
}
