<?php

namespace App\Models;

use App\Models\Tag;
use App\Models\Comment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['title','content'];

    /*public function comments()
    {
        return $this -> hasMany(Comment::class);
    }*/

    public function tags()
    {
        return $this -> belongsToMany(Tag::class);
    }

    /*public function comments()
    {
        return $this-> morphMany(comment::class,'commentable');
    }*/
}
