<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'title_fr',
        'title_en',
        'body_fr',
        'body_en',
        'user_id'
    ];

    public function blogHasUser(){
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }
}
