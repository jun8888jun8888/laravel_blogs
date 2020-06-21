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
    protected $fillable = [
        'title','content'
    ];
}
