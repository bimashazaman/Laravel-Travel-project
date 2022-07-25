<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DepartureTable extends Model
{
    use HasFactory;

    protected $guarded = [];


    //relation with tour
    public function tour(){
        return $this->belongsTo(Tour::class);
    }
}
