<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TourProgram extends Model
{
    use HasFactory;
    protected $fillable = [
        'day',
        'date',
        'destination_id',
        'parent_destination_id',
        'tour_id'
    ];
}
