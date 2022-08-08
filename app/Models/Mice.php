<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mice extends Model
{
    use HasFactory;


    protected $guarded = [];


    //----------- relations ---------
    public function images()
    {
        return $this->belongsToMany(Image::class, 'mice_images');
    }

    public function miceImages(){
        return $this->hasMany(MiceImage::class);
    }

    public function booking(){
        return $this->hasMany(BookingMice::class, 'mice_id');
    }
}
