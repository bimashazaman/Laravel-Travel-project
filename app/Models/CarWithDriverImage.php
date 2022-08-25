<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarWithDriverImage extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function driver()
    {
        return $this->belongsTo(CarWithDriver::class);
    }

    public function image()
    {
        return $this->belongsTo(Image::class);
    }

   
}
