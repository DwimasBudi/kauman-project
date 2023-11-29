@extends('dashboard.layouts.main')
@section('container')
        <div class="dash-content">
            @if (session()->has('success'))
            <div class="alert alert-success col-lg-10 mt-5" role="alert">
            {{ session('success') }}
            </div>
            @endif
            <div class="overview">
                <div class="title">
                    <i class="uil uil-tachometer-fast-alt"></i>
                    <span class="text">Dashboard</span>
                </div>

                <div class="boxes">
                    <div class="box box1">
                        <i class="uil uil-files-landscapes"></i>
                        <span class="text">Total Post</span>
                        <span class="number">{{ $post }}</span>
                    </div>
                    <div class="box box2">
                        <i class="uil uil-comments"></i>
                        <span class="text">Comments</span>
                        <span class="number">{{ $comment }}</span>
                    </div>
                    <div class="box box3">
                        <i class="uil uil-tag-alt"></i>
                        <span class="text">Category</span>
                        <span class="number">{{ $category }}</span>
                    </div>
                </div>
            </div>

            <div class="activity">
                <div class="title">
                    <i class="uil uil-clock-three"></i>
                    <span class="text">Recent Post</span>
                </div>

                <div class="activity-data">
                    <table class="table" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                            <th scope="col">Title</th>
                            <th scope="col">Category</th>
                            <th scope="col">Published</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $post)
                            <tr>
                            <td><a href="{{ asset('post') }}/{{ $post->slug }}" style="text-decoration: none; color: black;">{{ $post->title  }}</a></td>
                            <td>{{ $post->category->name}}</td>
                            <td style="width: 120px;">{{ \Carbon\Carbon::parse($post->published_at)->format('d-m-Y') }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                        </table>
                </div>
            </div>
        </div>
@endsection