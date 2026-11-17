<?php
/**
 * Piccole funzioni che scrivono blocchi standard di WordPress.
 * Servono solo ai modelli di pagina in /patterns: una volta inserito in una
 * pagina, il contenuto resta fatto di blocchi normali, modificabili dall'editor.
 *
 * @package calise-cup
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/** Indirizzo di una pagina del sito a partire dallo slug. */
function calise_cup_url( $slug = '' ) {
	return esc_url( home_url( $slug ? '/' . trim( $slug, '/' ) . '/' : '/' ) );
}

/** Attributi del blocco in JSON, oppure stringa vuota. */
function calise_cup_attrs( array $attrs ) {
	return $attrs ? ' ' . wp_json_encode( $attrs, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE ) : '';
}

/** Paragrafo. $html può contenere link e grassetti. */
function calise_cup_p( $html, $class = '' ) {
	$attrs = $class ? array( 'className' => $class ) : array();
	printf(
		"<!-- wp:paragraph%s -->\n<p%s>%s</p>\n<!-- /wp:paragraph -->\n\n",
		calise_cup_attrs( $attrs ),
		$class ? ' class="' . esc_attr( $class ) . '"' : '',
		wp_kses_post( $html )
	);
}

/** Titolo. */
function calise_cup_h( $text, $level = 2, $class = '' ) {
	$attrs = array();
	if ( 2 !== $level ) {
		$attrs['level'] = $level;
	}
	if ( $class ) {
		$attrs['className'] = $class;
	}
	printf(
		"<!-- wp:heading%s -->\n<h%d class=\"%s\">%s</h%d>\n<!-- /wp:heading -->\n\n",
		calise_cup_attrs( $attrs ),
		$level,
		esc_attr( trim( 'wp-block-heading ' . $class ) ),
		wp_kses_post( $text ),
		$level
	);
}

/** Apre un gruppo. $layout: default, constrained, grid, flex. */
function calise_cup_open( $class = '', $layout = 'default', array $extra = array() ) {
	$attrs = $extra;
	if ( $class ) {
		$attrs['className'] = $class;
	}
	if ( 'grid' === $layout ) {
		$attrs['layout'] = array(
			'type'               => 'grid',
			'minimumColumnWidth' => isset( $extra['min'] ) ? $extra['min'] : '14rem',
		);
		unset( $attrs['min'] );
	} else {
		$attrs['layout'] = array( 'type' => $layout );
	}
	$classes = 'wp-block-group';
	if ( ! empty( $attrs['align'] ) ) {
		$classes .= ' align' . $attrs['align'];
	}
	if ( $class ) {
		$classes .= ' ' . $class;
	}
	printf( "<!-- wp:group%s -->\n<div class=\"%s\">", calise_cup_attrs( $attrs ), esc_attr( $classes ) );
}

/** Chiude un gruppo. */
function calise_cup_close() {
	echo "</div>\n<!-- /wp:group -->\n\n";
}

/** Riga di pulsanti. Ogni pulsante: array( etichetta, indirizzo, stile facoltativo ). */
function calise_cup_buttons( array $buttons ) {
	echo "<!-- wp:buttons -->\n<div class=\"wp-block-buttons\">";
	foreach ( $buttons as $b ) {
		$style = isset( $b[2] ) ? $b[2] : '';
		$attrs = $style ? array( 'className' => 'is-style-' . $style ) : array();
		printf(
			"<!-- wp:button%s -->\n<div class=\"%s\"><a class=\"wp-block-button__link wp-element-button\" href=\"%s\">%s</a></div>\n<!-- /wp:button -->\n\n",
			calise_cup_attrs( $attrs ),
			esc_attr( trim( 'wp-block-button ' . ( $style ? 'is-style-' . $style : '' ) ) ),
			esc_url( $b[1] ),
			esc_html( $b[0] )
		);
	}
	echo "</div>\n<!-- /wp:buttons -->\n\n";
}

