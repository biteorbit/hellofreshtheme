<?php

?>
<section class="imageSection">
    <div class="text-center starte-jetzt-margin">
        <h2><?php the_field('headline'); ?></h2>
        <p class="underHeadlineText"><?php the_field('description'); ?></p>
            <button onclick="window.location.href = '<?php the_field('link'); ?>';" class="btn d-xl-flex align-items-xl-center btnGreen mx-auto" type="button">Mehr erfahren</button></div>
</section>