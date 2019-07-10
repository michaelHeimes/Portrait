<?php
// Industry - Products

if( get_row_layout() == 'recommended_products_list' ):?>

<img class="gray-wave gray-wave-top" src="/wp-content/themes/portrait-displays/assets/svg/gray-wave-top.svg"/>

	<section class="recommended-products gray-bg">
		
		<div class="row columns">

			<div class="text-center">
				<?php
					_s_get_template_part( 'template-parts/global', 'pixel-set' );
				?>
				
				<h2><?php the_sub_field('products_heading');?></h2>
				
			</div>
			
			<div class="recommended-products-wrap row align-center staggerUp">
				<?php if( have_rows('products') ):?>
					<?php while ( have_rows('products') ) : the_row();?>	
					
					<div class="single-recommended-product staggered columns small-12 medium-6 large-4">
						
						<?php if( have_rows('single_product') ):?>
							<?php while ( have_rows('single_product') ) : the_row();?>
							
							<?php 

							$link = get_sub_field('link');
							
							if( $link ): 
								$link_url = $link['url'];
								$link_title = $link['title'];
								$link_target = $link['target'] ? $link['target'] : '_self';
								?>
								
							<a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>">

								<?php 
								$image = get_sub_field('image');
								$size = 'recommended-products';
								if( $image ) {
									echo wp_get_attachment_image( $image, $size );
								}
								?>
								
								<div>
									<h3><?php the_sub_field('title');?></h3>
									<?php the_sub_field('copy');?>
								</div>
								
							</a>
							<?php endif;?>	
						
							<?php endwhile;?>

						<?php endif;?>	
										
					</div>
					<?php endwhile;?>
				<?php endif;?>
			</div>
			
			
		</div>
		
	</section>
<img class="gray-wave gray-wave-top" src="/wp-content/themes/portrait-displays/assets/svg/gray-wave-bottom.svg"/>


<?php endif;?>
