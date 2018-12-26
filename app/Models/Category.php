<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Book;

class Category extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'name', 
        'slug',
    ];

    public function books()
    {
        return $this->belongsToMany(Book::class);
    }
}
