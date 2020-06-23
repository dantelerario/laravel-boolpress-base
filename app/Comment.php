<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'user_id',
        'creator',
        'email',
        'commeny_text'
    ];

    public function post()
    {
        return $this->belongsTo('App\Post');
    }
}
