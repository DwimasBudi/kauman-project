<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Sambutan;
use App\Models\Kontak;

class DashboardController extends Controller
{
    public function index()
    {
        return view("dashboard.index",[
            'post'=> Post::all()->count(),
            'posts'=> Post::latest()->get()->take(10),
            'comment'=> Comment::all()->count(),
            'category'=> Category::all()->count(),
            
        ]);
    }
}
