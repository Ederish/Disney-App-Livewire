<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail page</title>
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/Header.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/Navbar.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/DetailPage.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/tabPanel.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/SingleRow.css')); ?>"-->
    <link rel="stylesheet" href="<?php echo e(asset('css/MoviesRows.css')); ?>"-->
    <link rel="stylesheet" href="<?php echo e(asset('css/MovieCard.css')); ?>"-->
    <link rel="stylesheet" href="<?php echo e(asset('css/Footer.css')); ?>">
    <?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::styles(); ?>

</head>
<body>
    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('header', ['class' => 'headerTransparent']);

$__html = app('livewire')->mount($__name, $__params, 'lw-3887339493-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
    <main class="detailPage">
        <div class="detailPage__background">
            <div class="detailPage__overlay"></div>
            <img loading="lazy" src="https://image.tmdb.org/t/p/w1280/<?php echo e($movieData['backdrop_path']); ?>"
                alt="Backdrop Image">
        </div>
        <div class="detailPage__info">
            <div class="detailPage__container">
                <h1 class="detailPage__title"><?php echo e($movieData['original_title']); ?></h1>
                <div class="detailPage__buttons">
                    <button role="button" class="boton"><i class="fas fa-play"></i> Reproducir</button>
                    <button role="button" class="boton"><i class="fas fa-info-circle"></i> Más información</button>
                    <button role="button" class="boton"><i class="fas fa-arrow-left"></i></button>
                    <button role="button" class="boton"><i class="fas fa-arrow-right"></i></button>
                </div>
                <div class="detailPage__data">
                    <span class="detailPage__years"><?php echo e($movieData['release_date']); ?></span>
                    <span class="detailPage__duration"><?php echo e($movieData['runtime']); ?> minutes</span>
                    <div class="detailPage__genres">
                        <?php $__currentLoopData = $movieData['genres']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $genre): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <span><?php echo e($genre['name']); ?></span>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
                <div class="detailPage__description">
                    <p><?php echo e($movieData['overview']); ?></p>
                </div>
            </div>
            <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('tab-panel', ['id' => $movieData['id']]);

$__html = app('livewire')->mount($__name, $__params, 'lw-3887339493-1', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
        </div>
    </main>
    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('footer', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-3887339493-2', $__slots ?? [], get_defined_vars());

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
    <?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::scripts(); ?>

</body>
</html><?php /**PATH C:\xampp\htdocs\disneyApp\resources\views/DetailPage.blade.php ENDPATH**/ ?>