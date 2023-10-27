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
            <div class="row mt-5 pt-5 px-5">
                <div class="col-md-6 justfy-text">
                    <h2>Visi Misi</h2>
                    <h6>SD Negeri Kauman Magetan</h6>
                    <h6>Visi : Terwujudnya Sekolah Dalam Prestasi Berdasarkan Iman dan Takwa</h6>
                    <h6>Misi :</h6>
                    <ol>
                        <li>Meningkatkan dan menguatkan Iman dan Taqwa</li>
                        <li>Meningkatkan Kualitas Sumber Daya Manusia</li>
                        <li>Unggul Dalam Bidang Akademik dan Non-Akademik</li>
                        <li>Membentuk kerjasama yang menguasai ilmu pengetahuan, teknologi dan seni serta kacakapan hidup</li>
                        <li>Melaksanakan Pembelajaran Bernuansa PAKEM</li>
                        <li>Menjalin kerjasama yang harmonis antara warga sekolah, komite dan lingkungan</li>
                    </ol>
                </div>
                <div class="col-md-6 d-flex justify-content-center align-items-center">
                    <img src="img/6.jpg" alt="" style="border-radius: 50px; height: 400px; max-width:450px; object-fit:cover;">
                </div>
            </div>
        </div>
        <div class="container-fluids">
                <!-- Start Contact Info
    ============================================= -->
    <div id="contact" class="contact-info-area bg-gray default-padding">
        <div class="container">
            <div class="row">
                <div class="site-heading text-center">
                    <div class="col-lg-12 text-center">
                        <h2>Hubungi Kami</h2>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <!-- Start Maps & Contact Form -->
                <div class="row maps-form">
                    <div class="col-lg-6 maps">
                        <h3>Denah Lokasi</h3>
                        <div class="google-maps">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.1806041478035!2d111.42928877500253!3d-7.555276992458495!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e79eae0e07eb059%3A0xf93e92429b671e19!2sSD%20NEGERI%20Kauman%201!5e0!3m2!1sid!2sid!4v1698394203543!5m2!1sid!2sid" width="450" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.9061351041387!2d110.35039961432655!3d-7.799761879583066!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a57f4fa62fdab%3A0x4d7d92f9032750f0!2sSMA+Negeri+1+Teladan+Yogyakarta!5e0!3m2!1sid!2sid!4v1553142191227" width="500" height="350" frameborder="0" style="border:0" allowfullscreen></iframe> --}}
                        </div>
                    </div>
                    <div class="col-lg-6 form">
                        <div class="heading f-item address">
                            <h3>Kontak</h3>
                            <!-- <p>
                                Occasional terminated insensible and inhabiting gay. So know do fond to half on. Now who promise was justice new winding
                            </p> -->
                            <ul id="list">
                                <li>
                                    <i class="bi bi-envelope"></i><p>Email <br><span><a href="mailto:sdnegerikauman@gmail.com" style="text-decoration: none;">sdnegerikauman@gmail.com</a></span></p>
                                </li>
                                <li>
                                    <i class="bi bi-signpost-2-fill"></i>
                                    <p>Address <br><span>Jl. Bimoseno, Kidal, Kauman, Kec. Karangrejo, Kabupaten Magetan, Jawa Timur 63395</span></p>
                                </li>
                                <li>
                                    <i class="bi bi-telephone"></i>
                                    <p>Phone <br><span>0812334569</span></p>
                                </li>
                                <li>
                                    <i class="bi bi-palette2"></i>
                                    <p>Fax <br><span>2133 - 213213</span></p>
                                </li>
                            </ul>
                        </div>
                        
                    </div>
                </div>
                <!-- End Maps & Contact Form -->
            </div>
        </div>
    </div>
    <!-- End Contact Info -->

        </div>
    </main>
@endsection