<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mice extends Model
{
    use HasFactory;


    protected $fillable = [
        'name',
        'available',
        'total_pax',
        'personal',
        'Products',
        'Extra',
    ];
}
