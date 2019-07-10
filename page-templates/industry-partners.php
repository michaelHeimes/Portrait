<?php
/**
 * Template Name: Industry Partners
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
   
			<section class="flex-centered-half-width-copy row-bg-<?php echo $row_bg_color ?>">
				
				<div class="row column">
				
					
				  	<?php if( have_rows('page_intro') ):?>
					<section class="industry-partners-intro small-wrap text-center">
						<div>
							<?php
							_s_get_template_part( 'template-parts/global', 'pixel-set' );
							?>
						</div>
				  		<?php while ( have_rows('page_intro') ) : the_row();?>	
				  		
							<?php if ( get_sub_field('heading')):?>
							<h2><?php the_sub_field('heading');?></h2>
							<?php endif;
					
							if ( get_sub_field('copy')):?>
							<p><?php the_sub_field('copy');?></p>
							<?php endif;?>
				  	
				  		<?php endwhile;?>
					</section>
				  	<?php endif;?>
				  	
				  	
				  	<?php if( have_rows('partner_cubes') ):?>
				  	<section id="partner-cubes">
					  	<div class="row">
				  		<?php while ( have_rows('partner_cubes') ) : the_row();?>	
				  
	
					  	<?php if( have_rows('single_partner_cube') ):?>
					  		<?php while ( have_rows('single_partner_cube') ) : the_row();?>					  
					  
					  		<div class="single-partner-cube columns small-12 medium-6 large-3">
						  		
						  		<div class="sp-logo-wrap">
							  		
									<span>
							  		<?php 
									$image = get_sub_field('color_logo');
									$size = 'full'; // (thumbnail, medium, large, full or custom size)
									if( $image ) {
										echo wp_get_attachment_image( $image, $size );
									}
									?>
									</span>
									
							  		<?php 
									$image = get_sub_field('gray_logo');
									$size = 'full'; // (thumbnail, medium, large, full or custom size)
									if( $image ) {
										echo wp_get_attachment_image( $image, $size );
									}
									?>
	
						  		</div>
						  		
						  		<div class="sp-copy-wrap">
									<button class="no-style-button sp-copy-close" aria-label="Close">
										<span class="sp-close-1"></span>
										<span class="sp-close-2"></span>
									</button>
							  		<p><?php the_sub_field('copy');?></p>
						  		</div>
						  		
					  		</div>
					  
					  
					  		<?php endwhile;?>
					  	<?php endif;?>	


				  
				  		<?php endwhile;?>
					  	</div>
					</section>
				  	<?php endif;?>						
		
				</div>
				
			</section>
		
		


        </main>
    
    </div>

<?php
get_footer();