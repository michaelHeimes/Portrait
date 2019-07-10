<?php

// Hide ACF fields on live site
/*
if( false == WP_DEBUG ) {
    add_filter('acf/settings/show_admin', '__return_false');   
}
*/


// Google API KEY, Key is stored inside functions.php
function my_acf_init() {
	acf_update_setting('google_api_key', GOOGLE_API_KEY );
}
add_action('acf/init', 'my_acf_init');


/**
*  Creates ACF Options Page(s)
*/

if( function_exists('acf_add_options_sub_page') ) {

	acf_add_options_page(array(
		'page_title' 	=> 'Theme Settings',
		'menu_title' 	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-settings',
		'capability' 	=> 'edit_posts',
 		'redirect' 	=> true
	));
    
    /*
    acf_add_options_sub_page(array(
		'page_title' 	=> 'Social',
		'menu_title' 	=> 'Social',
        'menu_slug' 	=> 'theme-settings-social',
        'parent' 		=> 'theme-settings',
		'capability' => 'edit_posts',
 		'redirect' 	=> false,
        'autoload' => true,
	));
        
    acf_add_options_sub_page(array(
		'page_title' 	=> 'Footer CTA',
		'menu_title' 	=> 'Footer CTA',
        'menu_slug' 	=> 'theme-settings-footer-cta',
        'parent' 		=> 'theme-settings',
		'capability' => 'edit_posts',
 		'redirect' 	=> false,
        'autoload' => true,
	));

    acf_add_options_sub_page(array(
		'page_title' 	=> 'Books Settings',
		'menu_title' 	=> 'Books Settings',
		'parent'     => 'edit.php?post_type=book',
		'capability' => 'edit_posts'
	));
    */
    

}


function _s_get_acf_image( $attachment_id = false, $size = 'large', $background = false, $attr = array() ) {

	if( ! absint( $attachment_id ) )
		return FALSE;

	if( wp_is_mobile() ) {
 		$size = 'large';
	}

	if( $background ) {
		$background = wp_get_attachment_image_src( $attachment_id, $size );
		return $background[0];
	}

	return wp_get_attachment_image( $attachment_id, $size, '', $attr );

}


function _s_get_acf_image_url( $attachment_id = false, $size = 'large' ) {

	return _s_get_acf_image( $attachment_id, $size = 'large', true );

}


function _s_get_acf_link( $link, $args = [] ) {
    if( ! is_array( $link ) ) {
        $link = [ 'url' => $link ];
    }
    
    $link = wp_parse_args( $link, $args );
    
    if( empty( $link['title'] ) ) {
        return false;
    }
    
    return sprintf( '<a href="%s">%s</a>', $link['url'], $link['title'] );
}


function _s_get_acf_oembed( $iframe ) {


	// use preg_match to find iframe src
	preg_match('/src="(.+?)"/', $iframe, $matches);
	$src = $matches[1];


	// add extra params to iframe src
	$params = array(
		'controls'    => 1,
		'hd'        => 1,
		'autohide'    => 1,
		'rel' => 0
	);

	$new_src = add_query_arg($params, $src);

	$iframe = str_replace($src, $new_src, $iframe);


	// add extra attributes to iframe html
	$attributes = 'frameborder="0"';

	$iframe = str_replace('></iframe>', ' ' . $attributes . '></iframe>', $iframe);

	$iframe = sprintf( '<div class="embed-container">%s</div>', $iframe );


	// echo $iframe
	return $iframe;
}



// Exclude current post from related posts field
function my_relationship_query( $args, $field, $post_id ) {
	
    // exclude current post from being selected
    $args['exclude'] = $post_id;
	
	
	// return
    return $args;
    
}
// add_filter('acf/fields/relationship/query/name=related_posts', 'my_relationship_query', 10, 3);