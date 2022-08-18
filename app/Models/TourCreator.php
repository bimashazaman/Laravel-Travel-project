<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TourCreator extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'start_date',
        'creator_destinations_id',
        'adult',
        'child',
        'car',
        'motorcycle',
        'bike',
        'hiking',
        'meals',
    ];

    public function creatorDestination()
    {
        return $this->belongsTo(CreatorDestination::class, 'creator_destinations_id');
    }


}
