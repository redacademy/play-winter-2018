<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package Integrate_Play_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function integrate_play_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'integrate_play_body_classes' );


//Function to change the excerpt length
/**
 * Filter the except length to 100 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function wpdocs_custom_excerpt_length( $length ) {
	return 80;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

//Function to change the Read More excerpt text
function new_excerpt_more($more) {
	global $post;
	return '<a class="read-more" 
	href="' . get_permalink() . '">... Read More</a>';
 }
 add_filter('excerpt_more', 'new_excerpt_more');
