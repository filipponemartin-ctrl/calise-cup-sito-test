<?php
/**
 * Tema Calise Cup.
 *
 * @package calise-cup
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'CALISE_CUP_VERSION', '0.2.0' );

require get_theme_file_path( 'inc/markup.php' );
require get_theme_file_path( 'inc/setup.php' );

/**
 * Supporti del tema e stile nell'editor.
 */
function calise_cup_theme_support() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'editor-styles' );
	add_editor_style( 'style.css' );
}
add_action( 'after_setup_theme', 'calise_cup_theme_support' );

/**
 * Foglio di stile del sito.
 */
function calise_cup_styles() {
	wp_enqueue_style( 'calise-cup', get_stylesheet_uri(), array(), CALISE_CUP_VERSION );
}
add_action( 'wp_enqueue_scripts', 'calise_cup_styles' );

/**
 * Categoria dei modelli e stile "Sole" per i pulsanti.
 */
function calise_cup_register_blocks() {
	register_block_pattern_category(
		'calise-cup',
		array( 'label' => __( 'Calise Cup', 'calise-cup' ) )
	);
	register_block_style(
		'core/button',
		array(
			'name'  => 'sole',
			'label' => __( 'Sole', 'calise-cup' ),
		)
	);
}
add_action( 'init', 'calise_cup_register_blocks' );

/**
 * Commenti chiusi su tutto il sito (requisito RF-BLG-10).
 */
add_filter( 'comments_open', '__return_false', 20 );
add_filter( 'pings_open', '__return_false', 20 );
