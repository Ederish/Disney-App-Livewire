<?php if (! $__env->hasRenderedOnce('2a456bc0-44f5-42ed-8eab-20cc3b18fd14')): $__env->markAsRenderedOnce('2a456bc0-44f5-42ed-8eab-20cc3b18fd14'); ?>
  <?php $__env->startPush('styles'); ?>
    <link href="<?php echo e(asset('css/Home.css')); ?>" rel="stylesheet">
  <?php $__env->stopPush(); ?>
<?php endif; ?>
<main class="home">
  <div class="home__container movieRows__container">
    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('image-slider', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-287546351-0', $__slots ?? [], get_defined_vars());

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
[$__name, $__params] = $__split('collections', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-287546351-1', $__slots ?? [], get_defined_vars());

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
[$__name, $__params] = $__split('movie-rows', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-287546351-2', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
  </div>
</main><?php /**PATH C:\xampp\htdocs\disneyApp\resources\views/livewire/home.blade.php ENDPATH**/ ?>