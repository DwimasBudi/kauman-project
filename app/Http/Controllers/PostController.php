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
        return view('index', [
            'posts' => Post::orderBy('id', 'desc')->get(),
            'headline' => Post::orderBy('id', 'asc')->get(),
            'visi' => VisiMisi::get()->first(),
            'sambutan' => Sambutan::get()->first(),
            'kontak' => Kontak::get()->first(),
            'categories' => Category::orderBy('name')->get(),
            'title' => 'SD Negeri Kauman Magetan',
        ]);
    }
    public function blog()
    {
        $title = "";
        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = ' | '.$category->name;
        }
        return view('blog', [
            'posts' => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(10)->withQueryString(),
            'title' => 'SD Negeri Kauman Magetan' . $title,
            // 'posts' => Post::orderBy('created_at', 'desc')->paginate(10),
            'postx' => Post::orderBy('created_at', 'desc')->get(),
            'visi' => VisiMisi::get()->first(),
            'sambutan' => Sambutan::get()->first(),
            'kontak' => Kontak::get()->first(),
            'categories'=> Category::latest()->get()
        ]);
    }
    public function show(Post $post)
    {
        return view('post', [
            'title' => $post->title,
            'posts' => Post::orderBy('created_at', 'desc')->get(),
            'postx' => Post::orderBy('created_at', 'desc')->get(),
            'post' => $post,
            'categories'=> Category::latest()->get(),
            'comments' => Comment::where('post_id', $post->id)->where('reply_id', null)->paginate(10),

        ]);
    }
    
}
