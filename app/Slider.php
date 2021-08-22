<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $guarded = [];
    function SliderTorelationwithuser()
    {
        return $this->hasOne('App\User', 'id', 'user_id');
    }
}
