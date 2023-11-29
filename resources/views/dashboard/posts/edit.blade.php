@extends('dashboard.layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-5 mt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create Post</h1>
</div>
<div class="col-lg-12">
    {{-- /dashboard/posts + method POST otomais ke method store --}}
<form action="/dashboard/posts/{{ $post->slug }}" method="post" class="mb-5" enctype="multipart/form-data">
    @method("put")
    @csrf
  <div class="mb-3">
    <label for="title" class="form-label">Title</label>
    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="New Post Title" autofocus value="{{ old('title',$post->title) }}">
    @error('title')
        <div class="invalid-feedback">
            {{$message}}
        </div> 
    @enderror
  </div>
  <div class="mb-3">
    <label for="slug" class="form-label">Slug</label>
    <input type="text" name="slug" class="form-control @error('slug') is-invalid @enderror" id="slug" placeholder="new-post-slug" value="{{ old('slug',$post->slug) }}">
    @error('slug')
        <div class="invalid-feedback">
            {{$message}}
        </div> 
    @enderror
  </div>
  <div class="mb-3">
    <label for="datepicker" class="form-label">published :</label>
    <input type="text" name="published_at" class="form-control @error('slug') is-invalid @enderror" id="datepicker"  value="{{ old('published_at', \Carbon\Carbon::parse($post->published_at)->format('Y-m-d') ) }}">
    @error('published_at')
        <div class="invalid-feedback">
            {{$message}}
        </div> 
    @enderror
  </div>
  <div class="mb-3">
    <label for="category" class="form-label">Category</label>
    <select class="form-select @error('category') is-invalid @enderror" name="category_id" id="category" required>
        <option selected disabled>Pilih kategory</option>
        @foreach ($categories as $category)  
            @if (old('category_id', $post->category_id) == $category->id)
                <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
            @else
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endif
        @endforeach
    </select>
    @error('category')
        <div class="invalid-feedback">
            {{$message}}
        </div> 
    @enderror
  </div>
  <div class="mb-3">
        <label for="image" class="form-label">image</label>
        <input type="hidden" name="oldImage" value="{{ $post->image }}"> 
        <img src="{{ asset('storage/'.$post->image) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
        <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
    @error('image')
        <div class="invalid-feedback">
            {{$message}}
        </div> 
    @enderror
   </div>
<div class="mb-3">
  <label class="form-label"><i class="bi bi-magic"></i> Fitur AI (Beta):</label>
  <div class="input-group">
    <input id="promptInput" type="text" class="form-control" placeholder="Keajaiban AI...." aria-label="Recipient's username" aria-describedby="button-addon2">
    <button class="btn btn-outline-secondary" type="button" id="generateBtn"><i class="bi bi-magic"></i> Generate</button>
  </div>
  <button type="button" class="btn btn-primary mt-2" id="perbaikiButton"><i class="bi bi-magic"></i> Perbaiki Penulisan (AI)</button>
  {{-- <button type="button" class="btn btn-warning">Warning</button> --}}
</div>
  <div class="mb-3">
    <label for="body" class="form-label">Body</label>
    @error('body')
        <p class="text-danger">
            {{$message}}
        </p> 
    @enderror
        <textarea name="body" id="body" cols="30" rows="20" required>
          {{ old("body",$post->body) }}
        </textarea>
  </div>

  <button type="submit" class="btn btn-primary mt-3">Update Post</button>
</form>
</div>
<script>
        $('#datepicker').datepicker({
            uiLibrary: 'bootstrap5',
            format: 'yyyy-mm-dd',
        });
</script>
@endsection