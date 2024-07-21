<?php if (! $__env->hasRenderedOnce('be8f41c9-9375-4b91-b375-da865c140169')): $__env->markAsRenderedOnce('be8f41c9-9375-4b91-b375-da865c140169'); ?>
    <?php $__env->startPush('styles'); ?>
        <link href="<?php echo e(asset('css/Navbar.css')); ?>" rel="stylesheet">
    <?php $__env->stopPush(); ?>
<?php endif; ?>
<nav class="navbar">
    <div class="right">
    <img href="http://localhost/disneyApp/public/"
     width="48px"
      id="logo"
      src="https://prod-static.disney-plus.net/us-west-2/builds/e76798ab2a732a884562763cbd19b969a80dcd5b_1606148151180/images/logo.svg"
      alt="Disney Plus Logo"
    />
        <ul class="menu">
            <li>
                <a href="http://localhost/disneyApp/public/"><i class="fas fa-home"></i> HOME</a>
            </li>
            <li>
                <a href="<?php echo e(url('/search')); ?>"><i class="fas fa-search"></i> SEARCH</a>
            </li>
            <li>
                <a href="<?php echo e(url('/search')); ?>"><i class="fas fa-plus"></i> ADD</a>
            </li>
            <li>
                <a href="<?php echo e(url('/search')); ?>"><i class="fas fa-star"></i> FAVORITES</a>
            </li>
            <li>
                <a href="<?php echo e(url('/search')); ?>"><i class="fas fa-clapperboard"></i> MOVIES</a>
            </li>
            <li>
                <a href="<?php echo e(url('/search')); ?>"><i class="fas fa-tv"></i> TV</a>
            </li>
        </ul>
    </div>
    <div class="left">
        <a href="login.html">
            <button class="login">Login</button>
        </a>
    </div>
</nav>
<?php /**PATH C:\xampp\htdocs\disneyApp\resources\views/livewire/navbar.blade.php ENDPATH**/ ?>