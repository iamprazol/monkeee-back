<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class country extends Model
{
    protected $fillable = [
        'id',
        'name'
    ];

    public function city(){

        return $this->hasMany('App\city');

    }
}
