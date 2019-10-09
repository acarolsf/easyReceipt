<?php
    $days = get_field('dias', get_page_by_path('agenda')->ID);

    static $filtrado = false;

    $days = array_filter($days, function($item) use ($filtrado){
	    $date = DateTime::createFromFormat('d/m/Y', $item['data']);

	    if (new DateTime() < $date){
		    return true;
	    }

	    return false;

    });

    $day = array_shift($days);

    $date = DateTime::createFromFormat('d/m/Y', $day['data'])->format('Y-m-d');
?>
<section class="section-home agenda-home">
    <div class="container">
        <header class="section-home__header">
            <h2 class="section-home__header-title t-pink">Agenda</h2>
            <a href="<?php echo home_url('/agenda/'); ?>" class="section-home__header-see-more t-pink">Ver mais »</a>
        </header>
        <div class="section-home__content">
            <div class="agenda-home__slide">
                <div class="agenda-home__slide-controls">
                    <span class="agenda-home__slide-controls-btn agenda-home__slide-controls-btn--prev"></span>
                    <h3 class="agenda-home__slide-controls-date t-pink"><?php echo ucwords(mysql2date('l, d \d\e M',  $date)); ?></h3>
                    <span class="agenda-home__slide-controls-btn agenda-home__slide-controls-btn--next"></span>
                </div>
                <div class="agenda-home__slide-items">
                    <?php foreach ($day['eventos'] as $event): ?>
                        <?php include locate_template('templates/blocos/item-agenda.php'); ?>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>