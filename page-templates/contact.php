<?php
/**
 * Template Name: Contact
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

<div id="primary" class="content-area">

    <main id="main" class="site-main" role="main">
	    

	    

				<div class="row columns small-12 medium-12 large-5">
					<a id="back-to-previous-link" href="javascript:history.back()"><img src="/wp-content/themes/portrait-displays/assets/svg/back-arrow.svg"/><span id="back-to-previous-text">Back to website</span></a>
					
					<h1 class="text-center"><?php the_field('page_top_heading');?></h1>
					<h4 class="text-center"><?php the_field('page_top_subtext');?></h4>
					
					<?php
					_s_get_template_part( 'template-parts/global', 'contact-form' );
					?>
				</div>
				
				<div class="google-map colums large-7">
					<?php echo do_shortcode('[wpgmza id="1"]');?>
				</div>
   
    
    </main>

</div>


<?php
get_footer();