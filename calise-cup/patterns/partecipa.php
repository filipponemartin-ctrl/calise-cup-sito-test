<?php
/**
 * Title: Partecipa
 * Slug: calise-cup/partecipa
 * Categories: calise-cup
 * Description: Per squadre e accompagnatori: passi dell'iscrizione, alloggi, Calise Cup Card.
 */

calise_cup_p( 'Ci occupiamo noi di semplificarvi il viaggio. Se avete un dubbio, scriveteci: rispondiamo in italiano e in inglese.', 'cc-intro' );
calise_cup_banner( 'cinque-alte.jpg', 'Giocatrici di due squadre si danno il cinque a fine partita, sullo sfondo le bandiere delle nazioni', 'A fine partita ci si saluta tutti' );

calise_cup_open( 'cc-steps cc-section', 'grid', array( 'min' => '13rem' ) );
$passi = array(
	'Iscrivete la squadra'      => 'Categoria, nazione e contatti del team manager.',
	'Vi confermiamo tutto'      => 'Un\'email con il riepilogo e la quota.',
	'Scegliete dove dormire'    => 'Strutture convenzionate o una soluzione vostra.',
	'Vi accogliamo in spiaggia' => 'Calendario della squadra e Calise Cup Card all\'arrivo.',
);
foreach ( $passi as $titolo => $testo ) {
	calise_cup_open( 'cc-step' );
	calise_cup_h( esc_html( $titolo ), 3 );
	calise_cup_p( esc_html( $testo ), 'cc-muted' );
	calise_cup_close();
}
calise_cup_close();
?>
<!-- wp:columns {"className":"cc-section"} -->
<div class="wp-block-columns cc-section"><!-- wp:column -->
<div class="wp-block-column"><?php
calise_cup_open( 'cc-card is-sea' );
calise_cup_p( 'Pre-iscrizione 2027', 'cc-who' );
calise_cup_h( 'Scriveteci per prenotare il posto', 3 );
calise_cup_p( 'Il modulo online arriva con l\'apertura delle iscrizioni. Nel frattempo mandateci un\'email con:' );
calise_cup_list(
	array(
		'nome della squadra e nazione',
		'categoria (seniores, veterani, giovanili)',
		'nome e telefono del team manager',
		'numero indicativo di atleti e accompagnatori',
	)
);
calise_cup_p( '<strong>calisecup@gmail.com</strong> · +39 339 112 3631', 'cc-contact' );
calise_cup_close();

calise_cup_open( 'cc-card is-warm' );
calise_cup_p( 'Calise Cup Card', 'cc-who' );
calise_cup_p( 'Ogni partecipante riceve una card personale per le feste riservate e gli sconti dei nostri amici. Nel 2026:' );
calise_cup_list(
	array(
		'<strong>Gaeta Barche</strong>: −30% mezza giornata, −40% giornata intera, −20% gite in gruppo da 4',
		'<strong>I trenini di Gaeta</strong>: biglietto 3 €, tre giorni 15 €',
		'<strong>Caseificio Lo Spicchio</strong>: −10% sulla spesa e sui prodotti tipici, dalle tielle alle olive di Gaeta',
	)
);
calise_cup_close();
?></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><?php
calise_cup_open( 'cc-card' );
calise_cup_p( 'Dove dormire', 'cc-who' );
calise_cup_p( 'Abbiamo convenzioni con hotel e B&amp;B per i giorni del torneo. I posti sono limitati: prenotate direttamente con la struttura.' );
calise_cup_p( 'Per altre soluzioni vi aiutano la Pro Loco Gaeta (Via Firenze 2 · info@prolocogaeta.it · +39 320 038 0413) e I Viaggi di Kilroy (Via Vittorio Veneto 6 · info@kilroy.it · +39 0771 464560).', 'cc-muted' );
calise_cup_close();

calise_cup_open( 'cc-grid', 'grid', array( 'min' => '11rem' ) );
calise_cup_card( 'Mangiare', '', 'Ristoranti e lidi convenzionati.' );
calise_cup_card( 'Arrivare', '', 'Come raggiungere Gaeta e muoversi in città.' );
calise_cup_card( 'Allenarsi', '', 'Campi a disposizione prima del torneo.' );
calise_cup_card( 'Divertirsi', '', 'Le serate insieme e la città.' );
calise_cup_close();
?></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
