    <header class="navbar navbar-expand-lg bg-dark overflow-hidden w-100" >
        <div class="container-fluid d-flex justify-content-between w-100">
            <div class="navbar-nav text-light">
                <a class="nav-link" href="#">Profil</a>
                <a class="nav-link" href="#">Visi-Misi</a>
                <a class="nav-link" href="#">Kontak</a>
            </div>
            <div class="navbar-nav">
                <a class="nav-link" href="#">Youtube</a>
                <a class="nav-link" href="#">Instagram</a>
                <a class="nav-link" href="#">Twitter</a>
            </div>
        </div>
    </header>
    <div class="container-logo m-3">
        <img src="{{ asset('img/logo.png') }}" alt="logo-sd">
    </div>
    <nav class="navbar navbar-expand-lg bg-dark nav-main">
        <div class="container-fluid">
            <!-- <a class="navbar-brand nav-link" href="#">Navbar</a> -->
            <button class="navbar-toggler bg-light-subtle" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span  style="color: black !important;">MENU</span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav text-light">
                    <a class="nav-link" aria-current="page" href="/">Home</a>
                    <a class="nav-link" href="#">Pengumuman</a>
                    <a class="nav-link" href="#">Berita</a>
                    <a class="nav-link" href="#">Prestasi</a>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Data
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item text-dark" href="#">Data Sekolah</a></li>
                            <li><a class="dropdown-item text-dark" href="#">Data Guru</a></li>
                            <li><a class="dropdown-item text-dark" href="#">Data Murid</a></li>
                        </ul>
                    </li>
                </div>
            </div>
        </div>
    </nav>