<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarWithDriver extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function images()
    {
        return $this->belongsToMany(Image::class, 'car_with_driver_images');
    }


    public function DriverImages()
    {
        return $this->hasMany(CarWithDriverImage::class);
    }
}
