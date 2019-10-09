<article <?php post_class('hentry--' . get_post_type()); ?>>
    <header class="hentry__header">
        <h1 class="entry-title hentry__header-title"><?php the_title(); ?></h1>
        <p class="hentry__header-details">
            <time class="hentry__header-details-updated updated"
                  datetime="<?php echo get_post_time('c', true); ?>"><?php echo get_the_date(); ?></time>
			<?php
			$categorias = get_the_terms(get_the_ID(), 'category');

			$categoria = $categorias ? array_shift($categorias) : null;

			if ($categoria):
				?>
                <a class="hentry__header-details-category"
                   href="<?php echo get_category_link($categoria->term_id); ?>"><?php echo $categoria->name; ?></a>
			<?php endif; ?>
        </p>
        <div class="hentry__header__share">
            <ul class="hentry__header__share-buttons">
                <li class="hentry__header__share-buttons-item">
                    <a href="javascript:;" data-title="<?php echo get_the_title(); ?>"
                       data-image="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium_large'); ?>"
                       data-url="<?php the_permalink(); ?>" data-network="whatsapp"
                       class="icon-whatsapp st-custom-button">
                        <span class="sr-only">Whatsapp</span>
                    </a>
                </li>
                <li class="hentry__header__share-buttons-item">
                    <a href="javascript:;" data-title="<?php echo get_the_title(); ?>"
                       data-image="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium_large'); ?>"
                       data-url="<?php the_permalink(); ?>" data-network="twitter"
                       class="icon-twitter st-custom-button">
                        <span class="sr-only">Twitter</span>
                    </a>
                </li>
                <li class="hentry__header__share-buttons-item">
                    <a href="javascript:;" data-title="<?php echo get_the_title(); ?>"
                       data-image="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium_large'); ?>"
                       data-url="<?php the_permalink(); ?>" data-network="facebook"
                       class="icon-facebook st-custom-button">
                        <span class="sr-only">Facebook</span>
                    </a>
                </li>
            </ul>
        </div>
    </header>
    <div class="entry-content hentry__entry-content">
		<?php the_content(); ?>
    </div>
</article>