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
    <h1 class="h2"><i class="uil uil-at"></i> Kontak</h1>
</div>
<div class="col-lg-12">
    {{-- /dashboard/posts + method POST otomais ke method store --}}
<form action="/dashboard/kontak/update" method="post" class="mb-5" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
    <label for="email" class="form-label">Email : </label>
    <input type="text" name="email" class="form-control @error('title') is-invalid @enderror" id="email" placeholder="email" autofocus value="{{ old('email',$kontak->email) }}">
    @error('email')
        <div class="invalid-feedback">
            {{$message}}
        </div> 
    @enderror
  </div>
    <div class="mb-3">
    <label for="alamat" class="form-label">alamat : </label>
    <input type="text" name="alamat" class="form-control @error('alamat') is-invalid @enderror" id="alamat" placeholder="alamat" autofocus value="{{ old('alamat',$kontak->alamat) }}">
    @error('alamat')
        <div class="invalid-feedback">
            {{$message}}
        </div> 
    @enderror
  </div>
    <div class="mb-3">
    <label for="hp" class="form-label">telephone : </label>
    <input type="text" name="hp" class="form-control @error('hp') is-invalid @enderror" id="hp" placeholder="+628123456789" autofocus value="{{ old('hp',$kontak->hp) }}">
    @error('hp')
        <div class="invalid-feedback">
            {{$message}}
        </div> 
    @enderror
  {{-- </div>
    <div class="mb-3">
    <label for="fax" class="form-label">fax : </label>
    <input type="text" name="fax" class="form-control @error('fax') is-invalid @enderror" id="fax" placeholder="fax" autofocus value="{{ old('fax',$kontak->fax) }}">
    @error('fax')
        <div class="invalid-feedback">
            {{$message}}
        </div> 
    @enderror
  </div> --}}


  <button type="submit" class="btn btn-primary mt-3">Update Kontak</button>
</form>
</div>
@endsection