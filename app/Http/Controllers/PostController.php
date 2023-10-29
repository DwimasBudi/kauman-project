<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\VisiMisi;
use App\Models\Sambutan;
use App\Models\Kontak;
use App\Models\Comment;

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
            'visi' => VisiMisi::get()->first(),
            'sambutan' => Sambutan::get()->first(),
            'kontak' => Kontak::get()->first(),
        ]);
    }
    public function show(Post $post)
    {
        // return dd($post->id);
        return view('post', [
            'title' => $post->title,
            'posts' => Post::orderBy('created_at', 'desc')->get(),
            'postx' => Post::orderBy('created_at', 'desc')->get(),
            'post' => $post,
            'categories'=> Category::latest()->get(),
            'comments' => Comment::where('post_id', $post->id)->paginate(3)

        ]);
    }
    
}
