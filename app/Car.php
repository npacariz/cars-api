<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = [
        'brand', 'model' , 'year', 'maxSpeed', 'isAutomatic', 'engine', 'numberOfDoors'
    ];

    public static function takeSkip($take, $skip) {
        return self::skip($skip)->take($take)->get();
    }
}
