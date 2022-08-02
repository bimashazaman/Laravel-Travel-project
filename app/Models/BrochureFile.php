<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BrochureFile extends Model
{
    use HasFactory;

    protected $guarded = [];

    // relation with brochure
    public function brochure()
    {
        return $this->belongsTo(Brochure::class,);
    }

    // relation with image
    public function image()
    {
        return $this->belongsTo(Image::class,);
    }
    

}
