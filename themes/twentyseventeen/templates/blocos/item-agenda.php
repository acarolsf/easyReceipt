<div class="agenda-events__item" data-event-hour="<?php echo $event['hora']; ?>">
	<h4 class="agenda-events__item-title"><?php echo $event['titulo']; ?></h4>
	<p class="agenda-events__item-location"><?php echo $event['local']; ?></p>
	<?php if($event['link']): ?>
		<a href="<?php echo $event['link']['url']; ?>"  target="<?php echo $event['link']['target']; ?>"
		   class="agenda-events__item-link icon-link-external"><span class="sr-only">saiba mais</span>
		</a>
	<?php endif; ?>
</div>