<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CreatorDestination extends Model
{
    use HasFactory;

protected $guarded = [];

    public function tourCreators()
    {
        return $this->hasMany(TourCreator::class);
    }
}
