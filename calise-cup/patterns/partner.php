<?php
/**
 * Title: Amici e partner
 * Slug: calise-cup/partner
 * Categories: calise-cup
 * Description: Per aziende e attività: numeri, pacchetti, partner attuali, contatto.
 */

calise_cup_p( 'Il torneo vive grazie a chi ci crede: dalle grandi aziende al bar sulla spiaggia. Sostenerlo significa farsi conoscere da squadre e famiglie che arrivano a Gaeta da tutto il mondo.', 'cc-intro' );

calise_cup_open( 'cc-facts cc-section', 'grid', array( 'min' => '11rem' ) );
calise_cup_fact( '900+', 'atleti nell\'edizione 2026' );
calise_cup_fact( '14', 'nazionali da tutto il mondo' );
calise_cup_fact( '4.000', 'utenti connessi in media alle dirette' );
calise_cup_fact( '4', 'giorni in spiaggia a giugno' );
calise_cup_close();

calise_cup_open( 'cc-section' );
calise_cup_h( 'Per le attività del territorio' );
calise_cup_p( 'Cinque modi per esserci, a partire da 50 euro.', 'cc-muted' );
calise_cup_open( 'cc-grid is-tight', 'grid', array( 'min' => '12rem' ) );
calise_cup_card( 'Amico · 50 €', '', 'Il vostro nome sul sito e una storia sui social.' );
calise_cup_card( 'Tifoso · 100 €', '', 'Il logo sul sito e un post sui social.' );
calise_cup_card( 'Bordo campo · 300 €', '', 'Il logo sul banner degli sponsor a bordo campo e un post dedicato.' );
calise_cup_card( 'In diretta · 500 €', '', 'Uno striscione a bordo campo e il logo nelle dirette YouTube.' );
calise_cup_card( 'Podio · 1.000 €', '', 'Lo striscione sul campo centrale e il logo sul pannello delle premiazioni.', '', '', 'is-warm' );
calise_cup_close();
calise_cup_close();
?>
<!-- wp:columns {"className":"cc-section"} -->
<div class="wp-block-columns cc-section"><!-- wp:column -->
<div class="wp-block-column"><?php
calise_cup_open( 'cc-card is-olive' );
calise_cup_p( 'Per le aziende', 'cc-who' );
calise_cup_h( 'Costruiamo insieme il vostro pacchetto', 3 );
calise_cup_p( 'Il nome di un campo o di un trofeo, le dirette, la serata sul main stage, il convegno, il settore giovanile, la borraccia plastic-free: scegliamo insieme lo spazio più adatto a voi.' );
calise_cup_p( 'Chi non può sostenerci con un contributo può farlo con prodotti e servizi: ospitalità, pasti, trasporti, premi.' );
calise_cup_close();
?></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><?php
calise_cup_open( 'cc-card' );
calise_cup_p( 'Parliamone', 'cc-who' );
calise_cup_h( 'Vi richiamiamo noi', 3 );
calise_cup_p( 'Scriveteci due righe con il nome dell\'azienda e un recapito: vi mandiamo la presentazione e ci sentiamo quando vi è comodo.' );
calise_cup_p( '<strong>calisecup@gmail.com</strong> · +39 339 112 3631', 'cc-contact' );
calise_cup_close();
?></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<?php
calise_cup_open( 'cc-section' );
calise_cup_h( 'Chi ci ha sostenuto nel 2026' );
calise_cup_open( 'cc-logos', 'grid', array( 'min' => '9rem' ) );
foreach ( array( 'Città di Gaeta', 'CUS Cassino', 'Gaeta Barche', 'I trenini di Gaeta', 'Caseificio Lo Spicchio', 'Il vostro logo' ) as $nome ) {
	calise_cup_p( esc_html( $nome ), 'cc-logo' );
}
calise_cup_close();
calise_cup_close();
