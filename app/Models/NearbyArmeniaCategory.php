<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NearbyArmeniaCategory extends Model
{
    use HasFactory;
    protected $guarded = [];

    //relation with model
    public function model()
    {
        return $this->belongsTo(NearbyArmenia::class, 'category_id');
    }
}
