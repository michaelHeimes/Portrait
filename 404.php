<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package _s
 */

get_header(); ?>


<div id="primary" class="content-area">

	<main id="main" class="site-main" role="main">
	
		<section class="section-default">
			<div class="column row">
	
				<div class="entry-content">
					<?php echo get_field( 'content_404', 'option' ); ?>
				</div><!-- .page-content -->
				
				</div>
		</section>

	</main><!-- #main -->

</div><!-- #primary -->

	

<?php
get_footer();
