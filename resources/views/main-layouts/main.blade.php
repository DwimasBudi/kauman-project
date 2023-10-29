<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Primary Meta Tags -->
    <title>SD Negeri Kauman Magetan</title>
    <meta name="title" content="SD Negeri Kauman Magetan" />
    <meta name="description" content="SD Negeri Kauman Magetan, Sekolah Ramah Anak" />

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://sklh.dwimasbudi.my.id/" />
    <meta property="og:title" content="SD Negeri Kauman Magetan" />
    <meta property="og:description" content="SD Negeri Kauman Magetan, Sekolah Ramah Anak" />
    <meta property="og:image" content="https://sklh.dwimasbudi.my.id/img/2.jpg" />

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:url" content="https://sklh.dwimasbudi.my.id/" />
    <meta property="twitter:title" content="SD Negeri Kauman Magetan" />
    <meta property="twitter:description" content="SD Negeri Kauman Magetan, Sekolah Ramah Anak" />
    <meta property="twitter:image" content="https://sklh.dwimasbudi.my.id/img/2.jpg" />

    {{-- <title>SD Negeri Kauman Magetan</title> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/page-style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/media.css') }}">

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" rel="stylesheet" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" rel="stylesheet" />
</head>
<body>
<div class="container-main">
    @include('main-layouts.header')
    <main>
        @yield('container')
    </main>
<!-- Foooter -->
@include('main-layouts.footer')

</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
    <script>
        const myCarouselElement = document.querySelector('#carouselExampleCaptions')

        const carousel = new bootstrap.Carousel(myCarouselElement, {
            interval: 3500,
            touch: false
        })
    </script>
    <script>
        $(document).ready(function () {
            $('.owl-carousel').owlCarousel({
                margin: 10,
                // nav: true,
                dots: true,
                // stagePadding: 50,
                loop: true,
                center: true,
                autoplay: true,
                autoplayTimeout: 5000,
                autoplayHoverPause: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 1.5,
                    },
                    1000: {
                        items: 3
                    }
                }
            })
        })
    </script>
</body>
</html>