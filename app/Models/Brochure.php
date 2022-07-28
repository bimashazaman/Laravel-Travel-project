<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brochure extends Model
{
    use HasFactory;
    protected $guarded = [];


    public function images()
    {
        return $this->belongsToMany(Image::class, 'brochure_images');
    }

    // relation with brochure images
    public function brochureImages()
    {
        return $this->hasMany(BrochureImages::class);
    }

}
