<header class="banner navbar navbar-default navbar-static-top<?php echo is_front_page() ? ' banner--home' : ''; ?>">
    <div class="container">
        <div class="banner__container">
            <div class="navbar-header">
				<?php $tag = ( is_front_page() ) ? 'h1' : 'div' ?>
                <<?php echo $tag ?> class="navbar-brand">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <img src="<?php echo images( 'logo-carnavalcaico.png' ) ?>" alt="<?php bloginfo( 'name' ); ?>"
                         width="174"/>
                </a>
            </<?php echo $tag ?>>
        </div>
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu"
                aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar icon-bar--one"></span>
            <span class="icon-bar icon-bar--two"></span>
            <span class="icon-bar icon-bar--three"></span>
        </button>

        <nav class="collapse navbar-collapse banner__navbar-nav" id="menu">
            <?php
            if ( has_nav_menu( 'primary_navigation' ) ):


                wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav', 'container' => '']);
            endif;
            ?>

            <div class="social-networks-wrapper visible-xs">
				<?php
				if ( has_nav_menu( 'social_networks' ) ) :
					wp_nav_menu( [
						'theme_location' => 'social_networks',
						'walker'         => new Social_Networks_Walker_Menu(),
						'menu_class'     => 'social-networks-wrapper__list'
					] );
				endif; ?>
            </div>

        </nav>

        <div class="social-networks-wrapper hidden-xs">
			<?php
			if ( has_nav_menu( 'social_networks' ) ) :
				wp_nav_menu( [
					'theme_location' => 'social_networks',
					'walker'         => new Social_Networks_Walker_Menu(),
					'menu_class'     => 'social-networks-wrapper__list'
				] );
			endif; ?>
        </div>

    </div>
    </div>
</header>