<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rides extends Model
{
    use HasFactory;

        //add pickUp and dropOff location as fillable inthe future
    protected $fillable = [
        'rider_name',
        'rider_phone',
    ];
}
