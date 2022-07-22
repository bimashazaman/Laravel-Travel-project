<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TourCategory extends Model
{
    use HasFactory;
    protected $fillable = [
        'name'
    ];

    //relations

    public function tours()
    {
        return $this->hasMany(Tour::class);
    }

    //relation with review
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
