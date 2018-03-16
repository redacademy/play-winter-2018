<?php
/**
 * RED Starter Theme functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Integrate_Play_Theme
 */

if ( ! function_exists( 'integrate_play_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function integrate_play_setup() {
	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Let WordPress manage the document title.
	add_theme_support( 'title-tag' );

	// Enable support for Post Thumbnails on posts and pages.
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html( 'Primary Menu' ),
		'secondary' => esc_html('Secondary Menu')
	) );

	// Switch search form, comment form, and comments to output valid HTML5.
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

}
endif; // integrate_play_setup
add_action( 'after_setup_theme', 'integrate_play_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * @global int $content_width
 */
function integrate_play_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'integrate_play_content_width', 640 );
}
add_action( 'after_setup_theme', 'integrate_play_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function integrate_play_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html( 'Sidebar' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'integrate_play_widgets_init' );

/**
 * Filter the stylesheet_uri to output the minified CSS file.
 */
function integrate_play_minified_css( $stylesheet_uri, $stylesheet_dir_uri ) {
	if ( file_exists( get_template_directory() . '/build/css/style.min.css' ) ) {
		$stylesheet_uri = $stylesheet_dir_uri . '/build/css/style.min.css';
	}

	return $stylesheet_uri;
}
add_filter( 'stylesheet_uri', 'integrate_play_minified_css', 10, 2 );

/**
 * Enqueue scripts and styles.
 */
function integrate_play_scripts() {
	wp_enqueue_style( 'integrate-play-style', get_stylesheet_uri() );
	wp_enqueue_script('jquery');
	wp_enqueue_script( 'integrate-play-skip-link-focus-fix', get_template_directory_uri() . '/build/js/skip-link-focus-fix.min.js', array(), '20130115', true );
	wp_enqueue_style('font-awesome-cdn','https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', array(),
	'4.7.0'); 
	wp_enqueue_style('muli-font-cdn','https://fonts.googleapis.com/css?family=Muli:300,400,600,700');
	wp_enqueue_style('oswald-font-cdn','https://fonts.googleapis.com/css?family=Oswald:700');
	
	wp_enqueue_script( 'flickity', 'https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js', array());
	wp_enqueue_script( 'integrate-scripts', get_template_directory_uri() . '/build/js/integrate-scripts.min.js', array(), '23', true );
	wp_enqueue_script( 'buttons', get_template_directory_uri() . '/build/js/buttons.min.js', array(), '23', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'integrate_play_scripts' );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';
