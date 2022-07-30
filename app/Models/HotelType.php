<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HotelType extends Model
{
    use HasFactory;
    protected $fillable = [
        'name'
    ];

    public function hotels()
    {
        return $this->hasMany(Hotel::class);
    }
}
