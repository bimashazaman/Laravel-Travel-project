<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingACarWithDriver extends Model
{
    use HasFactory;
    protected $guarded = [];

    //relations with vehicle
    // public function vehicle()
    // {
    //     return $this->belongsTo(Vehicle::class);
    // }
   
}
