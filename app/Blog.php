<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    /**
     * 
     * The attributes that are mass assignable
     * 
     * @var array
     */
    protected $fillable = [
        'title',
        'author',
        'job',
        'date',
        'postMonth',
        'profilePic',
        'img',
        'post' 
    ];
}
