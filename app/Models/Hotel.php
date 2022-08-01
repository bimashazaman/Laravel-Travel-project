<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function highlights()
    {
        return $this->hasMany(HotelHighlights::class);
    }



    public function rooms()
    {
        return $this->hasMany(HotelRoom::class);
    }

    public function images()
    {
        return $this->belongsToMany(Image::class, 'hotel_images');
    }


    public function hotelImages()
    {
        return $this->hasMany(HotelImage::class);
    }

    public function hotelFacilities()
    {
        return $this->hasMany(HotelFacility::class);
    }

    public function hotelInfo()
    {
        return $this->hasMany(HotelInfo::class);
    }

    public function hotelType()
    {
        return $this->belongsTo(HotelType::class);
    }

    public function region()
    {
        return $this->belongsTo(Region::class);
    }

    public function destination()
    {
        return $this->belongsTo(Destination::class);
    }


    public function hotelKeys()
    {
        return $this->hasMany(HotelKey::class, 'hotel_id');
    }

}
