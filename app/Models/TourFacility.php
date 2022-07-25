<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TourFacility extends Model
{
    use HasFactory;
    protected $fillable = [
        "name",
        "tour_id",
        "unname"
    ];

    public function tour()
    {
        return $this->belongsTo(Tour::class);
    }
}
