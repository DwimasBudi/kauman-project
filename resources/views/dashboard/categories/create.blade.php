@extends('dashboard.layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-5 mt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create Category</h1>
</div>
<div class="col-lg-12">
    {{-- /dashboard/posts + method POST otomais ke method store --}}
<form action="/dashboard/categories" method="post" class="mb-5">
    @csrf
  <div class="mb-3">
    <label for="title" class="form-label">Nama Category :</label>
    <input type="text" name="name" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="New Category Name" autofocus value="{{ old('title') }}">
    @error('name')
        <div class="invalid-feedback">
            {{$message}}
        </div> 
    @enderror
  </div>
  <div class="mb-3">
    <label for="slug" class="form-label">Slug :</label>
    <input type="text" name="slug" class="form-control @error('slug') is-invalid @enderror" id="slug" placeholder="new-category-slug" value="{{ old('slug') }}">
    @error('slug')
        <div class="invalid-feedback">
            {{$message}}
        </div> 
    @enderror
  </div>

  <button type="submit" class="btn btn-primary mt-3">Create Category</button>
</form>
</div>
@endsection