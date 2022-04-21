<section class="rezepteblock">
    <div class="rezepte">
        <h2><?php the_field('headline'); ?></h2>
        <p class="padding5"><?php the_field('description'); ?></p>
    </div>
    <div></div>
</section>
<div>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-xl-3 rezeptHolder">
                <div class="backgroundImageHolder" style="background:url(<?php echo get_field('first_image')['sizes']['medium']; ?>) center center no-repeat;">
                    <div class="imageOverlay"><span class="imageOverSpan"><?php the_field('first_text'); ?></span></div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3 rezeptHolder">
                <div class="backgroundImageHolder" style="background:url(<?php echo get_field('second_image')['sizes']['medium']; ?>) center center no-repeat;">
                    <div class="imageOverlay"><span class="imageOverSpan"><?php the_field('second_text'); ?></span></div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3 rezeptHolder">
                <div class="backgroundImageHolder" style="background:url(<?php echo get_field('third_image')['sizes']['medium']; ?>) center center no-repeat;">
                    <div class="imageOverlay"><span class="imageOverSpan"><?php the_field('third_text'); ?></span></div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3 rezeptHolder">
                <div class="backgroundImageHolder" style="background:url(<?php echo get_field('fourth_image')['sizes']['medium']; ?>) center center no-repeat;">
                    <div class="imageOverlay"><span class="imageOverSpan"><?php the_field('fourth_text'); ?></span></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div>

        <button onclick="window.location.href = '<?php the_field('link'); ?>';" class="btn d-md-flex d-lg-flex justify-content-md-center button-header mehr-erfahren menu-ansehen" type="button"><?php the_field('button-label'); ?></button>
</div>
