<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;

class PostController extends Controller
{
    public function index()
    {
        $title = "";
        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
        }
        return view('index', [
            // 'title' => 'All post ' . $title,
            // 'active' => 'post',
            // 'posts' => Post::all(),
            // 'xposts' => Post::latest()->filter(request(['search', 'category']))->paginate(100)->withQueryString(),
            'posts' => Post::orderBy('created_at', 'desc')->get(),
        ]);
    }
    public function show(Post $post)
    {
        return view('post', [
            'title' => $post->title,
            'posts' => Post::orderBy('created_at', 'desc')->get(),
            'post' => $post
        ]);
    }
    
}
