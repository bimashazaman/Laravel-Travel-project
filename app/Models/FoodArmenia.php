<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FoodArmenia extends Model
{
    use HasFactory;
    protected $guarded = [];

    //relation with category
    public function category()
    {
        return $this->belongsTo(FoodArmeniaCategory::class, 'category_id');
    }

    //relation with images
    public function images()
    {
        return $this->belongsToMany(Image::class, 'food_armenia_images');
    }

    //relation with food and drink
    public function foodArmeniaImages()
    {
        return $this->hasMany(FoodArmeniaImages::class);
    }
}
