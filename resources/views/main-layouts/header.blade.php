<header class="navbar navbar-expand-lg bg-dark overflow-hidden w-100" style="background-color: white; height: 40px;">
        <div class="container-fluid d-flex justify-content-between w-100" style="background-color: white; height: 40px;">
            <div class="navbar-nav text-dark w-100 d-flex justify-content-start flex-row">
                <a class="nav-link text-dark mx-1" href="#">Profil</a>
                <a class="nav-link text-dark mx-1" href="#">Visi-Misi</a>
                <a class="nav-link text-dark mx-1" href="#">Kontak</a>
                <a class="nav-link text-dark mx-1" href="/admin">Admin</a>
                <a class="nav-link text-dark mx-1" href="#">Youtube</a>
                <a class="nav-link text-dark mx-1" href="#">Instagram</a>
                <a class="nav-link text-dark mx-1" href="#">Twitter</a>
            </div>
        </div>
    </header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <div class="container">
            <a class="navbar-brand" href="/">
        <div class="container-logo">
            <img src="{{ asset('img/logo.png') }}" alt="logo-smada">
        </div>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link text-light" aria-current="page" href="https://unipkma.dwimasbudi.my.id/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#">Pengumuman</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#">Berita</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#">Prestasi</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>