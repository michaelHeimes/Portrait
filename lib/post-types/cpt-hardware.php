<?php
 
/**
 * Create new CPT - Hardware
 */
 
class CPT_Hardware extends CPT_Core {

    const POST_TYPE = 'hardware';
	const TEXTDOMAIN = '_s';
	
	/**
     * Register Custom Post Types. See documentation in CPT_Core, and in wp-includes/post.php
     */
    public function __construct() {

 		
		// Register this cpt
        // First parameter should be an array with Singular, Plural, and Registered name
        parent::__construct(
        
        	array(
				__( 'Hardware', self::TEXTDOMAIN ), // Singular
				__( 'Hardware', self::TEXTDOMAIN ), // Plural
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
                'menu_icon' => 'dashicons-welcome-view-site'
			)

        );
		        
     }
 
}

new CPT_Hardware();
