<style>
.userSelector{display: flex;align-items: center;}.userSelector__name{margin-right: 10px;}.tabpanel-wrapper {font-family: 'Comic Sans MS', cursive, sans-serif;color: rgb(255, 255, 255);width: 80%;}.tab-list {list-style: none;padding: 0;display: flex;justify-content: space-around;border-bottom: 2px solid rgba(255, 255, 255, 0.2);margin-bottom: 20px;}.tab {padding: 10px 20px;cursor: pointer;transition: background-color 0.3s ease;}.tab.active {border-bottom: 2px solid #aaa;color: #ccc;font-weight: bold;}.tab-content {display: none;}.tab-content.active {display: block;animation: fadeIn 0.5s ease-in-out;}@keyframes fadeIn {from { opacity: 0; }to { opacity: 1; }}
</style>
<div class="tabpanel-wrapper">
    <ul class="tab-list">
        <li class="tab active" data-tab="tab-1">Recomendados</li>
        <li class="tab" data-tab="tab-2">Comentarios</li>
        <li class="tab" data-tab="tab-3">Detalles</li>
    </ul>
    <div class="tab-content active" id="tab-1">
    <div class="slick-slider singleRow__slider">
    <button class="slick-arrow slick-prev slick-disabled" data-role="none" currentslide="0" slidecount="8" style="display: block;">
        <svg class="MuiSvgIcon-root slick-arrows" focusable="false" viewBox="0 0 24 24" aria-hidden="true">
            <path d="M11.67 3.87L9.9 2.1 0 12l9.9 9.9 1.77-1.77L3.54 12z"></path>
        </svg>
    </button>
    <div class="slick-list">
        <div class="slick-track">
            <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $recommendations['results']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $movie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php
                    $originalTitle = $movie['original_title'] ?? 'Unknown Title';
                ?>
                <div class="slick-slide">
                    <div>
                        <div class="movieCard">
                            <a href="<?php echo e(url('Detail/' . $movie['id'])); ?>">
                                <div class="movieCard__container">
                                    <img loading="lazy" class="movieCard__poster"
                                        src="https://image.tmdb.org/t/p/w500/<?php echo e($movie['backdrop_path']); ?>"
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
</div>
    </div>
    <div class="tab-content" id="tab-2">
    <div class="slick-slider singleRow__slider">
    <button class="slick-arrow slick-prev slick-disabled" data-role="none" currentslide="0" slidecount="8" style="display: block;">
        <svg class="MuiSvgIcon-root slick-arrows" focusable="false" viewBox="0 0 24 24" aria-hidden="true">
            <path d="M11.67 3.87L9.9 2.1 0 12l9.9 9.9 1.77-1.77L3.54 12z"></path>
        </svg>
    </button>
    <div class="slick-list">
        <div class="slick-track">
            <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $recommendations['results']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $movie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php
                    $originalTitle = $movie['original_title'] ?? 'Unknown Title';
                ?>
                <div class="slick-slide">
                    <div>
                        <div class="movieCard">
                            <a href="<?php echo e(url('Detail/' . $movie['id'])); ?>">
                                <div class="movieCard__container">
                                    <img loading="lazy" class="movieCard__poster"
                                        src="https://image.tmdb.org/t/p/w500/<?php echo e($movie['backdrop_path']); ?>"
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
</div>  
    </div>
    <div class="tab-content" id="tab-3">
        <div class="tab__mainColumn">
            <h2 class="tab__title"><?php echo e($movieData['original_title']); ?></h2>
            <p class="tab__description">
                <?php echo e($movieData['overview']); ?>

            </p>
        </div>
        <div class="tab__itemsColumn">
            <div class="tab_itemSubColumn">
                <div class="tab__item">
                    <h3 class="tab__subtitle">Duration:</h3>
                    <?php echo e($movieData['runtime']); ?> minutos
                </div>
                <div class="tab__item">
                    <h3 class="tab__subtitle">Release Date:</h3>
                    <?php echo e($movieData['release_date']); ?>

                </div>
            </div>
            <div class="tab_itemSubColumn">
                <div class="tab__item">
                    <h3 class="tab__subtitle">Genres:</h3> 
                    <?php
                    foreach ($movieData['genres'] as $genre) {
                        echo '<p>' . $genre['name'] . '</p>';
                    }
                    ?>      
                </div>
                <div class="tab__item">
                    <h3 class="tab__subtitle">Cast:</h3>
                    <ul>
                        <?php 
                        foreach ($credits['cast'] as $actor) {
                            echo '<li>' . $actor['name'] . '</li>';
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
document.addEventListener('DOMContentLoaded', function() {
    const tabs = document.querySelectorAll('.tab');
    const contents = document.querySelectorAll('.tab-content');

    tabs.forEach(tab => {
        tab.addEventListener('click', function() {
            const target = this.getAttribute('data-tab');

            tabs.forEach(t => t.classList.remove('active'));
            this.classList.add('active');

            contents.forEach(content => {
                content.classList.remove('active');
                if (content.getAttribute('id') === target) {
                    content.classList.add('active');
                }
            });
        });
    });
});
</script><?php /**PATH C:\xampp\htdocs\disneyApp\resources\views/livewire/tab-panel.blade.php ENDPATH**/ ?>