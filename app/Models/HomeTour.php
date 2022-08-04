<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeTour extends Model
{
    use HasFactory;
    protected $guarded = [];


    //relation with tour
    public function tours()
    {
        return $this->hasMany(Tour::class, 'home_tour_id');
    }

}
