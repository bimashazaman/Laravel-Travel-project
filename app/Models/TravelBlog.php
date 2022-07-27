<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TravelBlog extends Model
{
    use HasFactory;

    protected $guarded = [];

    //----------- relations ---------
    public function images()
    {
        return $this->belongsToMany(Image::class, 'travel_blog_images');
    }

    public function travelBlogImages(){
        return $this->hasMany(TravelBlogImage::class);
    }


}
