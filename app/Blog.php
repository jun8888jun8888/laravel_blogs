<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;

/**
 * Class Blog
 * @package App
 */
class Blog extends Model
{
    protected $table = 'blogs';
    protected $fillable = [
        'title','content'
    ];

    public function comment()
    {
        return $this->hasMany('App\Comment');   //  1 对 n
    }
}
