@extends('main-layouts.main')
@section('container')
 <div class="continer">
    <div class="row justify-content-center mb-5">
        <div class="col-md-8 ">
            <h2 class='mb-3'>{{ $post->title }}</h2>
            <p>By sdKauman</a> in <a href="/categories/{{ $post->category->slug }}" class='text-decoration-none'>{{ $post->category->name }}</a></p>
                <div style="max-height:350px; overflow:hidden">
                    <img src="{{ asset('storage/'. $post->image) }}" class="card-img-top" alt="{{ $post->category->name }}">
                </div>
            <article class="my-3 fs-5">
                {!! $post->body !!}
            </article>
            <a href="/">Back to Posts</a>
        </div>
    </div>
</div>
@endsection