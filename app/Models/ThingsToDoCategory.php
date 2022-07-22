<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ThingsToDoCategory extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function thingsToDo(){
        return $this->hasMany(ThingsToDo::class);
    }

}
