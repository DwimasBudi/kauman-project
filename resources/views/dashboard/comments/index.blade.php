@extends('dashboard.layouts.main')
@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-5 mt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"><i class="uil uil-comments"></i> Komentar</h1>
    </div>

@if (session()->has('success'))
<div class="alert alert-success col-lg-10" role="alert">
  {{ session('success') }}
</div>
@endif
    <div class="table-responsive col-lg-12">
        <table id="tabel-data" class="table table-striped table-bordered" max-width="100%" cellspacing="0">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Username</th>
              <th scope="col">Email</th>
              <th scope="col">Comment</th>
              <th scope="col">
                Action
              </th>
            </tr>
          </thead>
          <tbody>
            @foreach ($comments as $comment)
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
              <td>{{ $comment->username  }}</td>
              <td>{{ $comment->email  }}</td>
              <td>{{ $comment->comment}}</td>
              <td>
                <a href="{{ asset('post') }}/{{$posts->firstWhere('id',$comment->post_id)->slug }}" class="badge text-bg-primary" target="_blank"><i class="uil uil-eye"></i></a>
                <form action="/dashboard/comment/{{ $comment->id }}" method="post" class="d-inline">
                  @method('delete')
                  @csrf
                  <button class="badge bg-danger border-0"><i class="uil uil-times-circle"></i></button>
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