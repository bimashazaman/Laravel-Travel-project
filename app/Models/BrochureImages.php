<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BrochureImages extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function brochure()
    {
        return $this->belongsTo(Brochure::class);
    }

    public function image()
    {
        return $this->belongsTo(Image::class);
    }
}
