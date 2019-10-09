<?php use Roots\Sage\Titles; ?>
<div class="page-header">

    <div class="page-header__header">
        <div class="container">
			<?php
			switch(true){
                case is_singular('post'):
                    $tag = 'div';
                    break;
				default:
					$tag = 'h1';
					break;
			}

			?>
            <<?php echo $tag; ?> class="page-header__title">
			    <?php echo Titles\title(); ?>
            </<?php echo $tag; ?>>

        </div>
    </div>

    <div class="page-header__ad">
	    <?php get_template_part( 'templates/home/ad' ); ?>
    </div>

</div>