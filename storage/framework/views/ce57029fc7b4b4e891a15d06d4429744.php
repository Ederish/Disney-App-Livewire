<main class="detailPage">
  <div class="detailPage__background">
    <div class="detailPage__overlay"></div>
    <img loading="lazy" src="https://image.tmdb.org/t/p/w1280/<?php echo e($movieData['backdrop_path']); ?>">
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
          <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $movieData['genres']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $genre): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <span><?php echo e($genre['name']); ?></span>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
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
[$__name, $__params] = $__split('tab-panel', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-1468093958-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
  </div>
</main><?php /**PATH C:\xampp\htdocs\disneyApp\resources\views/livewire/datail-page.blade.php ENDPATH**/ ?>