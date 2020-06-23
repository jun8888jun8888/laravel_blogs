<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogType extends Model
{
    //
    protected $table = 'blogs_type';
    protected $fillable = [
        'name'
    ];
}
