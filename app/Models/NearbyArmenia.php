<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NearbyArmenia extends Model
{
    use HasFactory;
    protected $guarded = [];


    //relation with category
    public function category()
    {
        return $this->belongsTo(NearbyArmeniaCategory::class, 'category_id');
    }
}
