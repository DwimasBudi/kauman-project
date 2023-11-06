<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    // protected $with = ['posts'];
    
    public function posts()
    {
        return $this->belongsTo(Post::class, 'post_id');
    }
    public function replies()
    {
        return $this->hasMany(Comment::class, 'reply_id');
    }
    // public function getRouteKeyName()
    // {
    //     return 'id';
    // }
}
