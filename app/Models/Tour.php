<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    use HasFactory;
    protected $guarded = [];
  
    //each tour has many tourImages
    public function tourImages(){
        return $this->hasMany(TourImage::class);
    }

    //with image
    public function images()
    {
        return $this->belongsToMany(Image::class, 'tour_images');
    }

    //relation with departureTable
    public function departureTable(){
        return $this->hasMany(DepartureTable::class);
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

   //tour has many type
   public function types(){
       return $this->hasMany(Type::class, 'tour_id');
   }

   public function homeTour(){
       return $this->belongsTo(HomeTour::class, 'home_tours');
   }

   public function useful()
   {
       return $this->hasMany(TourUseful::class, 'tour_id');
   }

   
    

    
   
    
}
