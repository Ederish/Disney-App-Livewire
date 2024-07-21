<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail page</title>
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/DetailPage.css') }}">
    <link rel="stylesheet" href="{{ asset('css/tabPanel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/SingleRow.css') }}"-->
    <link rel="stylesheet" href="{{ asset('css/MoviesRows.css') }}"-->
    <link rel="stylesheet" href="{{ asset('css/MovieCard.css') }}"-->
    <link rel="stylesheet" href="{{ asset('css/Footer.css') }}">
    @livewireStyles
</head>
<body>
    <livewire:header/>
    <main class="detailPage">
        <div class="detailPage__background">
            <div class="detailPage__overlay"></div>
            <img loading="lazy" src="https://image.tmdb.org/t/p/w1280/{{ $movieData['backdrop_path'] }}"
                alt="Backdrop Image">
        </div>
        <div class="detailPage__info">
            <div class="detailPage__container">
                <h1 class="detailPage__title">{{ $movieData['original_title'] }}</h1>
                <div class="detailPage__buttons">
                    <button role="button" class="boton"><i class="fas fa-play"></i> Reproducir</button>
                    <button role="button" class="boton"><i class="fas fa-info-circle"></i> Más información</button>
                    <button role="button" class="boton"><i class="fas fa-arrow-left"></i></button>
                    <button role="button" class="boton"><i class="fas fa-arrow-right"></i></button>
                </div>
                <div class="detailPage__data">
                    <span class="detailPage__years">{{ $movieData['release_date'] }}</span>
                    <span class="detailPage__duration">{{ $movieData['runtime'] }} minutes</span>
                    <div class="detailPage__genres">
                        @foreach ($movieData['genres'] as $genre)
                            <span>{{ $genre['name'] }}</span>
                        @endforeach
                    </div>
                </div>
                <div class="detailPage__description">
                    <p>{{ $movieData['overview'] }}</p>
                </div>
            </div>
            <livewire:tab-panel :id="$movieData['id']" />
        </div>
    </main>
    <livewire:footer />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script src="https://kit.fontawesome.com/884057e2b4.js" crossorigin="anonymous"></script>
    <script>
        $(function() {
            $('.singleRow__slider').find('.slick-track').slick({
                arrows: true,
                accessibility: true,
                infinite: false,
                speed: 500,
                slidesToShow: 5,
                slidesToScroll: 1,
                prevArrow: '.slick-prev',
                nextArrow: '.slick-next',
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
        });
    </script>
    @livewireScripts
</body>
</html>