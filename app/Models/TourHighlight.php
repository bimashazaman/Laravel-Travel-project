<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TourHighlight extends Model
{
    use HasFactory;
    protected $fillable = [
        "name",
        "tour_id"
    ];
}
