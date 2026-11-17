<?php
/**
 * Title: Calendario e risultati
 * Slug: calise-cup/calendario
 * Categories: calise-cup
 * Description: Pagina del calendario, in attesa del modulo partite e risultati.
 */

calise_cup_p( 'Qui troverete orari, campi e risultati di tutte le partite, aggiornati dai volontari direttamente dalla spiaggia.', 'cc-intro' );

calise_cup_open( 'cc-section' );
calise_cup_p( 'Il calendario 2027 sarà pubblicato su questa pagina dopo la chiusura delle iscrizioni.', 'cc-note' );
calise_cup_close();

calise_cup_open( 'cc-section' );
calise_cup_h( 'Come funzionerà' );
?>
<!-- wp:columns {"verticalAlignment":"center"} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"62%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:62%"><?php
calise_cup_open( 'cc-grid', 'grid', array( 'min' => '12rem' ) );
calise_cup_card( 'Per gli atleti', 'Le partite della vostra squadra', 'Cercate la squadra e trovate giorno, ora e campo. Potrete salvarle nel calendario del telefono.' );
calise_cup_card( 'Per il pubblico', 'Tutto il programma', 'Filtri per giorno, campo e categoria, per sapere sempre cosa si gioca e dove.' );
calise_cup_card( 'In diretta', 'Risultati dal campo', 'Punteggio di ogni tempo, classifiche dei gironi e tabellone finale, aggiornati partita dopo partita.' );
calise_cup_close();
?></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><?php calise_cup_img( 'tiro-tabellone.jpg', 'Un tiro in sospensione, sullo sfondo il tabellone con il punteggio 14 a 16', 'cc-polaroid is-tall', '14 a 16, si decide tutto qui' ); ?></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<?php
calise_cup_close();

calise_cup_open( 'cc-section' );
calise_cup_h( 'I campi' );
calise_cup_p( 'Si gioca sulla Spiaggia di Serapo, nei lidi Arena Beach, Miramare, Aurora e Serapide, in Via Marina di Serapo a Gaeta.' );
calise_cup_close();
