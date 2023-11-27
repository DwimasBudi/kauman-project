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
    <h1 class="h2"><i class="uil uil-bullseye"></i> Visi Misi</h1>
</div>
<div class="col-lg-12">
    {{-- /dashboard/posts + method POST otomais ke method store --}}
<form action="/dashboard/visi-misi/update" method="post" class="mb-5" enctype="multipart/form-data">
    @csrf
  <div class="mb-3">
        <label for="image" class="form-label">image :</label>
        <input type="hidden" name="oldImage" value="{{ $visi->image }}"> 
        <img src="{{ asset('storage/'.$visi->image) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
        <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
    @error('image')
        <div class="invalid-feedback">
            {{$message}}
        </div> 
    @enderror
   </div>
    
  <div class="mb-3">
    <label for="visi" class="form-label">Visi : </label>
    @error('visi')
        <p class="text-danger">
            {{$message}}
        </p> 
    @enderror
        <textarea name="visi" id="visi" cols="1" rows="1" required>
          {{ old("visi",$visi->visi) }}
        </textarea>
  </div>

  <div class="mb-3">
    <label for="misi" class="form-label">Misi : </label>
    @error('misi')
        <p class="text-danger">
            {{$message}}
        </p> 
    @enderror
        <textarea name="misi" id="misi" cols="10" rows="5" required>
          {{ old("misi",$visi->misi) }}
        </textarea>
  </div>

  <button type="submit" class="btn btn-primary mt-3">Update Visi Misi</button>
</form>
</div>
@endsection