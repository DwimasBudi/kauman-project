
<nav id="navbar">
        <div class="logo-name">
            {{-- <div class="logo-image">
                <img src="img/1.png" alt="">
            </div> --}}

            <span class="logo_name">Admin Kauman</span>
        </div>

        <div class="menu-items">
            <ul class="nav-links" style="padding-left:0;">
                <li><a {{ Request::is("dashboard") ? "class=active" : "" }} href="/dashboard/">
                    <i class="uil uil-estate"></i>
                    <span class="link-name">Dahsboard</span>
                </a></li>
                <li><a href="/">
                    <i class="uil uil-globe"></i>
                    <span class="link-name">Website</span>
                </a></li>
                <li><a {{ Request::is("dashboard/posts*") ? "class=active" : "" }} href="/dashboard/posts/">
                    <i class="uil uil-files-landscapes"></i>
                    <span class="link-name">Posts</span>
                </a></li>
                <li><a {{ Request::is("dashboard/categories*") ? "class=active" : "" }} href="/dashboard/categories/">
                    <i class="uil uil-tag-alt"></i>
                    <span class="link-name">Category</span>
                </a></li>
                <li><a {{ Request::is("dashboard/visi-misi*") ? "class=active" : "" }} href="/dashboard/visi-misi/edit">
                    <i class="uil uil-bullseye"></i>
                    <span class="link-name">Visi-Misi</span>
                </a></li>
                <li><a {{ Request::is("dashboard/sambutan*") ? "class=active" : "" }} href="/dashboard/sambutan/edit">
                    <i class="uil uil-megaphone"></i>
                    <span class="link-name">Sambutan</span>
                </a></li>
                <li><a {{ Request::is("dashboard/kontak*") ? "class=active" : "" }} href="/dashboard/kontak/edit">
                    <i class="uil uil-at"></i>
                    <span class="link-name">Kontak</span>
                </a></li>
                <li><a {{ Request::is("dashboard/comment*") ? "class=active" : "" }} href="/dashboard/comment/">
                    <i class="uil uil-comments"></i>
                    <span class="link-name">Komentar</span>
                </a></li>
                <li><a href="/sitemap">
                    <i class="uil uil-sitemap"></i>
                    <span class="link-name">Update Sitemap</span>
                </a></li>
            </ul>
            <ul class="logout-mode" style="padding-left:0;">
                <li>
                    <a href="/logout">
                        <i class="uil uil-signout"></i>
                        <span class="link-name">Logout</span>
                    </a>
                </li>
                {{-- <li class="mode">
                    <a href="#">
                        <i class="uil uil-moon"></i>
                    <span class="link-name">Dark Mode</span>
                </a>

                <div class="mode-toggle">
                  <span class="switch"></span>
                </div>
            </li> --}}
            </ul>
        </div>
</nav>
