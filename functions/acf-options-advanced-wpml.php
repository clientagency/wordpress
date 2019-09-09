<?php 

if( function_exists('acf_add_options_page') ) {
	acf_add_options_page();
	acf_add_options_sub_page('General');
	acf_add_options_sub_page('Texts');
}

if( function_exists('acf_set_options_page_title') )
{
    acf_set_options_page_title( __('Qentinel Settings') );
}

//USE ACF OPTIONS GLOBALLY FROM DEFAULT LANGUAGE
add_filter( 'acf/validate_post_id', function( $post_id, $original_post_id ){

  if( strpos($post_id, 'options_') === 0 ){ //postfix detection
    $post_id = 'options';
  }

  return $post_id; //FILTER! MUST RETURN!
}, 10, 2 );



?>
