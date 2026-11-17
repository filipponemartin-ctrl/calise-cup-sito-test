<?php
/**
 * Title: Il torneo
 * Slug: calise-cup/torneo
 * Categories: calise-cup
 * Description: Dove, quando, categorie, come si gioca, scadenze e storia.
 */

calise_cup_p( 'Tutto quello che c\'è da sapere sulla Calise Cup. Le informazioni vengono dal regolamento 2026: appena fissate, le date 2027 compariranno qui.', 'cc-intro' );
calise_cup_banner( 'volo-slovacchia.jpg', 'Una giocatrice tira in volo davanti alla difesa, a bordo campo gli striscioni del torneo' );
?>
<!-- wp:columns {"className":"cc-section"} -->
<div class="wp-block-columns cc-section"><!-- wp:column -->
<div class="wp-block-column"><?php
calise_cup_table(
	array(),
	array(
		array( '<strong>Dove</strong>', 'Spiaggia di Serapo, lidi Arena Beach, Miramare, Aurora e Serapide · Via Marina di Serapo, Gaeta (LT)' ),
		array( '<strong>Quando</strong>', 'Giugno 2027, date da confermare. L\'ultima edizione: 12–14 giugno 2026' ),
		array( '<strong>Chi organizza</strong>', 'Città di Gaeta e Gaeta Handball 1984 ASD, con il CUS Cassino' ),
		array( '<strong>Circuito</strong>', 'Tappa dell\'European Beach Handball Tour' ),
		array( '<strong>Scriveteci</strong>', 'calisecup@gmail.com · +39 339 112 3631' ),
	)
);
?></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><?php
calise_cup_table(
	array( 'Categoria', 'Possono giocare (2026)' ),
	array(
		array( 'Seniores maschile e femminile', '—' ),
		array( 'Veterani', 'dai 35 anni' ),
		array( 'Under 18', 'nati dal 2008' ),
		array( 'Under 16', 'nati dal 2010' ),
		array( 'Under 14', 'nati dal 2012' ),
		array( 'Under 12 e Under 10', 'nati dal 2014' ),
	)
);
?></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<?php
calise_cup_open( 'cc-section' );
calise_cup_h( 'Come si gioca' );
?>
<!-- wp:columns {"verticalAlignment":"center"} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"64%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:64%"><?php
calise_cup_open( 'cc-grid', 'grid', array( 'min' => '13rem' ) );
calise_cup_card( 'La formula', '', 'Prima i gironi, poi l\'eliminazione diretta. Tutte le squadre giocano fino all\'ultimo piazzamento.' );
calise_cup_card( 'La partita', '', 'Due tempi da 10 minuti, 7 per le giovanili. Ogni tempo si vince a sé.' );
calise_cup_card( 'In parità', '', 'Tempo pari: golden goal. Un tempo per parte: shootout contro il portiere.' );
calise_cup_card( 'Fair play', '', 'Nel beach handball conta prima di tutto. Si gioca con qualsiasi tempo.' );
calise_cup_close();
?></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><?php calise_cup_img( 'arbitro.jpg', 'Un arbitro internazionale con la divisa EHF fischia a bordo campo', 'cc-polaroid is-tall', 'Arbitri da tutta Europa' ); ?></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<?php
calise_cup_p( 'Il regolamento completo sarà pubblicato qui, in italiano e in inglese, con il PDF da scaricare.', 'cc-note' );
calise_cup_close();

calise_cup_open( 'cc-section' );
calise_cup_h( 'Scadenze 2027' );
calise_cup_p( 'Le pubblicheremo qui appena decise, così non dovrete cercarle altrove.', 'cc-muted' );
calise_cup_table(
	array( 'Cosa', 'Entro' ),
	array(
		array( 'Pre-iscrizione della squadra', '<span class="cc-pill">da definire</span>' ),
		array( 'Iscrizione definitiva e quota', '<span class="cc-pill">da definire</span>' ),
		array( 'Indirizzo dell\'alloggio, se autonomo', 'insieme all\'iscrizione' ),
		array( 'Lista dei partecipanti firmata e certificati medici', '<span class="cc-pill">da definire</span>' ),
		array( 'Richieste sugli orari di gioco', 'prima che escano i calendari' ),
	)
);
calise_cup_close();
?>
<!-- wp:columns {"className":"cc-section"} -->
<div class="wp-block-columns cc-section"><!-- wp:column {"width":"58%"} -->
<div class="wp-block-column" style="flex-basis:58%"><?php
calise_cup_h( 'La nostra storia' );
calise_cup_open( 'cc-timeline' );
$storia = array(
	'1989' => 'Il Memorial Francesco Calise: una partita per ricordare un amico.',
	'1992' => 'A Ponza il primo torneo internazionale di beach handball, nato tra Gaeta e le isole grazie a Gianni Buttarelli e ai suoi amici.',
	'2001' => 'Nasce il Trofeo Buttarelli, dedicato alle squadre senior.',
	'2016' => 'I due tornei diventano uno solo, sulla sabbia.',
	'2017' => 'La prima edizione con il nome Calise Cup.',
);
foreach ( $storia as $anno => $fatto ) {
	calise_cup_open( 'cc-year-item' );
	calise_cup_h( esc_html( $anno ), 3 );
	calise_cup_p( esc_html( $fatto ) );
	calise_cup_close();
}
calise_cup_close();
?></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><?php
calise_cup_img( 'podio-italia.jpg', 'La squadra vincitrice con la coppa dietro il pannello Calise Cup Winners', 'cc-polaroid is-tall', 'I vincitori 2026' );
calise_cup_open( 'cc-card is-warm' );
calise_cup_p( 'Albo d\'oro', 'cc-who' );
calise_cup_h( 'Chi ha vinto, anno per anno', 3 );
calise_cup_p( 'Ogni edizione avrà la sua pagina con le classifiche finali, i premi individuali e le foto: 2017, 2018, 2019, 2021, 2022, 2023, 2024, 2025 e 2026.' );
calise_cup_close();
?></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
