<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // Mass assign
    protected $fillable = [
        'user_id',
        'title',
        'body',
        'slug'
    ];

    /* DB relations */
    // User (many to one)
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    //tags 
    public function tags() {
        return $this->belongsToMany('App\Tag');
    }
}
