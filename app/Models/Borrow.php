<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Borrow extends Model
{
    protected $fillable = [
        'book_id', 
        'user_id',
        'start_time',
        'end_time',
        'return_time',
        'status',
    ];
}
