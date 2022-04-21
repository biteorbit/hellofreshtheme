<section class="d-flex stress-sparen-section h-100" style="background-image: url(<?php echo get_field('background-image')['url']; ?>)">
    <div class="my-auto mx-auto">
        <h1 class="text-center"><?php the_field('headline'); ?></h1>
        <p class="text-center spanBottomHeadlines"><?php the_field('description'); ?></p>
        <button onclick="window.location.href = '<?php the_field('link'); ?>';" class="btn d-flex d-sm-flex d-xl-flex justify-content-center justify-content-sm-center align-items-xl-center btnGreen mx-auto"><?php the_field('button-label'); ?></button>
    </div>
</section>
