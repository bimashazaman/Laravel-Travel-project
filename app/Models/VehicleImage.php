<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VehicleImage extends Model
{
    use HasFactory;
    protected $guarded = [];


    //relations
    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }

    public function image()
    {
        return $this->belongsTo(Image::class);
    }

 
 

    
}
