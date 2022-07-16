<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Image;


class Vehicle extends Model
{
    use HasFactory;
    protected $guarded = [];

    //relations
    public function type()
    {
        return $this->belongsTo(VehicleType::class);
    }

  
    public function images()
    {
        return $this->belongsToMany(Image::class, 'vehicle_images');
    }

}


