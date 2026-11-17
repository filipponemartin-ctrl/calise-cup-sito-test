<?php
/**
 * Title: Vivi Gaeta
 * Slug: calise-cup/vivi-gaeta
 * Categories: calise-cup
 * Description: Per famiglie e pubblico: programma dei giorni, dove siamo, altri appuntamenti.
 */

calise_cup_p( 'Si gioca sulla spiaggia, tra un ombrellone e l\'altro. Portate i bambini, il cappello e la voglia di fare il tifo. Il programma è indicativo: quello 2027 arriverà in primavera.', 'cc-intro' );

calise_cup_open( 'cc-grid cc-section', 'grid', array( 'min' => '15rem' ) );
calise_cup_card( 'Venerdì', 'Si comincia', 'Accoglienza delle squadre e prime partite dei gironi nel pomeriggio.' );
calise_cup_card( 'Sabato', 'La spiaggia piena', 'Tutte le categorie in campo. La sera, festa per atleti e accompagnatori.' );
calise_cup_card( 'Domenica', 'Finali e premiazioni', 'Il giorno più bello per venire a vederci: semifinali, finali e premi.', '', '', 'is-warm' );
calise_cup_close();
?>
<!-- wp:columns {"className":"cc-section"} -->
<div class="wp-block-columns cc-section"><!-- wp:column -->
<div class="wp-block-column"><?php
calise_cup_open( 'cc-card' );
calise_cup_p( 'Dove siamo', 'cc-who' );
calise_cup_h( 'Spiaggia di Serapo', 3 );
calise_cup_p( 'Lidi Arena Beach, Miramare, Aurora e Serapide, in Via Marina di Serapo. In spiaggia si entra liberamente.' );
calise_cup_p( 'Qui arriverà una mappa semplice con campi, parcheggi, fermate del trenino e servizi.', 'cc-note' );
calise_cup_close();
?></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><?php
calise_cup_open( 'cc-card' );
calise_cup_p( 'Non solo partite', 'cc-who' );
calise_cup_h( 'Gli altri appuntamenti', 3 );
calise_cup_list(
	array(
		'<strong>Convegno "Sport e stili di vita"</strong>: ingresso gratuito',
		'<strong>Trofeo CSI</strong>: un torneo dedicato all\'integrazione',
		'<strong>Serata sul main stage</strong>: musica e ritrovo degli atleti',
		'<strong>Gaeta da scoprire</strong>: il trenino, una gita in barca, le tielle e le olive di Gaeta',
	)
);
calise_cup_close();
?></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
