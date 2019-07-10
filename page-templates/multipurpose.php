<?php
/**
 * Template Name: Multipurpose
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
    
        <main id="main" class="site-main" role="main">
			<?php if( have_rows('flexible_content_modules') ):
			    while ( have_rows('flexible_content_modules') ) : the_row();
			    
				get_template_part( 'template-parts/multipurpose-layouts/left-aligned-23-copy' );

				get_template_part( 'template-parts/multipurpose-layouts/image-content-row' );
				
				get_template_part( 'template-parts/multipurpose-layouts/centered-half-width-copy' );

				get_template_part( 'template-parts/multipurpose-layouts/full-width-copy' );

				?>
			
			    <?php endwhile;
			endif;?>        
        </main>
    
    </div>

<?php
get_footer();