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

    //relations

    public function tour(){
        return $this->belongsToMany(Tour::class,'tour_images');
    }

    public function vehicle(){
        return $this->belongsToMany(Vehicle::class,'vehicle_images');
    }
}
