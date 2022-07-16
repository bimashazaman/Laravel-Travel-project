<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    use HasFactory;
    protected $fillable = [
        "name",
        "destination_id",
        "category_id",
        "start_date",
        "end_date",
        "duration",
        "one_day_price",
        "one_week_price",
        "one_month_price",
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

    //category
    public function category(){
        return $this->belongsTo(TourCategory::class);
    }
}
