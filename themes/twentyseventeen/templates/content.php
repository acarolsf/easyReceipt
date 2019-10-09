<article class="main-content__archive-list-item hentry">
    <div class="archive-item-post__header-thumbnail">
        <a href="<?php the_permalink(); ?>">
			<?php if (has_post_thumbnail()): ?>
				<?php echo get_the_post_thumbnail(get_the_ID(), 'medium_large'); ?>
			<?php else : ?>
                <img src="<?php echo images('nothumb.png'); ?>" alt="" />
			<?php endif; ?>
        </a>
    </div>
    <header class="entry-header archive-item-post__header">
        <time class="updated archive-item-post__updated"
              datetime="<?php echo get_post_time('c', true); ?>">
		    <?php echo get_the_date('d'); ?> de
		    <?php echo substr(get_the_date('M'), 0, 3); ?> de
		    <?php echo get_the_date('Y'); ?>
        </time>
        <h2 class="archive-item-post__title entry-title">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h2>
    </header>
</article>