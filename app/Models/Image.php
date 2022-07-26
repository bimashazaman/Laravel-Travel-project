<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    protected $fillable = [
        "filename",
        "path"
    ];

    //----------- relations ---------
    public function tourImages(){
        return $this->hasMany(TourImage::class);
    }

    public function vehicleImages(){
        return $this->hasMany(VehicleImage::class);
    }

    public function hotelImages(){
        return $this->hasMany(HotelImage::class);
    }

    public function accessioriesImages(){
        return $this->hasMany(AccessioriesImage::class);
    }
}
