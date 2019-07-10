<?php
/**
 * Template Name: Individual Industry
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package _s
 */

get_header(); ?>

<?php
_s_get_template_part( 'template-parts/global', 'hero' );
?>

    <div id="primary" class="content-area">
	    
	    <div id="top-wedge"></div>
    
        <main id="main" class="site-main" role="main">
			<?php if( have_rows('industry_modules') ):
			    while ( have_rows('industry_modules') ) : the_row();
			    
				get_template_part( 'template-parts/industry-layouts/image-content-row' );
				
				get_template_part( 'template-parts/industry-layouts/heading' );

				get_template_part( 'template-parts/industry-layouts/products' );
				
				get_template_part( 'template-parts/industry-layouts/partners' );

				?>
			
			    <?php endwhile;
			endif;?>        
        </main>
    
    </div>

<?php
get_footer();