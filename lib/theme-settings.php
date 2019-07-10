<?php

/****************************************
	Enqueue theme stylesheet
	*****************************************/

function _s_enqueue_stylesheet() {

	$version = defined( 'THEME_VERSION' ) && THEME_VERSION ? THEME_VERSION : '1.0';
	$handle  = defined( 'THEME_NAME' ) && THEME_NAME ? sanitize_title_with_dashes( THEME_NAME ) : 'theme';

	//$stylesheet = SCRIPT_DEBUG === true ? 'style.css' : 'style.min.css';
	$stylesheet = 'style.css';

	wp_enqueue_style( $handle, trailingslashit( THEME_URL ) . $stylesheet, false, $version );
 }

add_action( 'wp_enqueue_scripts', '_s_enqueue_stylesheet', 15 );


/****************************************
	Image Sizes
	*****************************************/
// Background Images
add_image_size( 'hero', 1350, 1009 );
// add_image_size( 'footer-cta-bg', 1440, 522 );
add_image_size( 'footer-cta-bg', 1770, 500 );
add_image_size( 'solution-why-us-bg', 1770, 541 );
add_image_size( 'home-solution-link', 487, 288 );

// Retina Images
add_image_size( 'hero-display', 429, 9999 );
add_image_size( 'why-us-circle', 169, 169, true );
add_image_size( 'why-us-circle@2x', 338, 338, true );
add_image_size( 'multi-purpose-row', 554, 348 );
add_image_size( 'company-vision', 564, 367 );
add_image_size( 'company-collage', 500, 9999 );
add_image_size( 'leadership-card', 279, 187 );
add_image_size( 'flex-page-standard', 554, 9999 );
add_image_size( 'product-why-us-panel', 564, 367, true );
add_image_size( 'recommended-products', 150, 150);



// Add Column Class to Footer Navigation li
function add_additional_class_on_li($classes, $item, $args) {
    if($args->add_li_class) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);


				function create_slug($string){
				   $slug=preg_replace('/[^A-Za-z0-9-]+/', '-', $string);
				   return $slug;
				}
				
// Hide ACF Fields
/*
if( false == WP_DEBUG ) {
    add_filter('acf/settings/show_admin', '__return_false');   
} 
*/


/**
 * Register Multiple Taxonomies
 *
 * @author Bill Erickson
 * @link http://www.billerickson.net/code/register-multiple-taxonomies/
 */
function be_register_taxonomies() {
	$taxonomies = array(
		array(
			'slug'         => 'software-category',
			'single_name'  => 'Software Category',
			'plural_name'  => 'Software Categories',
			'post_type'    => 'software',
		),
		array(
			'slug'         => 'hardware-category',
			'single_name'  => 'Hardware Category',
			'plural_name'  => 'Hardware Categories',
			'post_type'    => 'hardware',
		),
	);
	foreach( $taxonomies as $taxonomy ) {
		$labels = array(
			'name' => $taxonomy['plural_name'],
			'singular_name' => $taxonomy['single_name'],
			'search_items' =>  'Search ' . $taxonomy['plural_name'],
			'all_items' => 'All ' . $taxonomy['plural_name'],
			'parent_item' => 'Parent ' . $taxonomy['single_name'],
			'parent_item_colon' => 'Parent ' . $taxonomy['single_name'] . ':',
			'edit_item' => 'Edit ' . $taxonomy['single_name'],
			'update_item' => 'Update ' . $taxonomy['single_name'],
			'add_new_item' => 'Add New ' . $taxonomy['single_name'],
			'new_item_name' => 'New ' . $taxonomy['single_name'] . ' Name',
			'menu_name' => $taxonomy['plural_name']
		);
		
		$rewrite = isset( $taxonomy['rewrite'] ) ? $taxonomy['rewrite'] : array( 'slug' => $taxonomy['slug'] );
		$hierarchical = isset( $taxonomy['hierarchical'] ) ? $taxonomy['hierarchical'] : true;
	
		register_taxonomy( $taxonomy['slug'], $taxonomy['post_type'], array(
			'hierarchical' => $hierarchical,
			'labels' => $labels,
			'show_ui' => true,
			'query_var' => true,
			'rewrite' => $rewrite,
		));
	}
	
}
add_action( 'init', 'be_register_taxonomies' );