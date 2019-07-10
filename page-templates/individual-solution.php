<?php
/**
 * Template Name: Individual Solution
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
			
			<?php 
			$images = get_field('solution_partner_logos');
			$size = 'full'; // (thumbnail, medium, large, full or custom size)
			
			if( $images ): ?>
			    <ul class="partner-logos row align-middle">
			        <?php foreach( $images as $image ): ?>
			            <li class="columns">
			            	<?php echo wp_get_attachment_image( $image['ID'], $size ); ?>
			            </li>
			        <?php endforeach; ?>
			    </ul>
			<?php endif; ?>
		

			<?php if( have_rows('individual_solution_page_intro') ):?>
			<section class="individual-solution-intro gray-bg left-blue-right-gray-wedges">
				<?php while ( have_rows('individual_solution_page_intro') ) : the_row();?>
					<div class="small-wrap text-center">
						
						<div class="text-center">
							<?php
								_s_get_template_part( 'template-parts/global', 'pixel-set' );
							?>
						</div>
						
						<?php if ( get_sub_field('heading')):?>
						<h2><?php the_sub_field('heading');?></h2>
						<?php endif;
				
						if ( get_sub_field('copy')):?>
						<p><?php the_sub_field('copy');?></p>
						<?php endif;?>
					</div>
					
					<?php
					$show_list = get_sub_field('add_bulleted_list');
					if( $show_list && in_array('yes', $show_list) ): ?>
					<?php if( have_rows('bulletted_list') ):?>
					
						<div>
				  			<ul class="row fancy-bullets fancy-arrow-bullets text-left">
				  			<?php while ( have_rows('bulletted_list') ) : the_row();?>	
				  				<li class="columns"><?php the_sub_field('single_row');?></li>
				  			<?php endwhile;?>
				  			</ul>
						</div>
			  			
			  		<?php endif;?>
			  		<?php endif;?>

				<?php endwhile;?>
			</section>
			<?php endif;?>

			<?php if( have_rows('solution_why_us') ):?>
				<?php while ( have_rows('solution_why_us') ) : the_row();?>				
			
			<section id="solution-why-us">
				<?php
				$img_id = get_sub_field('background_image');
				$img_size = "solution-why-us-bg";
				$imgarr = wp_get_attachment_image_src( $img_id, $img_size );?>
				<div class="solution-why-us-title-wrap" style="background-image: url(<?php echo $imgarr[0]; ?> );background-repeat:no-repeat;background-size: cover;background-position: center center;">
					<div class="pwutw-mask"></div>
					<div class="pwutw-wedge"></div>
					<div class="text-center">
						<?php
							_s_get_template_part( 'template-parts/global', 'pixel-set' );
						?>
					</div>
					<h2 class="row columns text-center"><?php the_sub_field('title');?></h2>
				</div>
				
				<div class="pwu-card-wrap row align-center">
					
					<div class="pwu-card columns">
						<div class="pwu-spacer"><img src="/wp-content/themes/portrait-displays/assets/svg/notch.svg"/></div>
						<?php if( have_rows('left_card') ):?>
							<?php while ( have_rows('left_card') ) : the_row();?>
														
							<div class="pwu-card-title-icon-wrap row align-middle">
								<h3 class="columns"><?php the_sub_field('label');?></h3>
								<img class="columns" src="<?php the_sub_field('icon');?>"/>
							</div>
							
							<?php if( have_rows('bullets') ):?>
								<ul class="row fancy-bullets fancy-arrow-bullets text-left">
								<?php while ( have_rows('bullets') ) : the_row();?>
				  					<li><?php the_sub_field('single_row');?></li>
								<?php endwhile;?>
								</ul>
							<?php endif;?>											
							<?php endwhile;?>
						<?php endif;?>	
					</div>	
					
					<div class="pwu-card columns small-12 medium-6">
						<?php if( have_rows('right_card') ):?>
							<?php while ( have_rows('right_card') ) : the_row();?>
							
							<div class="pwu-card-title-icon-wrap row align-middle">
								<h3 class="columns"><?php the_sub_field('label');?></h3>
								<img class="columns" src="<?php the_sub_field('icon');?>"/>
							</div>
							
							<?php if( have_rows('bullets') ):?>
								<ul class="row fancy-bullets fancy-arrow-bullets text-left">
								<?php while ( have_rows('bullets') ) : the_row();?>
				  					<li><?php the_sub_field('single_row');?></li>
								<?php endwhile;?>
								</ul>
							<?php endif;?>											
							<?php endwhile;?>
						<?php endif;?>				
											
					</div>
					
				</div>

			</section>
				<?php endwhile;?>
			<?php endif;?>
			



			<?php if( have_rows('ingredient_brands') ):?>
				<section id="ingredient-brands">
					<div class="text-center medium-wrap">
						
						<div id="cv-pixel-set" class="text-center">
							<?php
								_s_get_template_part( 'template-parts/global', 'pixel-set' );
							?>
						</div>
						
						<?php while ( have_rows('ingredient_brands') ) : the_row();?>
							<h3><?php the_sub_field('pre-heading');?></h3>
							<h2><?php the_sub_field('heading');?></h2>

						
							<?php $number_of_values = count(get_sub_field('ingredients'));?>							
							
							<!-- Slider Loop -->
							
							<div id="value-slider-wrap">
								
								<div class="show-for-slider hidden">
										
									<div class="value-slider">
											
											
									<?php if( have_rows('ingredients') ):?>
										<?php while ( have_rows('ingredients') ) : the_row();?>						
									
											<div class="value-slide">	
												
												<div class="slide-content-wrap text-center">
												
													<button class="hide-value-slider no-style-button" data-close aria-label="Close"><img class="gray-wave gray-wave-top" src="/wp-content/themes/portrait-displays/assets/svg/value-modal-close.png"/></button>
								
													<button class="button modal-nav value-before no-style-button slick-arrow desktop" data-open="value-<?php echo get_row_index() - 1;?>" aria-label="Previous Step" type="button">
														<span class="vs-arrow-wrap">
															<img class="v-gray-arrow va-previous" src="/wp-content/themes/portrait-displays/assets/svg/blue-value-modal-left-arrow.svg"/>
															<img class="v-gray-arrow va-previous top-arrow" src="/wp-content/themes/portrait-displays/assets/svg/gray-value-modal-left-arrow.svg"/>	
														</span>
													</button>														
		
													<?php if( have_rows('single_ingredient') ):
														while ( have_rows('single_ingredient') ) : the_row();?>						
										
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
								<?php if( have_rows('ingredients') ):?>
									<nav id="values-wrap" class="action hide-for-slider row small-up-2 smedium-up-4 medium-up-4 large-up-5">
																				
									<?php while ( have_rows('ingredients') ) : the_row();?>
										
									<?php $data_slide_number = get_row_index() - 1;?>

										<button data-slide="<?php echo $data_slide_number ?>" class="single-value columns no-style-button text-left">
		
											<?php if( have_rows('single_ingredient') ):
												while ( have_rows('single_ingredient') ) : the_row();?>
		
													<?php $image = get_sub_field('icon');
													if( !empty($image) ): ?>
													<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
													<?php endif; ?>
													<p><?php the_sub_field('text');?></p>	
		
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
			<?php endif;?>			
			
			
			
			

			<?php if( have_rows('how_it_works') ):?>
				<img class="gray-wave gray-wave-top" src="/wp-content/themes/portrait-displays/assets/svg/gray-wave-top.svg"/>
				<section id="how-it-works">
					<div class="gray-bg">
						
						<div class="text-center">
							<?php
								_s_get_template_part( 'template-parts/global', 'pixel-set' );
							?>
						</div>
						
						<?php while ( have_rows('how_it_works') ) : the_row();?>
						
							<h2 class="text-center medium-wrap"><?php the_sub_field('heading');?></h2>
							
							<?php if( get_sub_field('format') == 'steps' ): ?>							
									
								<?php if( have_rows('steps') ):?>
									<div id="steps" class="row text-center medium-wrap small-up-2 medium-up-3 large-up-3">
									<?php while ( have_rows('steps') ) : the_row();
								
										if( have_rows('single_step') ):
											while ( have_rows('single_step') ) : the_row();?>
											
											<div class="single-step text-left columns">
												<?php 
												$image = get_sub_field('icon');
												if( !empty($image) ): ?>
												<img class="fadeInLeft" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
												<?php endif; ?>
												<div class="fadeInUp">
													<h3><?php the_sub_field('label');?></h3>	
													<p><?php the_sub_field('text');?></p>	
												</div>							
											</div>
										
											<?php endwhile;?>
										<?php endif;?>
								
									<?php endwhile;?>
									</div>
								<?php endif;?>
		
							<?php endif;?>
							
							
							<?php if( get_sub_field('format') == 'content' ): ?>	
								<?php if( have_rows('content_rows') ):?>
								<div id="how-it-works-content-wrap">
									<?php while ( have_rows('content_rows') ) : the_row();?>
										<?php if( have_rows('single_content_row') ):
												while ( have_rows('single_content_row') ) : the_row();
												
													$row_bg_color = get_sub_field('row_background_color'); 			    
													$image_style = get_sub_field('image_style');
													$image_alignment = get_sub_field('image_alignment');
													$content_type = get_sub_field('content_type');
													$image = get_sub_field('image');
													$size = 'flex-page-standard';?>
							
												<section class="image-content-row row-bg-<?php echo $row_bg_color ?> img-style-<?php echo $image_style ?> row-img-align-<?php echo $image_alignment ?> gray-bg">
													
													<div class="row">
																			
														<?php if( $image ):?>
														<div class="ic-row-img-wrap ic-row-half columns small-12 medium-12 large-6">
											<!--
															<div class="ic-row-img-blue-bg"></div>
															<div class="ic-row-img-gray-bg"></div>	
											-->			
															
															<span class="ic-row-img">
																<span class="color-bg-block"></span>
																<?php echo wp_get_attachment_image( $image, $size );?>
															</span>
																
														</div>
														<?php endif;
															
															
														if( $content_type == 'copy'):
														if( have_rows('copy_woptional_link') ):
															while ( have_rows('copy_woptional_link') ) : the_row();
															
															$link = get_sub_field('link');?>
															<div class="ic-copy-wrap ic-row-half columns small-12 medium-12 large-6">
																
																<?php if ( get_sub_field('heading')):?>
																<h2><?php the_sub_field('heading');?></h2>
																<?php endif;
												
																if ( get_sub_field('copy')):?>
																<p><?php the_sub_field('copy');?></p>
																<?php endif;
																
																if( $link ): 
																$link_url = $link['url'];
																$link_title = $link['title'];
																$link_target = $link['target'] ? $link['target'] : '_self';?>
																<a class="button blue-button" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><span class="button-text"><?php echo esc_html($link_title); ?></span><img src="/wp-content/themes/portrait-displays/assets/svg/white-link-arrow.svg"/></a>
																<?php endif;?>
																
															</div>
															<?php endwhile;
																
														endif;
														endif;
														
														
														if( $content_type == 'list'):
														if( have_rows('bulleted_list_woptional_link') ):
															while ( have_rows('bulleted_list_woptional_link') ) : the_row();
															
															$link = get_sub_field('link');?>
															<div class="ic-copy-wrap ic-row-half columns small-12 medium-12 large-6">
																
																<?php if ( get_sub_field('heading')):?>
																<h2><?php the_sub_field('heading');?></h2>
																<?php endif;
												
																
																if( have_rows('list') ):?>
																	<ul class="ic-list fancy-bullets">
																	<?php while ( have_rows('list') ) : the_row();?>	
																		<li><span><?php the_sub_field('single_row');?></span></li>
																	<?php endwhile;?>
																	</ul>
																<?php endif;
												
												
																if( $link ): 
																$link_url = $link['url'];
																$link_title = $link['title'];
																$link_target = $link['target'] ? $link['target'] : '_self';?>
																<a class="button underline-button" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?><div class="underline-button-underline"></div></a>
																<?php endif;?>
																
															</div>
															<?php endwhile;
																
														endif;
														endif; ?>
														
													</div>	
														
												</section>
												<?php endwhile;?>
											<?php endif;?>
									<?php endwhile;?>
								</div>
								<?php endif;?>
							<?php endif;?>							
							

					<?php if( have_rows('button_group') ):
						while ( have_rows('button_group') ) : the_row();?>

							
							<div id="how-it-works-button-wrap" class="text-center">
								<?php 
								$link = get_sub_field('info_button');
								if( $link ): 
									$link_url = $link['url'];
									$link_title = $link['title'];
									$link_target = $link['target'] ? $link['target'] : '_self';
									?>
									<a class="button blue-button" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><span class="button-text"><?php echo esc_html($link_title); ?></span><img src="/wp-content/themes/portrait-displays/assets/svg/white-link-arrow.svg"/></a>
								<?php endif; ?>
								
								<?php 
								$link = get_sub_field('pdf_download_button');
								if( $link ): 
									$link_url = $link['url'];
									$link_title = $link['title'];
									$link_target = $link['target'] ? $link['target'] : '_self';
									?>
									<a class="button clear-button" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><span class="button-text"><?php echo esc_html($link_title); ?></span><img src="/wp-content/themes/portrait-displays/assets/svg/blue-link-arrow.svg"/></a>
								<?php endif; ?>
							</div>	
							
						<?php endwhile;?>
					<?php endif;?>						
			
			
				<?php endwhile;?>
					</div>
				<img class="gray-wave gray-wave-bottom" src="/wp-content/themes/portrait-displays/assets/svg/gray-wave-bottom.svg"/>
			<?php endif;?>
			
			
			<?php if( have_rows('contact_form') ):
				while ( have_rows('contact_form') ) : the_row();?>
				
				<section id="solution-contact-form" class="row columns">
					
					<div id="top-wrap">	
					
						<div class="text-left">
							<?php
								_s_get_template_part( 'template-parts/global', 'pixel-set' );
							?>
						</div>
												
						<h2 class="text-left medium-wrap"><?php the_sub_field('heading');?></h2>
						<h4><?php the_sub_field('copy');?></h4>
					</div>
						
					<?php the_sub_field('active_campaign_form');?>
					
				</section>

				<?php endwhile;?>
			<?php endif;?>			


        </main>
    
    </div>

<?php
get_footer();