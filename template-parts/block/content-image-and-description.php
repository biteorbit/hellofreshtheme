<div class="container">
    <div class="container">
        <div class="row">
            <div class="col-md-6"><img class="img-fluid" src="<?php echo get_field('image')['sizes']['large']; ?>"></div>
            <div class="col-md-6">
                <h3 class="jetzt-starten-h3"><?php the_field('headline'); ?></h3>
                <p class="descriptionText"><?php the_field('description'); ?></p>
                <br>
                <a href="<?php the_field('link'); ?>" class="d-flex">
                    <button class="mx-auto btn btn-primary btnGreen" type="button"><?php the_field('button-label'); ?></button>
                </a>
            </div>
        </div>
    </div>
</div>
