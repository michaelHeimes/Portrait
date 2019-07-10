<?php
/**
 * Template Name: Leadership
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

<div class="column row">
    <div id="primary" class="content-area">
    
        <main id="main" class="site-main row small-up-1 medium-up-3 large-up-4" role="main">

		<?php
		$args = array( 
		'post_type' => 'people',
		'posts_per_page' => -1 ,
		'order' => 'DESC'
		
		);
		
		$loop = new WP_Query( $args );
		
		while ( $loop->have_posts() ) : $loop->the_post();?>
		  
		  	<div class="single-leadership-card column">
		  		<div class="text-center lc-img-wrap">
					<?php 
					$leadership_image = get_field('image');
					$leadership_size = 'leadership-card';
					if( $leadership_image ) {
						echo wp_get_attachment_image( $leadership_image, $leadership_size );
					}
					?>
		  		</div>
				
				<div class="l-card-top">
					<div>
						<h3><?php the_title();?></h3>
						<h5><?php the_field('title');?></h5>
					</div>
					<?php 
					$link = get_field('linkedin_link');
					if( $link ): 
						?>
						<a href="<?php echo $link ?>" target="_blank>">
							<img class="leader-linkedin" src="/wp-content/themes/portrait-displays/assets/svg/LinkedIn.svg"/>
						</a>
					<?php endif; ?>
				</div>
				
				<div class="l-card-bottom">
					<p><?php the_field('copy');?></p>
				</div>
				
			</div>

		  
		<?php endwhile; wp_reset_query();?>        
        
        </main>
    
    </div>

</div>

<?php
get_footer();