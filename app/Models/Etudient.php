<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudient extends Model
{
    use HasFactory;
    protected $fillable = [
        'villes_id',
        'users_id'
    ];
}
