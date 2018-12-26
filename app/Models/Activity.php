<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Activity extends Model
{
    protected $fillable = [
        'name', 
        'description',
        'user_id',
        'subject_id',
        'type',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
