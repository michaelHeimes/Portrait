<?php

// Register scripts to load later as needed
add_action( 'wp_enqueue_scripts', '_s_register_scripts' );
function _s_register_scripts() {
    
    wp_register_script( 'modernizr', trailingslashit( THEME_JS ) . 'modernizr-custom.js', false, '', false );
    
	// Foundation
	wp_register_script( 'foundation', trailingslashit( THEME_JS ) . 'foundation.min.js', array('jquery'), '', true );
                
	// Project
 	wp_register_script( 'project' , trailingslashit( THEME_JS ) . 'project.js',
			array(
					'jquery',
 					'foundation',
 					),
				NULL, TRUE );
                
    
    
    // Localize responsive menus script.
    wp_localize_script( 'project', 'genesis_responsive_menu', array(
        'mainMenu'         => __( 'Menu', '_s' ),
        'subMenu'          => __( 'Menu', '_s' ),
        'menuIconClass'    => null,
        'subMenuIconClass' => null,
        'menuClasses'      => array(
            'combine' => array(
                '.nav-primary',
            ),
            //'others'  => array( '.nav-secondary' ),
        ),
    ) );
    
    
}


// Load Scripts
add_action( 'wp_enqueue_scripts', '_s_load_scripts' );
function _s_load_scripts() {

        wp_enqueue_script( 'modernizr' );
        
        wp_enqueue_script( 'project' );
}