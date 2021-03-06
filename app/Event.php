<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Event extends Model
{
    protected $fillable = [
        'id',
        'club_id',
        'category_id',
        'opening_date',
        'opening',
        'closing_date',
        'closing',
        'picture',
        'name',
        'description',
        'price',
        'ticket_link',
        'facebook',
        'instagram',
        'islive'
    ];

    public function club(){
        return $this->belongsTo('App\Club');
    }

    public function category() {
        return $this->belongsTo('App\Category');
    }

    public function video(){
        return $this->hasMany('App\Video');
    }

}