/** Elenco puntato. */
function calise_cup_list( array $items ) {
	echo "<!-- wp:list -->\n<ul class=\"wp-block-list\">";
	foreach ( $items as $item ) {
		printf( "<!-- wp:list-item -->\n<li>%s</li>\n<!-- /wp:list-item -->\n\n", wp_kses_post( $item ) );
	}
	echo "</ul>\n<!-- /wp:list -->\n\n";
}

/** Tabella. $head può essere vuoto. */
function calise_cup_table( array $head, array $rows ) {
	echo "<!-- wp:table -->\n<figure class=\"wp-block-table\"><table class=\"has-fixed-layout\">";
	if ( $head ) {
		echo '<thead><tr>';
		foreach ( $head as $cell ) {
			printf( '<th>%s</th>', wp_kses_post( $cell ) );
		}
		echo '</tr></thead>';
	}
	echo '<tbody>';
	foreach ( $rows as $row ) {
		echo '<tr>';
		foreach ( $row as $cell ) {
			printf( '<td>%s</td>', wp_kses_post( $cell ) );
		}
		echo '</tr>';
	}
	echo "</tbody></table></figure>\n<!-- /wp:table -->\n\n";
}

/** Scheda: etichetta, titolo, testo, link facoltativo. */
function calise_cup_card( $who, $title, $text, $link_label = '', $url = '', $class = '' ) {
	calise_cup_open( trim( 'cc-card ' . $class ) );
	if ( $who ) {
		calise_cup_p( esc_html( $who ), 'cc-who' );
	}
	if ( $title ) {
		calise_cup_h( esc_html( $title ), 3 );
	}
	if ( $text ) {
		calise_cup_p( $text, 'cc-muted' );
	}
	if ( $link_label ) {
		calise_cup_p( sprintf( '<a href="%s">%s</a>', esc_url( $url ), esc_html( $link_label ) ), 'cc-go' );
	}
	calise_cup_close();
}

/** Numero grande con didascalia. */
function calise_cup_fact( $number, $label ) {
	calise_cup_open( 'cc-fact' );
	calise_cup_p( esc_html( $number ), 'cc-num' );
	calise_cup_p( esc_html( $label ) );
	calise_cup_close();
}

/**
 * Foto del tema (cartella assets/img/foto). $align: '', 'wide' o 'full'.
 */
function calise_cup_img( $file, $alt, $class = '', $caption = '', $align = '' ) {
	$attrs = array(
		'sizeSlug'        => 'full',
		'linkDestination' => 'none',
	);
	if ( $align ) {
		$attrs['align'] = $align;
	}
	if ( $class ) {
		$attrs['className'] = $class;
	}
	$classes = trim( 'wp-block-image ' . ( $align ? 'align' . $align . ' ' : '' ) . 'size-full ' . $class );
	$src     = get_theme_file_uri( 'assets/img/foto/' . $file );
	printf(
		"<!-- wp:image%s -->\n<figure class=\"%s\"><img src=\"%s\" alt=\"%s\"/>%s</figure>\n<!-- /wp:image -->\n\n",
		calise_cup_attrs( $attrs ),
		esc_attr( $classes ),
		esc_url( $src ),
		esc_attr( $alt ),
		$caption ? '<figcaption class="wp-element-caption">' . wp_kses_post( $caption ) . '</figcaption>' : ''
	);
}

/**
 * Scheda con foto in alto.
 */
function calise_cup_photo_card( $file, $alt, $who, $title, $text, $link_label, $url ) {
	calise_cup_open( 'cc-card cc-photo-card' );
	calise_cup_img( $file, $alt, 'cc-card-img' );
	calise_cup_open( 'cc-card-body' );
	calise_cup_p( esc_html( $who ), 'cc-who' );
	calise_cup_h( esc_html( $title ), 3 );
	calise_cup_p( $text, 'cc-muted' );
	calise_cup_p( sprintf( '<a href="%s">%s</a>', esc_url( $url ), esc_html( $link_label ) ), 'cc-go' );
	calise_cup_close();
	calise_cup_close();
}

/**
 * Fascia fotografica a tutta larghezza in testa alle pagine interne.
 */
function calise_cup_banner( $file, $alt, $caption = '' ) {
	calise_cup_img( $file, $alt, 'cc-banner', $caption, 'wide' );
}
