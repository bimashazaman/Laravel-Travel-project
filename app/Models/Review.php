<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'title',
        'review',
        'image',
        'name',
        'email',
    ];

    //relations
    public function category()
    {
        return $this->belongsTo(TourCategory::class);
    }

    public function images()
    {
        return $this->belongsToMany(Image::class, 'review_images');
    }

    public function reviewImages()
    {
        return $this->hasMany(ReviewImage::class);
    }

    // public function types()
    // {
    //     return $this->belongsToMany(Type::class);
    // }
    
}
