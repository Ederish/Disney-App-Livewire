<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail page</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/Header.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/Navbar.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/DetailPage.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/ImageSlider.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/SingleRow.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/MoviesRows.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/MovieCard.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/tabPanel.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/Footer.css')); ?>">
    <?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::styles(); ?>

</head>
<body>
    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('header', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-4249372654-0', $__slots ?? [], get_defined_vars());

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
[$__name, $__params] = $__split('datail-page', ['movieId' => $movieId]);

$__html = app('livewire')->mount($__name, $__params, 'lw-4249372654-1', $__slots ?? [], get_defined_vars());

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

$__html = app('livewire')->mount($__name, $__params, 'lw-4249372654-2', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
    <?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::scripts(); ?>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\disneyApp\resources\views/detailPage.blade.php ENDPATH**/ ?>