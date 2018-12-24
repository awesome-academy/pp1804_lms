<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Book;

class Author extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'name', 
    ];

    public function book()
    {
        return $this->belongsTo(Book::class);
    }
}
