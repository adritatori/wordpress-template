<?php
/**
 * Cybersecurity Trust theme setup
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( ! function_exists( 'cybertrust_setup' ) ) {
	function cybertrust_setup() : void {
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'html5', [
			'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script',
		] );

		register_nav_menus( [
			'primary' => __( 'Primary Menu', 'cybertrust' ),
			'footer'  => __( 'Footer Menu', 'cybertrust' ),
		] );
	}
}
add_action( 'after_setup_theme', 'cybertrust_setup' );

function cybertrust_assets() : void {
	$theme_version = wp_get_theme()->get( 'Version' );

	wp_enqueue_style( 'cybertrust-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap', [], null );
	wp_enqueue_style( 'cybertrust-style', get_stylesheet_uri(), [], $theme_version );
	wp_enqueue_script( 'cybertrust-scripts', get_template_directory_uri() . '/assets/js/main.js', [], $theme_version, true );
}
add_action( 'wp_enqueue_scripts', 'cybertrust_assets' );

function cybertrust_widgets_init() : void {
	register_sidebar( [
		'name'          => __( 'Footer Column 1', 'cybertrust' ),
		'id'            => 'footer-1',
		'before_widget' => '<div class="footer-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>',
	] );

	register_sidebar( [
		'name'          => __( 'Footer Column 2', 'cybertrust' ),
		'id'            => 'footer-2',
		'before_widget' => '<div class="footer-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>',
	] );
}
add_action( 'widgets_init', 'cybertrust_widgets_init' );

/**
 * Helper: Render badge.
 */
function cybertrust_badge( string $label, string $variant = 'highlight' ) : string {
	$classes = [
		'highlight' => 'badge',
		'green'     => 'badge green',
		'gold'      => 'badge gold',
		'blue'      => 'badge blue',
	];

	$class = $classes[ $variant ] ?? $classes['highlight'];

	return sprintf( '<span class="%1$s">%2$s</span>', esc_attr( $class ), esc_html( $label ) );
}
