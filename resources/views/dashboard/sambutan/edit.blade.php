@extends('dashboard.layouts.main')
@section('container')
@if (session()->has('success'))
<div class="mt-3 pt-3">
    <div class="alert alert-success col-lg-10 mt-5" role="alert">
    {{ session('success') }}
    </div>
</div>
@endif
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-5 mt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2"><i class="uil uil-megaphone"></i> Sambutan</h1>
</div>
<div class="col-lg-12">
    {{-- /dashboard/posts + method POST otomais ke method store --}}
<form action="/dashboard/sambutan/update" method="post" class="mb-5" enctype="multipart/form-data">
    @csrf
  <div class="mb-3">
        <label for="image" class="form-label">image :</label>
        <input type="hidden" name="oldImage" value="{{ $sambutan->image }}"> 
        <img src="{{ asset('storage/'.$sambutan->image) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
        <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
    @error('image')
        <div class="invalid-feedback">
            {{$message}}
        </div> 
    @enderror
   </div>
    
  <div class="mb-3">
    <label for="sambutan" class="form-label">Sambutan : </label>
    @error('sambutan')
        <p class="text-danger">
            {{$message}}
        </p> 
    @enderror
        <textarea name="sambutan" id="sambutan" cols="1" rows="1" required>
          {{ old("visi",$sambutan->sambutan) }}
        </textarea>
  </div>


  <button type="submit" class="btn btn-primary mt-3">Update Sambutan</button>
</form>
</div>
@endsection