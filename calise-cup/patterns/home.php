<?php
/**
 * Title: Home
 * Slug: calise-cup/home
 * Categories: calise-cup
 * Description: Pagina iniziale: apertura con foto, nazioni, storia, percorsi per pubblico, numeri, mosaico, chi siamo, notizie e partner.
 */

// Apertura a tutta larghezza.
calise_cup_open( 'cc-hero', 'default', array( 'align' => 'full' ) );
calise_cup_img( 'festa-italia.jpg', 'La squadra italiana festeggia sulla sabbia di Serapo' );
calise_cup_open( 'cc-hero-text' );
calise_cup_p( 'Benvenuti a Gaeta!', 'cc-hand' );
calise_cup_h( 'Vi aspettiamo sulla sabbia di Serapo', 1 );
calise_cup_p( 'La Calise Cup è il torneo di beach handball che la nostra società organizza ogni giugno: squadre da tutto il mondo, tanti ragazzi delle giovanili, giorni di sport, mare e amicizia.', 'cc-lead' );
calise_cup_buttons(
	array(
		array( 'Iscrivi la squadra', calise_cup_url( 'partecipa' ), 'sole' ),
		array( 'Venite a trovarci', calise_cup_url( 'vivi-gaeta' ), 'outline' ),
	)
);
calise_cup_close();
calise_cup_close();

// Le nazioni.
calise_cup_open( 'cc-nations', 'constrained', array( 'align' => 'full' ) );
calise_cup_open( '', 'flex' );
calise_cup_p( '14 nazionali nel 2026, tra cui', 'cc-nations-label' );
foreach ( array( 'Italia', 'Australia', 'Brasile', 'Stati Uniti', 'Gran Bretagna', 'Slovacchia', 'Malta' ) as $nazione ) {
	calise_cup_p( esc_html( $nazione ) );
}
calise_cup_close();
calise_cup_close();

// Il ricordo da cui nasce il torneo.
calise_cup_open( 'cc-memory cc-section' );
?>
<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"58%"} -->
<div class="wp-block-column" style="flex-basis:58%"><?php
calise_cup_p( '1989', 'cc-year' );
calise_cup_h( 'Tutto è cominciato per ricordare un amico' );
calise_cup_p( 'Francesco Calise era il portiere della Juniores dello Sporting Club Gaeta. Dopo la sua scomparsa in un incidente stradale, i suoi amici organizzarono una partita in suo ricordo contro il Gaeta Handball 84. Da quell\'incontro è nato un torneo che oggi porta a Gaeta squadre da tutto il mondo, e che porta ancora il suo nome.' );
calise_cup_p( '<a href="' . calise_cup_url( 'il-torneo' ) . '">La nostra storia</a>', 'cc-go' );
?></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><?php calise_cup_img( 'italia-schierata.jpg', 'Giocatori abbracciati in fila prima della finale, con il pubblico in tribuna', 'cc-polaroid', 'Insieme, prima della finale' ); ?></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<?php
calise_cup_close();

// Percorsi per pubblico.
calise_cup_open( 'cc-section' );
calise_cup_p( 'Per chi è il sito', 'cc-eyebrow' );
calise_cup_h( 'Come possiamo aiutarvi?' );
calise_cup_open( 'cc-grid', 'grid', array( 'min' => '14rem' ) );
calise_cup_photo_card( 'cinque-alte.jpg', 'Giocatrici di due squadre si danno il cinque dopo la partita', 'Squadre', 'Volete partecipare?', 'Iscrizione, regolamento, alloggi e convenzioni, tutto in un posto.', 'Partecipa', calise_cup_url( 'partecipa' ) );
calise_cup_photo_card( 'attacco-cerbone.jpg', 'Un tiro in volo durante una partita maschile', 'Atleti', 'Quando giocate?', 'Orari e campi della vostra squadra, risultati e classifiche aggiornati dal campo.', 'Calendario', calise_cup_url( 'calendario' ) );
calise_cup_photo_card( 'italia-mare.jpg', 'La squadra in fila con il mare e gli ombrelloni sullo sfondo', 'Famiglie e pubblico', 'Venite a vederci', 'L\'ingresso in spiaggia è libero. Programma, finali e cosa fare a Gaeta.', 'Vivi Gaeta', calise_cup_url( 'vivi-gaeta' ) );
calise_cup_photo_card( 'borraccia.jpg', 'Una giocatrice beve dalla borraccia durante una pausa', 'Aziende', 'Sostenete il torneo', 'Diventate amici della Calise Cup e fatevi conoscere da chi viene a Gaeta.', 'Amici e partner', calise_cup_url( 'partner' ) );
calise_cup_close();
calise_cup_close();

