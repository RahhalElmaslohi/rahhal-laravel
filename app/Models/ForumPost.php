<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ForumPost extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'title_fr',
        'body',
        'body_fr',
        'date',
        'users_id'
    ];

    public function forumHasUser(){
        return $this->hasOne('App\Models\User', 'id', 'users_id');
    }
}
