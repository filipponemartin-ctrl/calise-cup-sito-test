<?php
/**
 * Title: Testata
 * Slug: calise-cup/header
 * Categories: calise-cup
 * Inserter: false
 */
?>
<!-- wp:group {"className":"cc-header","layout":{"type":"constrained"}} -->
<div class="wp-block-group cc-header"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:image {"sizeSlug":"full","linkDestination":"custom","className":"cc-brand"} -->
<figure class="wp-block-image size-full cc-brand"><a href="<?php echo calise_cup_url(); ?>"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/logo-calise-cup-blu.png' ) ); ?>" alt="Calise Cup, European Beach Handball Tournament: torna alla home"/></a></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"cc-header-tools","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group cc-header-tools"><!-- wp:navigation {"overlayMenu":"mobile","layout":{"type":"flex","justifyContent":"right"}} /-->

<!-- wp:buttons {"className":"cc-cta"} -->
<div class="wp-block-buttons cc-cta"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo calise_cup_url( 'partecipa' ); ?>">Iscrivi la squadra</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
