<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    public function cities()
    {
        return $this->belongsTo('App\City');
    }

    public function gpss()
    {
        return $this->hasMany('App\Gps');
    }
}
