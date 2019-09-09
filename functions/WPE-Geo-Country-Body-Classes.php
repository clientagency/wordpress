<?php

/* WP Engine Geo plugin - country classes to body */
add_filter( 'body_class', 'geo_body_class' );
function geo_body_class( $classes ) {

 	$country = getenv('HTTP_GEOIP_COUNTRY_CODE');
	if ( $country == "US" ) {
		$classes[] = 'country-us';
	} else if ( $country == "FI" ) {
		$classes[] = 'country-fi';
	} else if ( $country == "DE" ) {
		$classes[] = 'country-de';
	}else {
		$classes[] = 'country-global';
	}
  
	return $classes;

}

?>
