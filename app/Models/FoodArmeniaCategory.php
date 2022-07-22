<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FoodArmeniaCategory extends Model
{
    use HasFactory;
    protected $guarded = [];


    //relation with model
    public function food()
    {
        return $this->hasMany(FoodArmenia::class, 'category_id');
    }
}
