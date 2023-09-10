<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Post extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $with = ['user', 'category'];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function scopeFilter($query, array $filters)
    {
        if (isset($filters['search'])) {
            $search = $filters['search'];
            $query->where(function ($query) use ($search) {
                $query->where('title', 'like', '%' . $search . '%')
                    ->orWhere('body', 'like', '%' . $search . '%');
            });
        }

        if (isset($filters['category'])) {
            $category = $filters['category'];
            $query->whereHas('category', function ($query) use ($category) {
                $query->where('slug', $category);
            });
        }

        if (isset($filters['author'])) {
            $author = $filters['author'];
            $query->whereHas('user', function ($query) use ($author) {
                $query->where('username', $author);
            });
        }

        return $query;
    }
}
