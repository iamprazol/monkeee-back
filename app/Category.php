<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'id',
        'name'
    ];

    public function event(){
        return $this->hasMany('App\Event');
    }

    public function dj(){
        return $this->hasMany('App\dj');
    }
}
