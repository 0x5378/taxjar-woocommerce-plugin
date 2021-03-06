<?php

/**
 * TaxJar AJAX
 *
 * @package  WC_Taxjar_Integration
 * @author   TaxJar
 */

if ( ! defined( 'ABSPATH' ) )  {
  exit; // Prevent direct access to script
}

class WC_Taxjar_AJAX {

  public function __construct( ) {
    add_action( 'wp_ajax_wc_taxjar_update_nexus_cache', array( $this, 'wc_taxjar_update_nexus_cache' ) );
  }

  public function wc_taxjar_update_nexus_cache() {
    $taxjar_nexus = new WC_Taxjar_Nexus(new WC_Taxjar_Integration);
    $taxjar_nexus->get_or_update_cached_nexus(true);
    die();
  }

} // WC_Taxjar_AJAX

new WC_Taxjar_AJAX();
