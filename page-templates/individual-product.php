<?php
/**
 * Template Name: Individual Product
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
			$show_why_us = get_field('show_why_us_section');
			if( $show_why_us && in_array('yes', $show_why_us) ): ?>
			<section id="product-why-us" class="gray-bg left-blue-right-gray-wedges">
				
				<div class="pwu-inner-wrap columns row">
					<div class="text-left">
						<?php
							_s_get_template_part( 'template-parts/global', 'pixel-set' );
						?>
					</div>
					<h2>Why Us?</h2>
						<?php if( have_rows('why_us_panels') ):?>
						<div id="product-why-us-panel-wrap">
							
							
							<div id="product-why-us-panel-slide">

							
							  	<?php while ( have_rows('why_us_panels') ) : the_row();?>	
							  	
								<div class="single-product-why-us-panel">
									
									<div class="row align-middle">
									<?php if( have_rows('single_panel') ):?>
								  		<?php while ( have_rows('single_panel') ) : the_row();?>	
								  		
								  		<div class="product-why-us-panel-copy columns medium-6">
									  		<div class="pwup-icon-heading-wrap">
									  			<img src="<?php the_sub_field('icon');?>"/>
									  			<h3><?php the_sub_field('heading');?></h3>
									  		</div>
									  		
									  		<div class="pwup-copy-seperator"></div>
									  		
									  		<p><?php the_sub_field('copy');?></p>
								  		</div>
				
								  		<div class="columns medium-6">
									  	
									  	<?php $image = get_sub_field('image');
									  	if( $image ):?>
										<div class="product-has-corner-bg pwu-img-wrap ic-row-img-wrap ic-row-half">
											<span class="ic-row-img">
												<span class="image-corner-bg sky-blue-corner-bg"></span>
												<span class="image-corner-bg dark-blue-corner-bg"></span>
												<?php echo wp_get_attachment_image( $image, $size );?>
												<?php
												_s_get_template_part( 'template-parts/global', 'pixel-grid' );
												?>
												</span>
												
										</div>
										<?php endif;?>
				
								  		</div>
								  		
										<?php endwhile;?>
							  		<?php endif;?>
									</div>
								</div>
								
								<?php endwhile;?>
							
							</div>
							
							
							
						</div>
				  		<?php endif;?>
				</div>
				
	  		</section>
	  		<?php endif;?>
	  		
	  		
	  		
	  		
	  	<?php if( get_field('product_type') == 'software' ): ?>

			<section id="compare-calman-software" class="columns row">
				
				<div class="text-center">
					<?php
						_s_get_template_part( 'template-parts/global', 'pixel-set' );
					?>
					<h2>Product Comparison</h2>
				</div>
				
				<div id="comparison-nav-wrap" class="tab-nav centered-tab-nav text-center align-center">
					<button class="no-style-button tab-nav-button pro-software-button">
						<div class="plus-wrap">
							<span class="plus-line plus-line-h"></span>
							<span class="plus-line plus-line-v"></span>
						</div>
						Professional Calibration Software
					</button>

					<button class="no-style-button tab-nav-button home-theater-button">
						<div class="plus-wrap">
							<span class="plus-line plus-line-h"></span>
							<span class="plus-line plus-line-v"></span>
						</div>
						Consumer Calibration Software
					</button>
				</div>
				
				<div id="comparison-table-wrap">
						
					<div id="pro-cal-software" class="prod-table-cat">
						<?php echo do_shortcode('[table id=1 /]');?>
					</div>	
					
					
					<div id="home-theater-software" class="prod-table-cat">
						<?php echo do_shortcode('[table id=2 /]');?>
					</div>	
				
				</div>
															
			</section>
			
		<?php endif; ?>


	  		<section id="product-grid">
		  		
		  		<div class="text-center product-grid-title">
					<?php
						_s_get_template_part( 'template-parts/global', 'pixel-set' );
					?>
					<h2>Products</h2>
				</div>
		  			  	
		  		<?php if( get_field('product_type') == 'software' ): ?>

			  		<div id="software-products" class="product-main-cat row columns">	
				  		
			  			<div id="software-cat-nav-wrap" class="product-grid-filter-wrap tab-nav centered-tab-nav text-center align-center">
							<button class="no-style-button tab-nav-button pro-software-grid-button">
								<div class="plus-wrap">
									<span class="plus-line plus-line-h"></span>
									<span class="plus-line plus-line-v"></span>
								</div>
								Professional Calibration Software
							</button>
		
							<button class="no-style-button tab-nav-button consumer-software-grid-button">
								<div class="plus-wrap">
									<span class="plus-line plus-line-h"></span>
									<span class="plus-line plus-line-v"></span>
								</div>
								Consumer Calibration Software
							</button>
						</div>
				  		
				  					  			
				  		<div id="pro-software-grid" class="product-sub-cat">
					  		
					  		<div class="row small-up-1 medium-up-2 large-up-3">
					  		
								<?php
								$args = array( 
								'post_type' => 'software',
								'taxonomy' => 'software-category',
								'term' => 'professional-calibration-software',
								'posts_per_page' => -1 ,
								'order' => 'DESC'
								
								);
								
								$loop = new WP_Query( $args );
								
								while ( $loop->have_posts() ) : $loop->the_post();?>
								  
						  			<?php 
									$link = get_field('link');
										$link_url = $link['url'];
										$link_title = $link['title'];
										$link_target = $link['target'] ? $link['target'] : '_self';
										?>
		
									<a class="single-product-card columns" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>">
									  	<div class="spc-inner row">	
										  							
											<div class="product-card-top">
												<div class="product-card-title-row">
													<h3><?php the_title();?></h3>
													<img src="/wp-content/themes/portrait-displays/assets/svg/display-icon.svg"/>
												</div>
												
												<div class="product-card-content">
													<?php the_content();?>
												</div>
												
											</div>
										
											<div class="product-card-bottom">
												
												<div class="tab-nav">
													<button class="no-style-button plus-link tab-nav-button">
														<div class="plus-wrap">
															<span class="plus-line plus-line-h"></span>
															<span class="plus-line plus-line-v"></span>
														</div>
													<?php echo esc_html($link_title); ?>
													</button>
												</div>
											</div>
										
										</div>
									
									</a>
								  
								<?php endwhile; wp_reset_query();?>  
					  		</div>
				  		</div>      

				  		<div id="consumer-software-grid" class="product-sub-cat">
					  		
					  		<div class="row small-up-1 medium-up-2 large-up-3">					  		
								<?php
								$args = array( 
								'post_type' => 'software',
								'taxonomy' => 'software-category',
								'term' => 'consumer-calibration-software',
								'posts_per_page' => -1 ,
								'order' => 'DESC'
								
								);
								
								$loop = new WP_Query( $args );
								
								while ( $loop->have_posts() ) : $loop->the_post();?>
								  
									<a class="single-product-card columns" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>">
									  	<div class="spc-inner row">	
										  							
											<div class="product-card-top">
												<div class="product-card-title-row">
													<h3><?php the_title();?></h3>
													<img src="/wp-content/themes/portrait-displays/assets/svg/display-icon.svg"/>
												</div>
												
												<div class="product-card-content">
													<?php the_content();?>
												</div>
												
											</div>
										
											<div class="product-card-bottom">
												
												<div class="tab-nav">
													<button class="no-style-button plus-link tab-nav-button">
														<div class="plus-wrap">
															<span class="plus-line plus-line-h"></span>
															<span class="plus-line plus-line-v"></span>
														</div>
													<?php echo esc_html($link_title); ?>
													</button>
												</div>
											</div>
										
										</div>
									
									</a>
								  
								<?php endwhile; wp_reset_query();?>  
								
					  		</div>
				  		</div> 
				  		
				  	</div>
			  	
			  	<?php else:?>
			  	
			  		<div id="hardware-products" class="product-main-cat">
				  		
			  			<div id="hardware-cat-nav-wrap" class="product-grid-filter-wrap tab-nav centered-tab-nav text-center align-center">
							<button class="no-style-button tab-nav-button measurement-devices-grid-button">
								<div class="plus-wrap">
									<span class="plus-line plus-line-h"></span>
									<span class="plus-line plus-line-v"></span>
								</div>
								Measurement Devices
							</button>
		
							<button class="no-style-button tab-nav-button pattern-generators-grid-button">
								<div class="plus-wrap">
									<span class="plus-line plus-line-h"></span>
									<span class="plus-line plus-line-v"></span>
								</div>
								Pattern Generators
							</button>
						</div>
				  		
				  					  			
				  		<div id="measurement-devices-grid" class="product-sub-cat">
					  		
					  		<div class="row small-up-1 medium-up-2 large-up-3">
					  		
								<?php
								$args = array( 
								'post_type' => 'hardware',
								'taxonomy' => 'hardware-category',
								'term' => 'measurement-devices',
								'posts_per_page' => -1 ,
								'order' => 'DESC'
								
								);
								
								$loop = new WP_Query( $args );
								
								while ( $loop->have_posts() ) : $loop->the_post();?>
								  
									<a class="single-product-card columns" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>">
									  	<div class="spc-inner row">	
										  							
											<div class="product-card-top">
												<div class="product-card-title-row">
													<h3><?php the_title();?></h3>
													<img src="/wp-content/themes/portrait-displays/assets/svg/display-icon.svg"/>
												</div>
												
												<div class="product-card-content">
													<?php the_content();?>
												</div>
												
											</div>
										
											<div class="product-card-bottom">
												
												<div class="tab-nav">
													<button class="no-style-button plus-link tab-nav-button">
														<div class="plus-wrap">
															<span class="plus-line plus-line-h"></span>
															<span class="plus-line plus-line-v"></span>
														</div>
													<?php echo esc_html($link_title); ?>
													</button>
												</div>
											</div>
										
										</div>
									
									</a>
																	  
								<?php endwhile; wp_reset_query();?>  
					  		</div>
				  		</div>      


				  		<div id="pattern-generators-grid" class="product-sub-cat">
					  		
					  		<div class="row small-up-1 medium-up-2 large-up-3">
					  		
								<?php
								$args = array( 
								'post_type' => 'hardware',
								'taxonomy' => 'hardware-category',
								'term' => 'pattern-generators',
								'posts_per_page' => -1 ,
								'order' => 'DESC'
								
								);
								
								$loop = new WP_Query( $args );
								
								while ( $loop->have_posts() ) : $loop->the_post();?>
								  
									<a class="single-product-card columns" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>">
									  	<div class="spc-inner row">	
										  							
											<div class="product-card-top">
												<div class="product-card-title-row">
													<h3><?php the_title();?></h3>
													<img src="/wp-content/themes/portrait-displays/assets/svg/display-icon.svg"/>
												</div>
												
												<div class="product-card-content">
													<?php the_content();?>
												</div>
												
											</div>
										
											<div class="product-card-bottom">
												
												<div class="tab-nav">
													<button class="no-style-button plus-link tab-nav-button">
														<div class="plus-wrap">
															<span class="plus-line plus-line-h"></span>
															<span class="plus-line plus-line-v"></span>
														</div>
													<?php echo esc_html($link_title); ?>
													</button>
												</div>
											</div>
										
										</div>
									
									</a>
								  
								<?php endwhile; wp_reset_query();?>  
					  		</div>
				  		</div>      

				  	</div>			  	
			  	
			  	<?php endif;?>
		  		
	  		</section>
	  		
	  		<section id="resource-center-link" class="row columns small-wrap text-center align-center">
		  		<?php if( have_rows('resource_center') ):?>
					<?php while ( have_rows('resource_center') ) : the_row();?>	
					
					<img class="twistUp" src="<?php the_sub_field('resource_icon');?>"/>
					
					<div id="resource-link-copy-wrap" style="background-image: url(<?php the_sub_field('background_image');?>); background-position: center center; background-size: 100%; background-repeat: no-repeat;">
						
						<h2><?php the_sub_field('heading');?></h2>

						<?php the_sub_field('copy');?>
						
						<?php 
						$link = get_sub_field('link');
						
						if( $link ): 
							$link_url = $link['url'];
							$link_title = $link['title'];
							$link_target = $link['target'] ? $link['target'] : '_self';
							?>
							<a class="button blue-button" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><span class="button-text"><?php echo esc_html($link_title); ?></span><img src="/wp-content/themes/portrait-displays/assets/svg/white-link-arrow.svg"></a>
						<?php endif; ?>

					</div>
					
					
					<?php endwhile;?>
		  		<?php endif;?>		  		
		  	</section>

		


        </main>
    
    </div>

<?php
get_footer();