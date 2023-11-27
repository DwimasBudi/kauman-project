<header class="navbar navbar-expand-lg bg-dark overflow-hidden w-100" style="background-color: white; height: 40px;">
        <div class="container-fluid d-flex justify-content-between w-100" style="background-color: white; height: 40px;">
            <div class="navbar-nav text-dark w-100 d-flex justify-content-start flex-row">
                <a class="nav-link text-dark mx-1" href="#">Profil</a>
                <a class="nav-link text-dark mx-1" href="/admin">Admin</a>
                <a class="nav-link text-dark mx-1" href="https://www.youtube.com/@sdnegerikaumankec.karangre7291">Youtube</a>
                <a class="nav-link text-dark mx-1" href="https://www.instagram.com/sdnkauman">Instagram</a>
                <a class="nav-link text-dark mx-1" href="https://wa.me/+6289696574935">Whatsapp</a>
            </div>
        </div>
    </header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <div class="container" style="min-height: 80px;">
            <a class="navbar-brand" href="/">
        <div class="container-logo d-flex align-items-center" >
            <img src="{{ asset('img/logo.png') }}" alt="logo-kauman" style="max-width: 50px; max-height: auto; object-fit:cover">
            <div class="m-3 containers d-flex flex-column">
                <span class="name-logo" style="font-family: 'Poppins', sans-serif; font-weight:bold;">SD Negeri Kauman Magetan</span>
            </div>
        </div>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    {{-- <li class="nav-item">
                        <a class="nav-link text-light" aria-current="page" href="{{ asset('/') }}">Home</a>
                    </li> --}}
                    <li class="nav-item">
                        <a class="nav-link text-light" href="{{ asset('/artikel?category=pengumuman') }}">Pengumuman</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="{{ asset('/#sambutan') }}">Sambutan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="{{ asset('/#visi-misi') }}">Visi-Misi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="{{ asset('/#contact') }}">Kontak</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Artikel
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            @foreach ($categories as $category)  
                                <li><a class="dropdown-item" href="{{ asset('/artikel?category=') }}{{ $category->slug }}">{{ $category->name }}</a></li>
                            @endforeach
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="{{ asset('/artikel') }}">Lihat semua</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>