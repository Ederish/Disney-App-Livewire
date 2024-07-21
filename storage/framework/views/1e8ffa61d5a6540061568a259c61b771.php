<div class="slick-list">
        <div class="slick-track">
            <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $datos['items']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dato): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php
                    $originalTitle = isset($dato['original_title']) ? $dato['original_title'] : 'Unknown Title';
                ?>
                <div class="slick-slide">
                    <div>
                        <div class="movieCard">
                            <a href="?custom_param=details&movieId=<?php echo e($dato['id']); ?>">
                                <div class="movieCard__container">
                                    <img loading="lazy" class="movieCard__poster" src="https://image.tmdb.org/t/p/w500/<?php echo e($dato['backdrop_path']); ?>" alt="<?php echo e($originalTitle); ?>">
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
        </div>
    </div><?php /**PATH C:\xampp\htdocs\disneyApp\resources\views/livewire/movie-card.blade.php ENDPATH**/ ?>