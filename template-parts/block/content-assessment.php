
<section class="testimonial-ueberschrift">
    <div>
        <h2 class="testimonial-ueberschrift"><?php the_field('headline'); ?></h2>
    </div>
</section>
<div>
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-center">
                <div><i class="fa fa-quote-left"></i>
                    <h4><?php the_field('customer-1'); ?></h4>
                    <p class="ratingText"><?php the_field('rating-text-1'); ?></p>
                    <span>
                        <?php
                        for ($i= get_field('stars-1'); $i >= 1; $i--){
                            ?><i class="fa fa-star"></i><?php
                        }
                        ?>
                    </span>
                </div>
            </div>
            <div class="col-md-6 text-center paddingMobile">
                <div><i class="fa fa-quote-left"></i>
                    <h4><?php the_field('customer-2'); ?></h4>
                    <p class="ratingText"><?php the_field('rating-text-2'); ?></p>
                    <span>
                        <?php
                        for ($i= get_field('stars-2'); $i >= 1; $i--){
                            ?><i class="fa fa-star"></i><?php
                        }
                        ?>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>