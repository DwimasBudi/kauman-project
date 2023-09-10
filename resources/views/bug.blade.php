{{-- @php
    dd($posts->where('category_id', 2)->toArray());
@endphp --}}

<div class="container">
        <div class="row">
            @foreach ($posts->take(2) as $post)
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="position-absolute px-3 py-2" ><a href="/posts?category={{ $post->category->slug }}" class='text-decoration-none text-white'>{{ $post->category->name }}</a></div>
                
                <div class="card-body">
                    <h5 class="card-title"><a href="/post/{{ $post->slug }}" class="text-decoration-none text-dark">{{ $post->title }}</a></h5>
                    <p>By <a href="/posts?author={{ $post->user->username }}" class='text-decoration-none'>{{ $post->user->name }}</a>  <small class="text-body-secondary">{{ $post->created_at->diffForHumans() }}</small></p>
                    <p class="card-text">{{ $post->excerpt }}</p>
                    <a href="/post/{{ $post->slug }}" class="btn btn-primary">Read more</a>
                </div>
                </div>
            </div>
            <hr>
            @endforeach
        </div>
</div>
<div class="container">
        <div class="row">
            @foreach ($posts->skip(2) as $post)
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="position-absolute px-3 py-2" ><a href="/posts?category={{ $post->category->slug }}" class='text-decoration-none text-white'>{{ $post->category->name }}</a></div>
                
                <div class="card-body">
                    <h5 class="card-title"><a href="/post/{{ $post->slug }}" class="text-decoration-none text-dark">{{ $post->title }}</a></h5>
                    <p>By <a href="/posts?author={{ $post->user->username }}" class='text-decoration-none'>{{ $post->user->name }}</a>  <small class="text-body-secondary">{{ $post->created_at->diffForHumans() }}</small></p>
                    <p class="card-text">{{ $post->excerpt }}</p>
                    <a href="/post/{{ $post->slug }}" class="btn btn-primary">Read more</a>
                </div>
                </div>
            </div>
            <hr>
            @endforeach
        </div>
</div>
