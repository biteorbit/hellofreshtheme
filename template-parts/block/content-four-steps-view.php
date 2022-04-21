<section class="so-funktionierts container">
    <div class="so-funktionierts-ueberschrift">
        <h2 class="so-funktionierts-h2"><?php the_field('headline'); ?></h2>
        <p class="so-funktionierts" style="font-family: Agrandir;"><?php the_field('description'); ?></p>
    </div>
    <div>
        <div class="row so-funktionierts-steps">
            <div class="col-sm-5 col-md-5 col-lg-3 gerichte-waehlen">
                <div><img class="img-fluid so-funktionierts-img" src="<?php echo get_field('first_image')['sizes']['medium']; ?>">
                    <h3 class="so-funktionierts-steps-h3"><?php the_field('first_headline'); ?></h3>
                    <p class="so-funktionierts-steps"><?php the_field('first_description'); ?></p>
                </div>
            </div>
            <div class="col-sm-5 col-md-5 col-lg-3 gerichte-waehlen">
                <div><img class="img-fluid so-funktionierts-img" src="<?php echo get_field('second_image')['sizes']['medium']; ?>">
                    <h3 class="so-funktionierts-steps-h3"><?php the_field('second_headline'); ?></h3>
                </div>
                <p class="so-funktionierts-steps"><?php the_field('second_description'); ?></p>
            </div>
            <div class="col-sm-5 col-md-5 col-lg-3 gerichte-waehlen">
                <div><img class="img-fluid so-funktionierts-img" src="<?php echo get_field('third_image')['sizes']['medium']; ?>">
                    <h3 class="so-funktionierts-steps-h3"><?php the_field('third_headline'); ?></h3>
                </div>
                <p class="so-funktionierts-steps"><?php the_field('third_description'); ?></p>
            </div>
            <div class="col-sm-5 col-md-5 col-lg-3 gerichte-waehlen">
                <div><img class="img-fluid so-funktionierts-img" src="<?php echo get_field('fourth_image')['sizes']['medium']; ?>">
                    <h3 class="so-funktionierts-steps-h3"><?php the_field('fourth_headline'); ?></h3>
                </div>
                <p class="so-funktionierts-steps"><?php the_field('fourth_description'); ?></p>
            </div>
        </div>
    </div>
    <div class="so-funktionierts-mehr-erfahren"><a href="<?php the_field('link'); ?>" ><button class="btn d-md-flex d-lg-flex justify-content-md-center button-header mehr-erfahren" type="button"><?php the_field('button-label'); ?></button></a>
        <p class="lieferpause"><?php the_field('text'); ?></p>
    </div>
</section>