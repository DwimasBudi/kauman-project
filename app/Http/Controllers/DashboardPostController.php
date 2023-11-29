<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use App\Models\Category;
use Illuminate\Support\Str;
use DOMDocument;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class DashboardPostController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("dashboard.posts.index", [
            'posts' => Post::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("dashboard.posts.create", [
            'categories' => Category::orderBy('name')->get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255|min:10',
            'slug' => 'required|unique:posts',
            'category_id' => 'required',
            'image' => 'required|image|file|max:1024',
            'body' => 'required',
            'published_at' => 'required',
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('post-images');
        }
        // dd($validatedData['body']);
        // Strip_tags untuk menghilangkan tags html
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body, 200));

        $dom = new DOMDocument();
        $dom->loadHTML($validatedData['body']);

        // Get all img elements in the HTML
        $images = $dom->getElementsByTagName('img');

        foreach ($images as $key => $img) {
            $data = base64_decode(explode(',', explode(';', $img->getAttribute('src'))[1])[1]);
            $image_name = "/storage/post-images/" . time() . $key . '.png';
            file_put_contents(public_path() . $image_name, $data);

            $img->removeAttribute('src');
            $img->setAttribute('src', $image_name);
        }
        $body = $dom->getElementsByTagName('body')->item(0);

        if ($body) {
            $Description = '';
            foreach ($body->childNodes as $node) {
                $Description .= $dom->saveHTML($node);
            }
        }
        
        $validatedData['body'] = $Description;
        // dd($validatedData['body']);
        Post::create($validatedData);

        return redirect('/dashboard/posts')->with('success', 'New post has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        // return dd($post);
        return view("dashboard.posts.edit", [
            'post' => $post,
            'categories' => Category::orderBy('name')->get(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $rules = [
            'title' => 'required|max:255|min:4',
            'category_id' => 'required',
            'image' => 'image|file|max:5024',
            'body' => 'required',
            'published_at' => 'required',
        ];

        if($request->slug!==$post->slug){
            $rules['slug'] = 'required';
        }

        $validatedData = $request->validate($rules);
        if ($request->file('image')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('post-images');
        }
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body,200));

        $dom = new DOMDocument();
        $dom->loadHTML($validatedData['body']);

        // Get all img elements in the HTML
        $images = $dom->getElementsByTagName('img');

        foreach ($images as $key => $img) {

            // Check if the image is a new one
            if (strpos($img->getAttribute('src'), 'data:image/') === 0) {

                $data = base64_decode(explode(',', explode(';', $img->getAttribute('src'))[1])[1]);
                $image_name = "/storage/post-images/" . time() . $key . '.png';
                file_put_contents(public_path() . $image_name, $data);

                $img->removeAttribute('src');
                $img->setAttribute('src', $image_name);
            }
        }

        $body = $dom->getElementsByTagName('body')->item(0);

        if ($body) {
            $Description = '';
            foreach ($body->childNodes as $node) {
                $Description .= $dom->saveHTML($node);
            }
        }

        $validatedData['body'] = $Description;

        Post::where('id',$post->id)->update($validatedData);
        
        return redirect('/dashboard/posts')->with('success','Post Has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post = Post::find($post->id);
        // dd($post);
        $dom = new DOMDocument();
        libxml_use_internal_errors(true); // suppress error warnings
        $dom->loadHTML($post->body);
        libxml_clear_errors(); // clear errors after loading HTML
        // dd($dom);
        $images = $dom->getElementsByTagName('img');

        foreach ($images as $key => $img) {

            $src = $img->getAttribute('src');
            $path = Str::of($src)->after('/');


            if (File::exists($path)) {
                File::delete($path);
            }
        }

        if ($post->image) {
            Storage::delete($post->image);
        }

        Post::destroy($post->id);
        return redirect('/dashboard/posts')->with('success', 'Post has been deleted');
    }

    public function checkSlug(Request $request)
    {
        // return 'kont';
        // return view("welcome", [
        //     'posts' => Post::latest()->paginate(10)
        // ]);
        $slug = SlugService::createSlug(Post::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }

}
