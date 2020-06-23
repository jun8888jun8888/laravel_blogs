<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Comment extends Model
{
    //
    protected $fillable = [
        'content', 'user_id', 'blog_id'
    ];

    public function blog()
    {
        return $this->belongsTo('App\Blog');  //n 对 1
    }

    public function userName()
    {
        return User::find($this->user_id)->name;//这里通过当前对象的 user_id 获取 user对象， 然后指向->name属性
    }
}
