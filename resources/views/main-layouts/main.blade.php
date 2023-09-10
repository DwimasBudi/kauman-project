<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Primary Meta Tags -->
    <title>Sekolah Kita</title>
    <meta name="title" content="Sekolah Kita" />
    <meta name="description" content="ini sekolah kita, dbs❤" />

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://sklh.dwimasbudi.my.id/" />
    <meta property="og:title" content="Sekolah Kita" />
    <meta property="og:description" content="ini sekolah kita, dbs❤" />
    <meta property="og:image" content="https://sklh.dwimasbudi.my.id/img/2.jpg" />

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:url" content="https://sklh.dwimasbudi.my.id/" />
    <meta property="twitter:title" content="Sekolah Kita" />
    <meta property="twitter:description" content="ini sekolah kita, dbs❤" />
    <meta property="twitter:image" content="https://sklh.dwimasbudi.my.id/img/2.jpg" />

    <title>Sekolah Kita</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/media.css">
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
</body>
</html>