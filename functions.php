<?php
/**
 * Meg-n-Boots functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Meg-n-Boots
 */

if ( ! function_exists( 'meg_n_boots_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function meg_n_boots_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Meg-n-Boots, use a find and replace
		 * to change 'meg-n-boots' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'meg-n-boots', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'primary' => esc_html__( 'Primary', 'meg-n-boots' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		/*
		 * Enable support for custom logo.
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 70,
			'width'       => 70,
			'flex-height' => true,
		) );

		/*
		 * Enable support for Post Formats.
		 * See https://developer.wordpress.org/themes/functionality/post-formats/
		 */
		add_theme_support( 'post-formats', array(
			'aside',
			'image',
			'video',
			'quote',
			'link',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'meg_n_boots_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );


		// Set up the WordPress core custom header feature.
		add_theme_support( 'custom-header' );
	}
endif;
add_action( 'after_setup_theme', 'meg_n_boots_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function meg_n_boots_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'meg_n_boots_content_width', 640 );
}

add_action( 'after_setup_theme', 'meg_n_boots_content_width', 0 );


add_action( 'init', 'meg_n_boots_add_editor_styles' );
/**
 * Apply theme's stylesheet to the visual editor.
 *
 * @uses add_editor_style() Links a stylesheet to visual editor
 * @uses get_stylesheet_uri() Returns URI of theme stylesheet
 */
function meg_n_boots_add_editor_styles() {

	add_editor_style( get_stylesheet_uri() );

}

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function meg_n_boots_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'meg-n-boots' ),
		'id'            => 'sidebar-1',
		'description'   => 'Add widgets here to be used in the sidebar.',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Home Hero', 'meg-n-boots' ),
		'id'            => 'sidebar-home-hero',
		'description'   => 'Add a text widget here for the home hero image. Use the Widget Title for H2 font sizes.',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}

add_action( 'widgets_init', 'meg_n_boots_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function meg_n_boots_scripts() {

	wp_enqueue_style( 'meg-n-boots-style', get_stylesheet_uri() );

	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css' );

	wp_enqueue_style( 'bootstrap-theme-min', get_template_directory_uri() . '/css/bootstrap-theme.css' );

	wp_enqueue_style( 'custom', get_template_directory_uri() . '/css/custom.css' );

	wp_enqueue_script( 'meg-n-boots-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'meg-n-boots-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	/**
	 * Added Scripts and styles for the custom theme
	 */

	wp_enqueue_script( 'backstretch', get_template_directory_uri() . '/js/backstretch.js', array(), '2.0.4', true );

	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.js', array('jquery'), '3.3.4', true );

	wp_enqueue_script( 'masonry-js', get_template_directory_uri() . '/js/masonry.js', array(), '4.0.0', true );

	wp_enqueue_script( 'firstheme-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	wp_enqueue_script( 'custom-js', get_template_directory_uri() . '/js/custom.js', array( 'jquery' ), '1.0', true );


}

add_action( 'wp_enqueue_scripts', 'meg_n_boots_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * navigation walker bootstrap
 */
require get_template_directory() . '/inc/wp_bootstrap_navwalker.php';