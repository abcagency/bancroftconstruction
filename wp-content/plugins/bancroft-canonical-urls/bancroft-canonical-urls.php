<?php
/*
 * Plugin Name: Bancroft Canonical URLs
 * Description: Changes canonical URL domain for bancroftconstruction
 * Author: rgranados
 * Version: 1.0
 * Author URI: https://www.abccreative.com
 *
 **/

function bancroft_canonical_url( $canonical_url ) {
  
  if ($_ENV['PANTHEON_ENVIRONMENT'] === 'live') { 
    $domain = 'www.bancroftconstruction.com'; // this can be loaded from option table if you want admin to set it.
    $parsed = parse_url(home_url());
    $current_site_domain = $parsed['host'];
    return str_replace($current_site_domain, $domain, $canonical_url);
  }
  else {
    return $canonical_url;
  }
}
add_filter( 'get_canonical_url', 'bancroft_canonical_url', 10, 2 );