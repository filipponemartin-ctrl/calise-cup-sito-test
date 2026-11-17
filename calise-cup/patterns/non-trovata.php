<?php
/**
 * Title: Pagina non trovata
 * Slug: calise-cup/non-trovata
 * Categories: calise-cup
 * Inserter: false
 */

calise_cup_open( 'cc-page-head cc-section' );
calise_cup_p( 'Ops, palla fuori!', 'cc-hand' );
calise_cup_h( 'Questa pagina non c\'è', 1 );
calise_cup_p( 'Forse l\'indirizzo è cambiato con il nuovo sito. Ripartite dalla home o scriveteci: vi aiutiamo volentieri.', 'cc-intro' );
calise_cup_buttons( array( array( 'Torna alla home', calise_cup_url() ) ) );
calise_cup_close();
