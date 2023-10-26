@extends('main-layouts.main')
@section('container')
    <main>
        <div class="container-fluids w-100 d-flex justify-content-center carousel-container">
            <div class="rows carousel-wrap-row d-flex justify-content-center w-100">
                <div class="col-md-12 carousel-wrap w-100">
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

            </div>

        </div>
        <div class="continer-fluid d-flex justify-content-center mt-3 flex-wrap px-5">
            <div class="container mx-0 px-0">
                <h3>Artikel</h3>
            </div>
            <div class="owl-carousel owl-theme">
                @foreach ($posts->skip(3)->take(6) as $post)
                <div class="item">
                    <a class="cover-link" href="/post/{{ $post->slug }}" target="_blank"></a>
                        <div class="carousel-item-image">
                            <img src="{{asset('storage/'. $post->image) }}" class="item-image">
                        </div>
                        <div class="carousel-item-text">
                            <h6 class="card-title">{{ $post->title }}</h6>
                            <span class="card-text mb-0 fw-bold fs-8">sdnKauman</span><span class="fs-8"> - 7 July 2023</span>
                        </div>
                </div>
                @endforeach
            </div>
        </div> 
        <div class="container-fluid mt-3 px-0 mx-0">  
                <div class="motivasi">
                    <div class="item text-center">
                        <blockquote>Jangan berhenti belajar, belajarlah walaupun itu hanya membaca kesimpulan buku paketmu.</blockquote>
                        <cite>Dwimas Sang Guru</cite>
                    </div>
            </div>
        </div>
        <div class="container-fluid my-5 px-5">
            <div class="row">
                <div class="col-md-6 d-flex justify-content-center align-items-center">
                    <img src="img/presiden.png" alt="" style="border-radius: 50px; height: 400px; max-width:450px; object-fit:cover;">
                </div>
                <div class="col-md-6 justfy-text text-center">
                    <h4>Sambuatan Kepala Sekolah</h4>
                    <h6>SD Negeri Kauman Magetan</h6>
                    <p class="text-justify" style="text-align: justify;">
                        Assalamualaikum warahmatullahi wabarakaatuh Alhamdulillahirobbil aalamiin. Kita panjatkan puji syukur ke hadirat Allah
                        SWT Tuhan Yang Maha Kuasa atas limpahan rahmat dan karunia-Nya yang selalu diberikan kepada kita semua. Selamat datang
                        di website SD Negeri Kauman Magetan, media informasi sekolah yang dapat diakses dengan mudah oleh siswa, orang tua/wali,
                        alumni dan stake holder secara luas . Pendidikan sebagai kunci kemajuan dan keunggulan bangsa, sekolah memiliki tanggung
                        jawab menyiapkan sumber daya manusia yang tangguh, adaptif terhadap perubahan yang begitu cepat. SD Negeri Kauman Magetan
                        melaksanakan proses pendidikan untuk membekali dan mengantarkan lulusannya berprestasi unggul, mampu bersaing di tingkat
                        global, berbudaya, peduli lingkungan, berwawasan Ilmu
                    </p>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            
        </div>
    </main>
@endsection