<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Family extends Model
{
    use HasFactory;
    protected $table ='family_tree';
    protected $fillable = [
        'relation',
        'po',
        'rel_po',
        'passport',
        'cri_id',
    ];
}
