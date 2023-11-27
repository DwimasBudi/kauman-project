@extends('dashboard.layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-5 mt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create Category</h1>
</div>
<div class="col-lg-12">
    {{-- /dashboard/posts + method POST otomais ke method store --}}
<form action="/dashboard/categories/{{ $category->slug }}" method="post" class="mb-5">
    @method("put")
    @csrf
    <div class="mb-3">
      <label for="category" class="form-label">Category Lama</label>
      <select class="form-select @error('category') is-invalid @enderror" name="category_id" id="category" required>
          <option selected disabled>Pilih kategory</option>
          @foreach ($categories as $cate)  
              @if (old('category_id') == $cate->id)
                  <option value="{{ $cate->id }}" selected>{{ $cate->name }}</option>
              @else
                  <option value="{{ $cate->id }}">{{ $cate->nama }}</option>
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
    <label for="title" class="form-label">Nama Category :</label>
    <input type="text" name="name" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="New Category Name" autofocus value="{{ old('title',$category->name) }}">
    @error('title')
        <div class="invalid-feedback">
            {{$message}}
        </div> 
    @enderror
  </div>
  <div class="mb-3">
    <label for="slug" class="form-label">Slug :</label>
    <input type="text" name="slug" class="form-control @error('slug') is-invalid @enderror" id="slug" placeholder="new-post-slug" value="{{ old('slug',$category->slug) }}">
    @error('slug')
        <div class="invalid-feedback">
            {{$message}}
        </div> 
    @enderror
  </div>

  <button type="submit" class="btn btn-primary mt-3">Update Category</button>
</form>
</div>
@endsection