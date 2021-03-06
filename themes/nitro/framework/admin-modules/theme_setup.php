<?php
/**
 * nitro functions and definitions
 *
 * @package nitro
 */



if ( ! function_exists( 'nitro_setup' ) ) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function nitro_setup() {

        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on nitro, use a find and replace
         * to change 'nitro' to the name of your theme in all the template files
         */
        load_theme_textdomain( 'nitro', get_template_directory() . '/languages' );

        /**
         * Set the content width based on the theme's design and stylesheet.
         */
        global $content_width;
        if ( ! isset( $content_width ) ) {
            $content_width = 640; /* pixels */
        }

        // Add default posts and comments RSS feed links to head.
        add_theme_support( 'automatic-feed-links' );

        //Guttenberg fullscreen content
        add_theme_support('align-wide');

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         *
         */
        add_theme_support( 'title-tag' );

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
         */
        add_theme_support( 'post-thumbnails' );

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus( array(
            'primary' => __( 'Primary Menu', 'nitro' ),
            'top' => __( 'Top Menu', 'nitro' ),
        ) );

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support( 'html5', array(
            'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
        ) );

        /*
         * Enable support for Post Formats.
         * See http://codex.wordpress.org/Post_Formats
         */
        add_theme_support( 'post-formats', array(
            'aside', 'image', 'video', 'quote', 'link',
        ) );

        // Set up the WordPress core custom background feature.
        add_theme_support( 'custom-background', apply_filters( 'nitro_custom_background_args', array(
            'default-color' => 'ffffff',
            'default-image' => '',
        ) ) );

        add_image_size('nitro-sq-thumb', 600,600, true );
        add_image_size('nitro-overlap-thumb', 670,400, true );
        add_image_size('nitro-pop-thumb',542, 340, true );

        //Declare woocommerce support
        add_theme_support('woocommerce');
        add_theme_support( 'wc-product-gallery-lightbox' );

        /*
         * Enable support for RT Slider Plugin.
         */
        add_theme_support('rt-slider', array( 5 ));


        //Custom Logo
        add_theme_support( 'custom-logo', array(
            'flex-height' => true,
            'flex-width'  => true,
            'header-text' => array( 'site-title', 'site-description' ),
        ) );

    }
endif; // nitro_setup
add_action( 'after_setup_theme', 'nitro_setup' );
