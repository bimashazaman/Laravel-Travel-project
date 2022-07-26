<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accessiories extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function images()
    {
        return $this->belongsToMany(Image::class, 'accessiories_images');
    }

    // accessiories_images
    public function accessioriesImages()
    {
        return $this->hasMany(AccessioriesImage::class);
    }


}
