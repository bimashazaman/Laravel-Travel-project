<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReviewImage extends Model
{
    use HasFactory;

    protected $fillable = [
        'review_id',
        'image_id',
    ];

    public function review()
    {
        return $this->belongsTo(Review::class);
    }

    public function images()
    {
        return $this->belongsToMany(Image::class, 'review_images');
    }
}
