@extends('main-layouts.main')
@section('container')
            <div class="container-fluid mt-3 w-100 d-flex justify-content-center carousel-container">
            <div class="row carousel-wrap-row">
                <div class="col-md-8 carousel-wrap">
                    <div id="carouselExampleCaptions" class="carousel slide bg-danger" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                                aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner h-100 w-100">
                            <div class="carousel-item active h-100">
                                <a class="cover-link" href="/post/{{ $posts[0]->slug }}" target="_blank"></a>
                                <img src="{{ asset('storage/'.$posts[0]->image)  }}" class="d-block w-100 h-100" alt="...">
                                <div class="carousel-caption">
                                    <a class="badge" href="">{{ $posts[0]->category->name }}</a>
                                    <h5>{{ $posts[0]->title }}</h5>
                                    <span class="card-text mb-0 fw-bold fs-8">sdKauman</span><span class="fs-8"> - 7 July 2023</span>
                                    <!-- <p>Some representative placeholder content for the first slide.</p> -->
                                </div>
                            </div>
                            @foreach ($posts->skip(1)->take(2) as $post)
                            <div class="carousel-item h-100">
                                <a class="cover-link" href="/post/{{ $post->slug }}" target="_blank"></a>
                                <img src="{{ asset('storage/'. $post->image) }}" class="d-block w-100 h-100" alt="...">
                                <div class="carousel-caption">
                                    <a class="badge" href="">{{ $post->category->name }}</a>
                                    <h5>{{ $post->title }}</h5>
                                    <span class="card-text mb-0 fw-bold fs-8">sdKauman</span><span class="fs-8"> - 7 July 2023</span>
                                    <!-- <p>Some representative placeholder content for the first slide.</p> -->
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <button class="carousel-control-prev control" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next control" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <div class="col-md-4 d-flex flex-wrap main">
                    @foreach ($posts->skip(3)->take(3) as $post)
                    <div class="card text-bg-dark img-card mb-1">
                        <a class="cover-link" href="/post/{{ $post->slug }}" target="_blank"></a>
                        <img src="{{asset('storage/'. $post->image) }}" class="card-img" alt="...">
                        <div class="card-img-overlay d-flex flex-column justify-content-end align-items-start">
                            <a class="badge" href="">{{ $post->category->name }}</a>
                            <p class="card-text">{{ $post->title }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- Bagian kiri / BERITA -->

        <div class="container-fluid mt-3">
            <h3>Berita</h3>
            <div class="row">
                <div class="col-lg-8 d-flex justify-content-start flex-wrap side-main">
                         @php
                             $berita= $posts->FirstWhere('category_id', 1);
                         @endphp
                        <div class="cards mt-2 card-main" style="width: 20rem">
                            <a class="cover-link" href="/post/{{ $berita->slug }}" target="_blank"></a>
                            <img src="{{asset('storage/'. $berita->image) }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <a href="https://youtube.com" class="badge" target="_blank">{{ $berita->category->name }}</a>
                                <h5 class="mb-0">{{ $berita->title }}</h5>
                                <span class="card-text mb-0 fw-bold fs-8">sdKauman</span><span class="fs-8"> - 7 July 2023</span>
                                <p class="card-text text-justify" style="text-align:justify; font-size: 13px;">{{ $berita->excerpt }}</p>
                            </div>
                        </div>

                        <div class="content ms-4 mt-2">
                            @foreach ($posts->Where('category_id', 1)->skip(1)->take(4) as $post)
                            <div class="cards mb-3 d-flex justify-content-between align-items-center" style="max-width: 330px; flex-wrap: nowrap;">
                                <a class="cover-link" href="/post/{{ $post->slug }}" target="_blank"></a>
                                    <img src="{{asset('storage/'. $post->image) }}" class="img-fluid rounded w-100 h-100" alt="...">
                                    <div class="card-body ms-2">
                                        <p class="card-text img-text-10 mb-0">{{ $post->title }}</p>
                                        <a href="" class="badge ">{{ $post->category->name }}</a>
                                        <span class="fs-8"> - 7 July 2023</span>
                                    </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="content">

                        </div>
                </div>
                <!-- Samping kanan/ side / Pengumuman -->
                <div class="col-lg-4">
                    <h3>Pengumuman</h3>
                    <div class="content">
                         @foreach ($posts->Where('category_id', 3)->take(4) as $post)
                        <div class="cards mb-3 d-flex justify-content-between align-items-center" style="max-width: 330px; flex-wrap: nowrap;">
                            <a class="cover-link" href="/post/{{ $post->slug }}" target="_blank"></a>
                            <img src="{{asset('storage/'. $post->image )}}" class="img-fluid rounded w-100 h-100" alt="...">
                            <div class="card-body ms-2">
                                <p class="card-text img-text-10 mb-0">{{ $post->title }}</p>
                                <a href="" class="badge ">{{ $post->category->name }}</a>
                                <span class="fs-8"> - 7 July 2023</span>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <!-- Akhir pengumuman -->
            </div>
            <!-- akhir div row-->
            <div class="content">
                <div class="row">
                    <div class="col-md-8">
                        {{-- Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti dolorem ducimus animi exercitationem perferendis ea voluptatem dolorum ullam maxime cum sunt, delectus vero. Distinctio quia sed dignissimos error soluta repellendus cum doloremque saepe reprehenderit non deserunt rerum, neque hic molestiae incidunt accusamus autem, eaque perspiciatis reiciendis excepturi, est mollitia totam. Deleniti voluptatibus nam rerum neque quos, exercitationem delectus eaque modi error nobis soluta explicabo officiis veniam tenetur minima corrupti! Nobis, perspiciatis vitae? Cumque quaerat et optio, ratione quidem consequatur! Culpa tempora asperiores officiis aspernatur veritatis unde inventore eius odit, ex natus ut iusto ipsa? Eum pariatur eveniet ipsam maxime optio. --}}
                    </div>
                </div>
            </div>
        </div>
@endsection