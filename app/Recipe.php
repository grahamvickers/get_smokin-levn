<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    /**
     * 
     * The attributes that are mass assignable
     * 
     * @var array
     */
    protected $fillable = [
        'name',
        'bio',
        'cost',
        'time',
        'img'
    ];
}
