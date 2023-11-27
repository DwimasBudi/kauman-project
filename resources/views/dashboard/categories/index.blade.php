@extends('dashboard.layouts.main')
@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-5 mt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"><i class="uil uil-tag-alt"></i> My Categories</h1>
    </div>

@if (session()->has('success'))
<div class="alert alert-success col-lg-10" role="alert">
  {{ session('success') }}
</div>
@endif
    <div class="table-responsive col-lg-12">
      <a href="/dashboard/categories/create" class="btn btn-primary mb-3">Create new category</a>
        <table id="tabel-data" class="table table-striped table-bordered" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nama</th>
              <th scope="col">slug</th>
              <th scope="col">Jumlah Post</th>
              <th scope="col">
                Action
              </th>
            </tr>
          </thead>
          <tbody>
            @foreach ($categories as $category)
            <tr>
              @if (request('page'))
                  @php
                      $page = request('page');
                      $curentpage=$page*10-10;
                  @endphp
                  <td>{{ $loop->iteration+$curentpage }}</td>
                  @else
                  <td>{{ $loop->iteration }}</td>
              @endif
              <td>{{ $category->name  }}</td>
              <td>{{ $category->slug}}</td>
              <td>{{ $posts->where('category_id', $category->id)->count()}}</td>
              <td>
                <a href="/dashboard/categories/{{ $category->slug }}/edit" class="badge text-bg-warning"><i class="uil uil-edit"></i></a>
                <form action="/dashboard/categories/{{ $category->slug }}" method="post" class="d-inline">
                  @method('delete')
                  @csrf
                  <button class="badge bg-danger border-0"><i class="uil uil-times-circle"></i></button>
                   {{-- <a href="" class="badge text-bg-danger"></a> --}}
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      {{-- <div class="mb-3 col-md-12">
        {{ $posts->links() }}
      </div> --}}
@endsection