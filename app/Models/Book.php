<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'sku', 
        'name', 
        'slug', 
        'description', 
        'number_of_page', 
        'view_count', 
        'quantity', 
        'publisher', 
        'author_id', 
        'status', 
    ];
}
