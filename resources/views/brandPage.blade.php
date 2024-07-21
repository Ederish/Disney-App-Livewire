<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail page</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/BrandPage.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ImageSlider.css') }}">
    <link rel="stylesheet" href="{{asset('css/SingleRow.css')}}">
    <link rel="stylesheet" href="{{asset('css/MoviesRows.css') }}">
    <link rel="stylesheet" href="{{ asset('css/MovieCard.css') }}">
    <link rel="stylesheet" href="{{asset('css/SingleRow.css')}}">
    <link rel="stylesheet" href="{{ asset('css/collections.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Footer.css') }}">
    @livewireStyles
</head>
<body>
    <livewire:header>
    <livewire:brand-page>
    <livewire:footer>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script src="https://kit.fontawesome.com/884057e2b4.js" crossorigin="anonymous"></script>
<script>
    $(function () {
        for (let i = 1; i <= 3; i++) {
            $(`#carousel-${i} .slick-track`).slick({
                arrows: true,
                accessibility: true,
                infinite: false,
                speed: 500,
                slidesToShow: 5,
                slidesToScroll: 1,
                prevArrow: `#carousel-${i} .slick-prev`,
                nextArrow: `#carousel-${i} .slick-next`,
                responsive: [
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 1,
                            infinite: true,
                        },
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1,
                            initialSlide: 2,
                        },
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1,
                            infinite: true,
                        },
                    },
                ],
            });
        }
    });
</script>
    @livewireScripts
</body>
</html>