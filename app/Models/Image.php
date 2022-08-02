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

    public function miceImages(){
        return $this->hasMany(MiceImage::class);
    }

    public function travelBlogImages(){
        return $this->hasMany(TravelBlogImage::class);
    }

    public function tourEventImages(){
        return $this->hasMany(TourEventImage::class);
    }

    public function thingsToSeeImages(){
        return $this->hasMany(ThingsToSeeImage::class);
    }

    public function thingsToDoImages(){
        return $this->hasMany(ThingsToDoImages::class);
    }

    public function foodArmeniaImages(){
        return $this->hasMany(FoodArmeniaImages::class);
    }

    public function nearbyArmeniaImages(){
        return $this->hasMany(NearbyArmeniaImages::class);
    }

    public function brochureImages(){
        return $this->hasMany(BrochureImages::class);
    }

    public function vacancyImages(){
        return $this->hasMany(VacancyImage::class);
    }

    public function reviewImages(){
        return $this->hasMany(ReviewImage::class);
    }

    public function brochurefiles(){
        return $this->hasOne(BrochureFile::class);
    }


    

    
}
