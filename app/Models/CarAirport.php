<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarAirport extends Model
{
    use HasFactory;

    protected $fillable = [
        'details',
        'more_details',
    ];
}
