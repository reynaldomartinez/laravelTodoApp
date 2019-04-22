<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['post'];
    //
    public function user () {
//        $this->belongsTo();
    }
}
