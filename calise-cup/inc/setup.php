<?php
/**
 * Prima installazione: crea le pagine di partenza, il menu e le impostazioni di lettura.
 * Gira una volta sola, all'attivazione del tema, e non tocca pagine già esistenti.
 *
 * @package calise-cup
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Pagine di partenza: slug => array( titolo, modello, voce di menu ).
 */
function calise_cup_starter_pages() {
	return array(
		'home'       => array( 'Home', 'calise-cup/home', '' ),
		'il-torneo'  => array( 'Il torneo', 'calise-cup/torneo', 'Il torneo' ),
		'partecipa'  => array( 'Venite a giocare a Gaeta', 'calise-cup/partecipa', 'Partecipa' ),
		'calendario' => array( 'Calendario e risultati', 'calise-cup/calendario', 'Calendario e risultati' ),
		'vivi-gaeta' => array( 'Tre giorni a Gaeta con noi', 'calise-cup/vivi-gaeta', 'Vivi Gaeta' ),
		'partner'    => array( 'Diventate amici della Calise Cup', 'calise-cup/partner', 'Amici e partner' ),
		'notizie'    => array( 'Foto e notizie', '', 'Foto e notizie' ),
	);
}

/**
 * Crea pagine, menu e impostazioni. Restituisce il numero di pagine create.
 */
function calise_cup_run_setup() {
	$created = 0;
	$ids     = array();

	foreach ( calise_cup_starter_pages() as $slug => $page ) {
		$existing = get_page_by_path( $slug );
		if ( $existing ) {
			$ids[ $slug ] = $existing->ID;
			continue;
		}
		$content = $page[1] ? '<!-- wp:pattern {"slug":"' . $page[1] . '"} /-->' : '';
		$id      = wp_insert_post(
			array(
				'post_type'      => 'page',
				'post_status'    => 'publish',
				'post_title'     => $page[0],
				'post_name'      => $slug,
				'post_content'   => $content,
				'comment_status' => 'closed',
			)
		);
		if ( $id && ! is_wp_error( $id ) ) {
			$ids[ $slug ] = $id;
			++$created;
		}
	}

	// Home statica e pagina delle notizie.
	if ( ! empty( $ids['home'] ) && ! empty( $ids['notizie'] ) ) {
		update_option( 'show_on_front', 'page' );
		update_option( 'page_on_front', $ids['home'] );
		update_option( 'page_for_posts', $ids['notizie'] );
	}

	// Indirizzi leggibili e commenti chiusi sui nuovi contenuti.
	if ( ! get_option( 'permalink_structure' ) ) {
		update_option( 'permalink_structure', '/%postname%/' );
		flush_rewrite_rules();
	}
	update_option( 'default_comment_status', 'closed' );
	update_option( 'default_ping_status', 'closed' );

	// Menu principale, solo se non ne esiste già uno.
	$menus = get_posts(
		array(
			'post_type'   => 'wp_navigation',
			'post_status' => 'publish',
			'numberposts' => 1,
		)
	);
	if ( ! $menus ) {
		$items = '';
		foreach ( calise_cup_starter_pages() as $slug => $page ) {
			if ( ! $page[2] || empty( $ids[ $slug ] ) ) {
				continue;
			}
			$items .= sprintf(
				'<!-- wp:navigation-link {"label":%s,"type":"page","id":%d,"url":%s,"kind":"post-type"} /-->' . "\n",
				wp_json_encode( $page[2], JSON_UNESCAPED_UNICODE ),
				$ids[ $slug ],
				wp_json_encode( get_permalink( $ids[ $slug ] ), JSON_UNESCAPED_SLASHES )
			);
		}
		wp_insert_post(
			array(
				'post_type'    => 'wp_navigation',
				'post_status'  => 'publish',
				'post_title'   => 'Menu principale',
				'post_content' => $items,
			)
		);
	}

	// Nome e motto del sito, se sono ancora quelli predefiniti.
	if ( in_array( get_option( 'blogdescription' ), array( '', 'Just another WordPress site', 'Un nuovo sito targato WordPress' ), true ) ) {
		update_option( 'blogdescription', 'Beach handball a Gaeta' );
	}

	update_option( 'calise_cup_setup_done', CALISE_CUP_VERSION );
	return $created;
}

/**
 * All'attivazione del tema, una volta sola.
 */
function calise_cup_after_switch() {
	if ( get_option( 'calise_cup_setup_done' ) ) {
		return;
	}
	calise_cup_run_setup();
}
add_action( 'after_switch_theme', 'calise_cup_after_switch' );
