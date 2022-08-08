<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingMice extends Model
{
    use HasFactory;

    protected $guarded = [];

    //----------- relations ---------
    public function mice()
    {
        return $this->belongsTo(Mice::class);
    }
    
}
