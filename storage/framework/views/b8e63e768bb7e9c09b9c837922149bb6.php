<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Commerce +</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/Header.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/Navbar.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/home.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/ImageSlider.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/SingleRow.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/MoviesRows.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/MovieCard.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/SingleRow.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/collections.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/Footer.css')); ?>">
    <?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::styles(); ?>

</head>
<body>
    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('header', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-2789039382-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('home', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-2789039382-1', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('footer', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-2789039382-2', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script src="https://kit.fontawesome.com/884057e2b4.js" crossorigin="anonymous"></script>
<script>
    $(function () {
        $('.carousel').slick({
            dots: true,
            accessibility: true,
            infinite: true,
            autoplay: true,
            autoplaySpeed: 6000,
            speed: 700,
            centerMode: false,
            slidesToShow: 1,
            slidesToScroll: 1,
            centerPadding: "100px",
            responsive: [
                {
                    breakpoint: 992,
                },
                {
                    breakpoint: 10000,
                    centerMode: true,
                },
            ],
        });

        for (let i = 1; i <= 8; i++) {
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
<?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::scripts(); ?>

</body>
</html><?php /**PATH C:\xampp\htdocs\disneyApp\resources\views/welcome.blade.php ENDPATH**/ ?>