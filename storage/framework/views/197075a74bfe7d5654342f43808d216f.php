<main class="brandPage">
  <div class="brandPage__background">
    <img src="<?php echo e(asset($brandArray[0])); ?>" alt="<?php echo e($brand); ?> background" />
  </div>
  <div class="brandPage__image">
      <img src="<?php echo e(asset($brandArray[1])); ?>" alt="<?php echo e($brand); ?> logo" />
  </div>

  <div class="brandPage__movies movieRows__container">
    <article class="singleRow" id="carousel-1">
      <h2 class="singleRow__title">Continue Watching</h2>
      <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('single-row', ['list' => $brandArray[2]]);

$__html = app('livewire')->mount($__name, $__params, 'lw-374496310-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
    </article>
    <article class="singleRow" id="carousel-2">
      <h2 class="singleRow__title"><?php echo e(ucfirst($brand)); ?> Movies</h2>
      <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('single-row', ['list' => $brandArray[3]]);

$__html = app('livewire')->mount($__name, $__params, 'lw-374496310-1', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
    </article>
    <!--[if BLOCK]><![endif]--><?php if($brand === 'starwars'): ?>
      <article class="singleRow" id="carousel-3">
        <h2 class="singleRow__title">Star Wars</h2>
        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('single-row', ['list' => $brandArray[4]]);

$__html = app('livewire')->mount($__name, $__params, 'lw-374496310-2', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
      </article>
    <?php elseif($brand === 'disney'): ?>
      <article class="singleRow" id="carousel-3">
        <h2 class="singleRow__title">Disney Shows</h2>
        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('single-row', ['list' => $brandArray[4]]);

$__html = app('livewire')->mount($__name, $__params, 'lw-374496310-3', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
      </article>
    <?php elseif($brand === 'pixar'): ?>
      <article class="singleRow" id="carousel-3">
        <h2 class="singleRow__title">Pixar Shorts</h2>
        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('single-row', ['list' => $brandArray[4]]);

$__html = app('livewire')->mount($__name, $__params, 'lw-374496310-4', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
      </article>
    <?php elseif($brand === 'marvel'): ?>
      <article class="singleRow" id="carousel-3">
        <h2 class="singleRow__title">Marvel Series</h2>
        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('single-row', ['list' => $brandArray[4]]);

$__html = app('livewire')->mount($__name, $__params, 'lw-374496310-5', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
      </article>
    <?php elseif($brand === 'national'): ?>
      <article class="singleRow" id="carousel-3">
        <h2 class="singleRow__title">National Geographic Documentaries</h2>
        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('single-row', ['list' => $brandArray[4]]);

$__html = app('livewire')->mount($__name, $__params, 'lw-374496310-6', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
      </article>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
  </div>
</main><?php /**PATH C:\xampp\htdocs\disneyApp\resources\views/livewire/brand-page.blade.php ENDPATH**/ ?>