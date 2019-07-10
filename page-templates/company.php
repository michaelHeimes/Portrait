<?php
/**
 * Template Name: Company
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
		<div class="columns row">
       
			<section id="about-our-mission" class="medium-wrap row columns align-middle fadeInUp">
				
				<div id="about-our-mission-title-wrap" class="column text-center">
					<span id="about-title-line-blue"><img id="header-right-fins" src="/wp-content/themes/portrait-displays/assets/svg/sky-blue-circle.svg"/></span>
					<span id="about-title-line-gray"><img id="header-right-fins" src="/wp-content/themes/portrait-displays/assets/svg/gray-circle.svg"/></span>
					<h2><?php the_field('our_mission_circle_heading');?></h2>
				</div>
				
				<div id="about-our-mission-copy-wrap">
					<h3><?php the_field('our_mission_copy');?></h3>					
				</div>
				
			</section>
		
		
			<section id="our-vision" class="medium-wrap">
				<div class="row align-justify">
					<div class="text-image-col text-image-txt column small-12 medium-12 large-6">
						<?php
						_s_get_template_part( 'template-parts/global', 'pixel-set' );
						?>
						<h2><?php the_field('our_vision_heading');?></h2>
						<p><?php the_field('our_vision_copy');?></p>
					</div>
					
					<?php
					_s_get_template_part( 'template-parts/global', 'pixel-grid' );
					?>
					
					<div class="has-corner-bg text-image-col text-image-img column small-12 medium-12 large-6">
						<div>
							<span class="image-corner-bg sky-blue-corner-bg"></span>
							<span class="image-corner-bg dark-blue-corner-bg"></span>
							<?php 
							$image = get_field('our_vision_image');
							$size = 'company-vision';
							if( $image ) {
								echo wp_get_attachment_image( $image, $size );
							}
							?>		
						</div>			
					</div>
				</div>
				
			</section>
		</div>	
		
					
			<?php if( have_rows('core_values') ):?>
<!-- 				<img class="gray-wave gray-wave-top" src="/wp-content/themes/portrait-displays/assets/svg/gray-wave-top.svg"/> -->
				<section id="core-values" class="gray-bg">
					<div class="gray-bg text-center medium-wrap">
						
						<div id="cv-pixel-set" class="text-center">
							<?php
								_s_get_template_part( 'template-parts/global', 'pixel-set' );
							?>
						</div>
						
						<?php while ( have_rows('core_values') ) : the_row();?>
						
							<h2><?php the_sub_field('heading');?></h2>

						
							<?php $number_of_values = count(get_sub_field('values'));?>							
							
							<!-- Slider Loop -->
							
							<div id="value-slider-wrap">
								
								<div class="show-for-slider hidden">
																					
								
												
												
										
									<div class="value-slider gray-bg">
											
											
									<?php if( have_rows('values') ):?>
										<?php while ( have_rows('values') ) : the_row();?>						
									
											<div class="value-slide">	
												
												<div class="slide-content-wrap text-center">
												
													<button class="hide-value-slider no-style-button" data-close aria-label="Close"><img class="gray-wave gray-wave-top" src="/wp-content/themes/portrait-displays/assets/svg/value-modal-close.png"/></button>
								
													<button class="button modal-nav value-before no-style-button slick-arrow desktop" data-open="value-<?php echo get_row_index() - 1;?>" aria-label="Previous Step" type="button">
														<span class="vs-arrow-wrap">
															<img class="v-gray-arrow va-previous" src="/wp-content/themes/portrait-displays/assets/svg/blue-value-modal-left-arrow.svg"/>
															<img class="v-gray-arrow va-previous top-arrow" src="/wp-content/themes/portrait-displays/assets/svg/gray-value-modal-left-arrow.svg"/>	
														</span>
													</button>														
		
													<?php if( have_rows('single_value') ):
														while ( have_rows('single_value') ) : the_row();?>						
										
														<div class="smallest-wrap text-center">
															
															<?php $image = get_sub_field('icon');
															if( !empty($image) ): ?>
															<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
															<?php endif; ?>
														
														
															<h2><?php the_sub_field('label');?></h2>	
															
															<div class="mobile-value-arrow-wrap">
																<button class="button modal-nav value-before no-style-button slick-arrow" data-open="value-<?php echo get_row_index() - 1;?>" aria-label="Previous Step" type="button"><span class="vm-arrow-wrap"><img class="v-gray-arrow va-previous" src="/wp-content/themes/portrait-displays/assets/svg/gray-value-modal-left-arrow.svg"/></span></button>
																
																<button class="button modal-nav value-after no-style-button slick-arrow" data-open="value-<?php echo get_row_index() + 1;?>" aria-label="Next Step" type="button"><span class="vm-arrow-wrap"><img class="v-blue-arrow va-next" src="/wp-content/themes/portrait-displays/assets/svg/blue-value-modal-right-arrow.svg"/></span></button>
															</div>
																							
															<p><?php the_sub_field('modal_copy');?></p>

														
												
														</div>
				
														<?php endwhile;?>
													<?php endif;?>
																
													<button class="button modal-nav value-after no-style-button slick-arrow desktop" data-open="value-<?php echo get_row_index() + 1;?>" aria-label="Next Step" type="button">
														<span class="vs-arrow-wrap">
															<img class="v-blue-arrow va-next" src="/wp-content/themes/portrait-displays/assets/svg/blue-value-modal-right-arrow.svg"/>
															<img class="v-blue-arrow va-next top-arrow" src="/wp-content/themes/portrait-displays/assets/svg/gray-value-modal-right-arrow.svg"/>
														</span>
														
													</button>
													
												</div>
												
											</div>						
						
										<?php endwhile;?>
									<?php endif;?>	
									
														
									</div>
									
									
										

								</div>
								
								<!-- Slider Button Nav -->
								<?php if( have_rows('values') ):?>
									<nav id="values-wrap" class="action hide-for-slider row small-up-2 smedium-up-4 medium-up-4 large-up-5">
																				
									<?php while ( have_rows('values') ) : the_row();?>
										
									<?php $data_slide_number = get_row_index() - 1;?>

										<button data-slide="<?php echo $data_slide_number ?>" class="single-value columns no-style-button">
		
											<?php if( have_rows('single_value') ):
												while ( have_rows('single_value') ) : the_row();?>
		
													<?php $image = get_sub_field('icon');
													if( !empty($image) ): ?>
													<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
													<?php endif; ?>
													<h3><?php the_sub_field('label');?></h3>	
		
												<?php endwhile;?>
											<?php endif;?>
											
										</button>
								
									<?php endwhile;?>
									</nav>
								<?php endif;?>
								
								
								
							</div>								
				
						

			
			
				<?php endwhile;?>
					</div>
				</section>
				<img class="gray-wave gray-wave-bottom" src="/wp-content/themes/portrait-displays/assets/svg/gray-wave-bottom.svg"/>
			<?php endif;?>
			
			
					
			
			
		<div class="columns row">
		
			<section id="careers-button" class="text-center">
				<?php 
				$link = get_field('careers_link');
				if( $link ): 
					$link_url = $link['url'];
					$link_title = $link['title'];
					$link_target = $link['target'] ? $link['target'] : '_self';
					?>
					<a class="button blue-button" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
				<?php endif; ?>
			</section>
			
<!--
			<div class="pixel-set collage-pixel-set text-center">
				<span class="pixel-set-1"></span><span class="pixel-set-2"></span>
			</div>	
-->	

			<section id="company-culture" class="row align-middle">
		
			<?php if( have_rows('company_culture_images') ):?>
				<div id="culture-collage" class="small-12 medium-12 large-7">
				<?php while ( have_rows('company_culture_images') ) : the_row();?>	
				
					<div class="collage-element"  id="top-pixel-grid">
						<?php
							_s_get_template_part( 'template-parts/global', 'pixel-grid' );
						?>
					</div>
				
					<div class="collage-element"  id="bottom-pixel-grid">
						<?php
							_s_get_template_part( 'template-parts/global', 'pixel-grid' );
						?>
					</div>	
				
					<div id="cc-collage-img-3" class="collage-element" >
						<?php 
						$image = get_sub_field('image_3');
						$size = 'company-collage';
						if( $image ) {
							echo wp_get_attachment_image( $image, $size );
						}
						?>
					</div>
					
					<div class="collage-element" id="gray-square"></div>
														
					<div id="cc-collage-img-2" class="collage-element" >
						<?php 
						$image = get_sub_field('image_2');
						$size = 'company-collage';
						if( $image ) {
							echo wp_get_attachment_image( $image, $size );
						}
						?>
					</div>
					
					<div class="collage-element blue-pipe" id="bottom-blue-pipe"></div>
					
					<div class="collage-element blue-pipe" id="top-blue-pipe"></div>
					
					<div class="collage-element" id="blue-square"></div>
					
					<div class="collage-element" id="white-square"></div>
					
					<div id="cc-collage-img-1" class="collage-element" >
						<?php 
						$image = get_sub_field('image_1');
						$size = 'company-collage';
						if( $image ) {
							echo wp_get_attachment_image( $image, $size );
						}
						?>
					</div>	
					

				<?php endwhile;?>
				</div>
			<?php endif;?>
			
			<?php if( have_rows('company_culture_list') ):?>
				<?php while ( have_rows('company_culture_list') ) : the_row();?>	
					<div id="company-culture-list" class="columns small-12 medium-12 large-5">
						
						<h2><?php the_sub_field('heading');?></h2>
						
						<?php if( have_rows('list') ):?>
							<ul class="fancy-bullets">
							<?php while ( have_rows('list') ) : the_row();?>	
								<li><?php the_sub_field('list_row');?></li>
							<?php endwhile;?>
							</ul>
						<?php endif;?>
					
					</div>
				
				<?php endwhile;?>
			<?php endif;?>
			</section>
        
        
		</div>
       
    </main>
    
</div>


<?php
get_footer();