<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $fillable = [
        'title', 'price', 'category', 'cover_image', 'image2', 'image3', 'image4', 'image5', 'description', 'popularity'
    ];
}
