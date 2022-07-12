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

    public function tour(){
        return HasMany(Tour::class);
    }
}
