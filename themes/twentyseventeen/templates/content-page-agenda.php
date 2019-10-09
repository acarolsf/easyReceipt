<?php
$days = get_field( 'dias', get_page_by_path( 'agenda' )->ID );

?>
<div class="row">
    <div class="col-xs-12">
        <div class="entry-content wentry__entry-content">
			<?php the_content(); ?>
        </div>
        <div class="agenda-events">
			<?php foreach ( $days as $day ): ?>
                <div class="agenda-events__day">
	                <?php $date = DateTime::createFromFormat( 'd/m/Y', $day['data'] )->format( 'Y-m-d' ); ?>
					<h2 class="agenda-events__day-title"><?php echo ucwords( mysql2date( 'l, d \d\e M', $date ) ); ?></h2>
                    <div class="agenda-events__items">
						<?php foreach ( $day['eventos'] as $event ): ?>
							<?php include locate_template('templates/blocos/item-agenda.php'); ?>
						<?php endforeach; ?>
                    </div>
                </div>
			<?php endforeach; ?>
        </div>
    </div>
</div>
