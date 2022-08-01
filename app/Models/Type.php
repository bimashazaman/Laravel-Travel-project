<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;

    protected $guarded = [];

   // relation with tour
    public function tour(){
         return $this->belongsTo(Tour::class);
    }


    // public function review(){
    //     return $this->hasMany(Review::class);
    // }
   
    



}
