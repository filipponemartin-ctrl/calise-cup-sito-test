<?php
/**
 * Title: Home
 * Slug: calise-cup/home
 * Categories: calise-cup
 * Description: Pagina iniziale: benvenuto, storia, percorsi per pubblico, chi siamo, notizie e partner.
 */
?>
<!-- wp:group {"className":"cc-hero","layout":{"type":"default"}} -->
<div class="wp-block-group cc-hero"><!-- wp:columns {"verticalAlignment":"center"} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"56%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:56%"><?php
calise_cup_p( 'Benvenuti a Gaeta!', 'cc-hand' );
calise_cup_h( 'Vi aspettiamo sulla sabbia di Serapo', 1 );
calise_cup_p( 'La Calise Cup è il torneo di beach handball che la nostra società organizza ogni giugno, con squadre da tutta Europa e tanti ragazzi delle giovanili. Giorni di sport, mare e amicizia.', 'cc-lead' );
calise_cup_buttons(
	array(
		array( 'Iscrivi la squadra', calise_cup_url( 'partecipa' ) ),
		array( 'Venite a trovarci', calise_cup_url( 'vivi-gaeta' ), 'outline' ),
	)
);
?></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"cc-polaroid"} -->
<figure class="wp-block-image size-full cc-polaroid"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/serapo.svg' ) ); ?>" alt="La spiaggia di Serapo durante il torneo"/><figcaption class="wp-element-caption">Serapo, giugno</figcaption></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<?php
// Il ricordo da cui nasce il torneo.
calise_cup_open( 'cc-memory cc-section' );
calise_cup_p( 'Da dove veniamo', 'cc-eyebrow' );
calise_cup_h( 'Tutto è cominciato per ricordare un amico' );
calise_cup_p( 'Francesco Calise era il portiere della Juniores dello Sporting Club Gaeta. Dopo la sua scomparsa in un incidente stradale, i suoi amici organizzarono una partita in suo ricordo contro il Gaeta Handball 84. Da quell\'incontro è nato un torneo che oggi porta a Gaeta squadre da tutta Europa, e che porta ancora il suo nome.' );
calise_cup_p( '<a href="' . calise_cup_url( 'il-torneo' ) . '">La nostra storia</a>', 'cc-go' );
calise_cup_close();

// Percorsi per pubblico.
calise_cup_open( 'cc-section' );
calise_cup_h( 'Come possiamo aiutarvi?' );
calise_cup_open( 'cc-grid', 'grid', array( 'min' => '14rem' ) );
calise_cup_card( 'Squadre', 'Volete partecipare?', 'Iscrizione, regolamento, alloggi e convenzioni, tutto in un posto.', 'Partecipa', calise_cup_url( 'partecipa' ) );
calise_cup_card( 'Atleti', 'Quando giocate?', 'Orari e campi della vostra squadra, risultati e classifiche aggiornati dal campo.', 'Calendario', calise_cup_url( 'calendario' ) );
calise_cup_card( 'Famiglie e pubblico', 'Venite a vederci', 'L\'ingresso in spiaggia è libero. Programma, finali e cosa fare a Gaeta.', 'Vivi Gaeta', calise_cup_url( 'vivi-gaeta' ) );
calise_cup_card( 'Aziende', 'Sostenete il torneo', 'Diventate amici della Calise Cup e fatevi conoscere da chi viene a Gaeta.', 'Amici e partner', calise_cup_url( 'partner' ) );
calise_cup_close();
calise_cup_close();

// Numeri.
calise_cup_open( 'cc-facts cc-section', 'grid', array( 'min' => '11rem' ) );
calise_cup_fact( '900+', 'atleti nell\'edizione 2026' );
calise_cup_fact( '14', 'nazionali da tutto il mondo nel 2026' );
calise_cup_fact( '4', 'lidi di Serapo che ci ospitano' );
calise_cup_fact( '7', 'categorie, dai bambini under 10 ai veterani' );
calise_cup_close();

// Chi siamo.
calise_cup_open( 'cc-section' );
calise_cup_p( 'Chi siamo', 'cc-eyebrow' );
calise_cup_h( 'Una società di Gaeta, tanti volontari' );
calise_cup_p( 'La Calise Cup è organizzata dal Gaeta Handball 84 insieme alla Città di Gaeta e al CUS Cassino. Dietro ogni campo ci sono persone del territorio: qui le presentiamo con nome e ruolo.', 'cc-intro' );
calise_cup_open( 'cc-grid is-tight', 'grid', array( 'min' => '11rem' ) );
foreach ( array( 'Presidente del comitato', 'Calendari e risultati', 'Accoglienza delle squadre', 'Rapporti con i partner' ) as $ruolo ) {
	calise_cup_open( 'cc-person' );
	calise_cup_p( '?', 'cc-face' );
	calise_cup_p( '<strong>Nome Cognome</strong>' );
	calise_cup_p( esc_html( $ruolo ), 'cc-muted' );
	calise_cup_close();
}
calise_cup_close();
calise_cup_close();
?>
<!-- wp:columns {"className":"cc-section"} -->
<div class="wp-block-columns cc-section"><!-- wp:column -->
<div class="wp-block-column"><?php calise_cup_h( 'Ultime notizie' ); ?>
<!-- wp:query {"queryId":1,"query":{"perPage":2,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":false},"className":"cc-posts"} -->
<div class="wp-block-query cc-posts"><!-- wp:post-template -->
<!-- wp:post-date /-->

<!-- wp:post-title {"level":3,"isLink":true} /-->

<!-- wp:post-excerpt {"excerptLength":24} /-->
<!-- /wp:post-template --></div>
<!-- /wp:query -->

<?php calise_cup_p( '<a href="' . calise_cup_url( 'notizie' ) . '">Tutte le notizie</a>', 'cc-go' ); ?></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><?php
calise_cup_h( 'Grazie a chi ci sostiene' );
calise_cup_open( 'cc-logos', 'grid', array( 'min' => '8rem' ) );
foreach ( array( 'Città di Gaeta', 'CUS Cassino', 'Gaeta Barche', 'I trenini di Gaeta', 'Caseificio Lo Spicchio', 'Il vostro logo' ) as $nome ) {
	calise_cup_p( esc_html( $nome ), 'cc-logo' );
}
calise_cup_close();
calise_cup_p( '<a href="' . calise_cup_url( 'partner' ) . '">Diventate partner</a>', 'cc-go' );
?></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
