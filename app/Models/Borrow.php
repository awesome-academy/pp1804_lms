<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Book;
use App\User;

class Borrow extends Model
{
    public $table = 'borrow';
    
    public $timestamps = false;

    protected $fillable = [
        'book_id', 
        'user_id',
        'start_time',
        'end_time',
        'return_time',
        'status',
    ];

    public function book()
    {
        return $this->belongsTo(Book::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
