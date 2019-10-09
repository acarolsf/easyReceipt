<?php

    $historia = get_field('historia');

?>
<section class="section-home history-home" id="history">
    <div class="container">
        <header class="section-home__header">
            <h2 class="section-home__header-title t-pink">História</h2>
        </header>
        <div class="section-home__content">
            <div class="history-home__content">
                <?php echo $historia; ?>
            </div>
        </div>
    </div>
</section>