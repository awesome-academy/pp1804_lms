<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Image;
use App\Models\Author;
use App\Models\Comment;
use App\Models\Category;
use App\Models\User;
use App\Models\Borrow;

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

    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }

    public function authors()
    {
        return $this->belongsTo(Author::class, 'author_id');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_like');
    }

    public function user_borrows()
    {
        return $this->belongsToMany(User::class, 'borrow');
    }

    public function borrows()
    {
        return $this->hasMany(Borrow::class);
    }

    public function setSlugAttribute($value)
    {
        $this->attributes['slug'] = str_slug($value);
    }

    public function removeImage()
    {
        if(isset($this->image->url) && file_exists(public_path().'/'.config('customs.upload.image_path').'/'.$this->image->url)){
            unlink(public_path().'/'.config('customs.upload.image_path').'/'.$this->image->url);
        }
    }
}
