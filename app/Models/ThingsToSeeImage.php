<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ThingsToSeeImage extends Model
{
    use HasFactory;
    protected $guarded = [];


    //----------- relations ---------
    public function thingsToSee(){
        return $this->belongsTo(ThingsToSee::class);
    }

    public function image(){
        return $this->belongsTo(Image::class);
    }
    

    
}
