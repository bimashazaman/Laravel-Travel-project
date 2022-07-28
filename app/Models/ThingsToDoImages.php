<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ThingsToDoImages extends Model
{
    use HasFactory;
    protected $guarded = [];

    //relation with image
    public function image()
    {
        return $this->belongsTo(Image::class);
    }

    //relation with things to do
    public function thingsToDo()
    {
        return $this->belongsTo(ThingsToDo::class);
    }

}
