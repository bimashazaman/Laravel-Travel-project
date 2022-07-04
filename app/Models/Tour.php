<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    use HasFactory;
    protected $fillable = [
        "destination_id",
        "category_id",
        "start_date",
        "end_date",
        "duration",
        "price",
        "description"
    ];

    //----------- relations ---------

    //tour images
    public function images()
    {
        return $this->belongsToMany(Image::class, 'tour_images');
    }

    //highlights
    public function highlights()
    {
        return $this->hasMany(TourHighlight::class, 'tour_id');
    }

    //facility
    public function facility()
    {
        return $this->hasMany(TourFacility::class);
    }

    //program
    public function program()
    {
        return $this->hasMany(TourProgram::class);
    }
}
