@extends('dashboard.layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-5 mt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create Post</h1>
</div>
<div class="col-lg-12">
    {{-- /dashboard/posts + method POST otomais ke method store --}}
<form action="/dashboard/posts" method="post" class="mb-5" enctype="multipart/form-data">
    @csrf
  <div class="mb-3">
    <label for="title" class="form-label">Title</label>
    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="New Post Title" autofocus value="{{ old('title') }}">
    @error('title')
        <div class="invalid-feedback">
            {{$message}}
        </div> 
    @enderror
  </div>
  <div class="mb-3">
    <label for="slug" class="form-label">Slug</label>
    <input type="text" name="slug" class="form-control @error('slug') is-invalid @enderror" id="slug" placeholder="new-post-slug" value="{{ old('slug') }}">
    @error('slug')
        <div class="invalid-feedback">
            {{$message}}
        </div> 
    @enderror
  </div>
  <div class="mb-3">
    <label for="datepicker" class="form-label">published :</label>
    <input type="text" name="published_at" class="form-control @error('slug') is-invalid @enderror" id="datepicker"  value="{{ old('published_at') }}">
    @error('published_at')
        <div class="invalid-feedback">
            {{$message}}
        </div> 
    @enderror
  </div>
  <div class="mb-3">
    <label for="category_id" class="form-label">Category</label>
    <select class="form-select @error('category_id') is-invalid @enderror" name="category_id" id="category_id" required>
        <option selected disabled>Pilih kategory</option>
        @foreach ($categories as $category)  
            @if (old('category_id') == $category->id)
                <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
            @else
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endif
        @endforeach
    </select>
    @error('category_id')
        <div class="invalid-feedback">
            {{$message}}
        </div> 
    @enderror
  </div>
  <div class="mb-3">
        <label for="image" class="form-label">Thumbnail :</label>
        <img class="img-preview img-fluid mb-3 col-sm-5">
        <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
    @error('image')
        <div class="invalid-feedback">
            {{$message}}
        </div> 
    @enderror
   </div>

<div class="mb-3">
  <label class="form-label">Fitur AI (Beta):</label>
  <div class="input-group">
    <input id="promptInput" name="promptInput" type="text" class="form-control" placeholder="Keajaiban AI...." aria-label="Recipient's username" aria-describedby="button-addon2"value="{{ old('promptInput') }}" >
    <button class="btn btn-outline-secondary" type="button" id="generateBtn"><i class="bi bi-magic"></i> Generate</button>
    <button class="btn btn-outline-secondary" type="button" id="stopBtn"><i class="uil uil-stop-circle"></i> Stop</button>
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
            {{ old("body") }}
        </textarea>
  </div>

  <button type="submit" class="btn btn-primary mt-3">Create Post</button>
</form>
</div>
<script>
        $('#datepicker').datepicker({
            uiLibrary: 'bootstrap5',
            format: 'yyyy-mm-dd',
            value: '{{ now()->format('Y-m-d') }}'
        });
</script>
@endsection