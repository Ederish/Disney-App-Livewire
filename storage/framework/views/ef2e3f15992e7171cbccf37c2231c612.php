<?php $__env->startPush('styles'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/SingleRow.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/MoviesRows.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/MovieCard.css')); ?>">
<?php $__env->stopPush(); ?>

<div class="slick-slider singleRow__slider">
    <button class="slick-arrow slick-prev slick-disabled" data-role="none" currentslide="0" slidecount="8" style="display: block;">
        <svg class="MuiSvgIcon-root slick-arrows" focusable="false" viewBox="0 0 24 24" aria-hidden="true">
            <path d="M11.67 3.87L9.9 2.1 0 12l9.9 9.9 1.77-1.77L3.54 12z"></path>
        </svg>
    </button>
    <div class="slick-list">
        <div class="slick-track">
            <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $datos['items']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dato): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php
                    $originalTitle = $dato['original_title'] ?? 'Unknown Title';
                ?>
                <div class="slick-slide">
                    <div>
                        <div class="movieCard">
                            <a href="<?php echo e(url('Detail/' . $dato['id'])); ?>">
                                <div class="movieCard__container">
                                    <img loading="lazy" class="movieCard__poster"
                                        src="https://image.tmdb.org/t/p/w500/<?php echo e($dato['backdrop_path']); ?>"
                                        alt="<?php echo e($originalTitle); ?>">
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
        </div>
    </div>
    <button class="slick-arrow slick-next" data-role="none" currentslide="0" slidecount="8" style="display: block;">
        <svg class="MuiSvgIcon-root slick-arrows" focusable="false" viewBox="0 0 24 24" aria-hidden="true">
            <path d="M5.88 4.12L13.76 12l-7.88 7.88L8 22l10-10L8 2z"></path>
        </svg>
    </button>
</div><?php /**PATH C:\xampp\htdocs\disneyApp\resources\views/livewire/single-row.blade.php ENDPATH**/ ?>