// Numeri, su fascia blu notte.
calise_cup_open( 'cc-band is-night', 'constrained', array( 'align' => 'full' ) );
calise_cup_p( 'La Calise Cup in numeri', 'cc-eyebrow' );
calise_cup_open( 'cc-facts', 'grid', array( 'min' => '9.5rem' ) );
calise_cup_fact( '900+', 'atleti nell\'edizione 2026' );
calise_cup_fact( '14', 'nazionali da tutto il mondo' );
calise_cup_fact( '4', 'lidi di Serapo che ci ospitano' );
calise_cup_fact( '7', 'categorie, dai bambini under 10 ai veterani' );
calise_cup_close();
calise_cup_close();

// Mosaico di foto.
calise_cup_open( 'cc-section' );
calise_cup_p( 'Com\'è stare qui', 'cc-hand' );
calise_cup_h( 'Sabbia, mare e voli' );
calise_cup_open( 'cc-mosaic' );
calise_cup_img( 'australia-tiro.jpg', 'Un giocatore australiano tira in volo, alle spalle le colline di Gaeta', 'is-tall' );
calise_cup_img( 'volo-slovacchia.jpg', 'Una giocatrice tira in volo davanti al muro della difesa slovacca', 'is-wide' );
calise_cup_img( 'esultanza.jpg', 'Due giocatrici della Gran Bretagna esultano sulla sabbia', 'is-tall' );
calise_cup_img( 'tiro-tabellone.jpg', 'Un tiro in sospensione, sullo sfondo il tabellone del punteggio' );
calise_cup_img( 'tuffo-difesa.jpg', 'Attaccante e difensore in tuffo davanti alla porta' );
calise_cup_close();
calise_cup_close();

// Chi siamo.
calise_cup_open( 'cc-section' );
?>
<!-- wp:columns {"verticalAlignment":"center"} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"42%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:42%"><?php calise_cup_img( 'staff-sorrisi.jpg', 'Due allenatori sorridono affacciati alla tribuna', 'cc-polaroid is-left', 'Le persone del torneo' ); ?></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><?php
calise_cup_p( 'Chi siamo', 'cc-eyebrow' );
calise_cup_h( 'Una società di Gaeta, tanti volontari' );
calise_cup_p( 'La Calise Cup è organizzata dal Gaeta Handball 84 insieme alla Città di Gaeta e al CUS Cassino. Dietro ogni campo ci sono persone del territorio: qui le presentiamo con nome e ruolo.', 'cc-intro' );
calise_cup_open( 'cc-grid is-people', 'grid', array( 'min' => '7.5rem' ) );
foreach ( array( 'Presidente del comitato', 'Calendari e risultati', 'Accoglienza delle squadre', 'Rapporti con i partner' ) as $ruolo ) {
	calise_cup_open( 'cc-person' );
	calise_cup_p( '?', 'cc-face' );
	calise_cup_p( '<strong>Nome Cognome</strong>' );
	calise_cup_p( esc_html( $ruolo ), 'cc-muted' );
	calise_cup_close();
}
calise_cup_close();
?></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<?php
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
