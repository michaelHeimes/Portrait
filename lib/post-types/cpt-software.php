<?php
 
/**
 * Create new CPT - Software
 */
 
class CPT_Software extends CPT_Core {

    const POST_TYPE = 'software';
	const TEXTDOMAIN = '_s';
	
	/**
     * Register Custom Post Types. See documentation in CPT_Core, and in wp-includes/post.php
     */
    public function __construct() {

 		
		// Register this cpt
        // First parameter should be an array with Singular, Plural, and Registered name
        parent::__construct(
        
        	array(
				__( 'Software', self::TEXTDOMAIN ), // Singular
				__( 'Software', self::TEXTDOMAIN ), // Plural
				self::POST_TYPE // Registered name/slug
			),
			array( 
				'public'              => false,
				'publicly_queryable'  => false,
				'show_ui'             => true,
				'query_var'           => true,
				'capability_type'     => 'post',
				'has_archive'         => false,
				'hierarchical'        => false,
				'show_ui'             => true,
				'show_in_menu'        => true,
				'menu_position'       => 6,
				'show_in_nav_menus'   => false,
				'exclude_from_search' => true,
				'supports' => array( 'title', 'editor', 'revisions' ),
                'menu_icon' => 'dashicons-welcome-widgets-menus'
			)

        );
		        
     }
 
}

new CPT_Software();
