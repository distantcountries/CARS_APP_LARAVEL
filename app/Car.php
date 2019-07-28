<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = [
        'brand', 'model', 'year', 'maxSpeed​', 'isAutomatic', 'engine', 'numberOfDoors'
    ];

    const STORE_RULES = [
        'brand' => 'required|min:2',
        'model' => 'required|min:2',
        'year' => 'required',
        'maxSpeed​' => 'nullable|numeric|min:20|max:300',
        'isAutomatic' => 'required',
        'engine' => 'required',
        'numberOfDoors' => 'required|numeric|min:2|max:5'
    ];
}

