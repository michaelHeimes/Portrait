<!-- Global Hero -->

<div id="page-top">	
	<?php if(is_front_page()):?>
	<img id="header-left-fins" src="wp-content/themes/portrait-displays/assets/svg/hero-left-fins.svg"/>
	<?php endif;?>
	
	<?php
	$img_id = get_field('page_top_background_image');
	$img_size = "hero";
	$imgarr = wp_get_attachment_image_src( $img_id, $img_size );
	
/*
	$blog_hero_img_id = get_field('page_top_background_image', 'option');
	$blog_hero_imgarr = wp_get_attachment_image_src( $blog_hero_img_id, $img_size );
*/
	
	$thumbnail_hero_bg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'hero' );
	?>
		<div id="page-top-image">
				
			<?php if(is_front_page()):?>
			
			<div class="hero-curve-wrap" style="background-image: url(<?php echo $imgarr[0]; ?> );background-repeat:no-repeat;background-size: cover;background-position: center center;">
				
				<?php if( get_field('page_top_image_mask_color') == 'blue' ): ?>
					<div id="page-top-blue-mask" class="page-top-mask"></div>
				<?php endif; ?>
				<?php if( get_field('page_top_image_mask_color') == 'black' ): ?>
					<div id="page-top-black-mask" class="page-top-mask"></div>
				<?php endif; ?>	
				
				<img id="home-hero-curve" class="hero-curve" src="/wp-content/themes/portrait-displays/assets/svg/home-hero-mask.svg"/>
				
				<img id="header-right-fins" src="/wp-content/themes/portrait-displays/assets/svg/hero-right-fins.svg"/>

				
			</div>
				
			<?php elseif(is_single()):?>
				<div class="hero-curve-wrap" style="background-image: url(<?php echo $thumbnail_hero_bg[0]; ?> );background-repeat:no-repeat;background-size: cover;background-position: center center;">
					<?php if( get_field('page_top_image_mask_color') == 'blue' ): ?>
						<div id="page-top-blue-mask" class="page-top-mask"></div>
					<?php endif; ?>
					<?php if( get_field('page_top_image_mask_color') == 'black' ): ?>
						<div id="page-top-black-mask" class="page-top-mask"></div>
					<?php endif; ?>	
					
					<img id="interior-hero-curve" class="hero-curve" src="/wp-content/themes/portrait-displays/assets/svg/interior-hero-mask.svg"/>
					
					<img id="header-right-fins" src="/wp-content/themes/portrait-displays/assets/svg/hero-right-fins.svg"/>

				</div>
				
		
			<?php elseif(is_page_template('page-templates/blog.php')):?>
				<div class="hero-curve-wrap" style="background-image: url(<?php echo $imgarr[0]; ?> );background-repeat:no-repeat;background-size: cover;background-position: center center;">
					
					<?php if( get_field('page_top_image_mask_color') == 'blue' ): ?>
						<div id="page-top-blue-mask" class="page-top-mask"></div>
					<?php endif; ?>
					<?php if( get_field('page_top_image_mask_color') == 'black' ): ?>
						<div id="page-top-black-mask" class="page-top-mask"></div>
					<?php endif; ?>	
					
					<img id="interior-hero-curve" class="hero-curve" src="/wp-content/themes/portrait-displays/assets/svg/blog-hero-mask.svg"/>
					
					<img id="header-right-fins" src="/wp-content/themes/portrait-displays/assets/svg/hero-right-fins.svg"/>

				</div>
			
			<?php else:?>

				<div class="hero-curve-wrap" style="background-image: url(<?php echo $imgarr[0]; ?> );background-repeat:no-repeat;background-size: cover;background-position: center center;">
					<?php if( get_field('page_top_image_mask_color') == 'blue' ): ?>
						<div id="page-top-blue-mask" class="page-top-mask"></div>
					<?php endif; ?>
					<?php if( get_field('page_top_image_mask_color') == 'black' ): ?>
						<div id="page-top-black-mask" class="page-top-mask"></div>
					<?php endif; ?>	
					
					<img id="interior-hero-curve" class="hero-curve" src="/wp-content/themes/portrait-displays/assets/svg/interior-hero-mask.svg"/>
							
					<img id="header-right-fins" src="/wp-content/themes/portrait-displays/assets/svg/hero-right-fins.svg"/>

				</div>
				
			<?php endif;?>			
	
		</div>
		
					
	<div class="row align-middle">
		
		<div class="hero-content-half top-heading columns small-12 medium-6 large-6 fadeInUp">
			
			<?php if(is_single()):?>
			
				<h1><?php the_title();?></h1>
				
				<div class="entry-meta">
					<?php _s_posted_on(); ?>
				</div><!-- .entry-meta -->
				
				<?php
				$category = get_the_category();
				$link = get_category_link( $category[0]->term_id );
				?>
				
				<a class="button blue-button" href="<?php echo $link ?>"><span class="button-text">Blog Category</span><img src="/wp-content/themes/portrait-displays/assets/svg/white-link-arrow.svg"/></a>
			
			<?php else:?>
			
		
				<h1><?php the_field('page_top_heading');?></h1>
				
			
					<h4><?php the_field('page_top_subtext');?></h4>
				
			
				<?php if(is_page_template('page-templates/downloads.php')):?>
									
<!--
					<button class="button no-style-button" type="button" style="padding: 1em; border: 1px solid gray;
					margin-bottom: 1em;" data-toggle="example-dropdown">Software Products</button>
					<div class="dropdown-pane" id="example-dropdown" data-dropdown data-auto-focus="true">
						<ul class="fancy-bullets dropdown" style="background: #fff;">
						<?php
						$args = array( 
						'post_type' => 'downloads',
						'posts_per_page' => -1 ,
						'order' => 'DESC'
						
						);
						
						$loop = new WP_Query( $args );
						
						while ( $loop->have_posts() ) : $loop->the_post();?>
			
			
						<?php $download = get_post();?>
		
						<li><a href="#<?php echo $download->post_name;?>"><?php the_title();?></a></li>
		
						<?php endwhile; wp_reset_query();?>   
						</ul>
						
					</div>
-->

				
					<div id="download-accordion-wrap" class="accordion" data-allow-all-closed="true" data-accordion>
						
						<div class="accordion-item" data-accordion-item>
							
							<a href="#" class="accordion-title">Software Products</a>
				
							<ul class="fancy-bullets accordion-content" data-tab-content>
							<?php
							$args = array( 
							'post_type' => 'downloads',
							'posts_per_page' => -1 ,
							'order' => 'DESC'
							
							);
							
							$loop = new WP_Query( $args );
							
							while ( $loop->have_posts() ) : $loop->the_post();?>
				
				
							<?php $download = get_post();?>
			
							<li><a href="#<?php echo $download->post_name;?>"><?php the_title();?></a></li>
			
							<?php endwhile; wp_reset_query();?>   
							</ul>
						
						</div>
						
					</div>
					
				<?php endif;?>
				

			<?php endif;?>

			
			<div id="hero-button-wrap">
				<?php 
				$link = get_field('page_top_blue_button');
				if( $link ): 
					$link_url = $link['url'];
					$link_title = $link['title'];
					$link_target = $link['target'] ? $link['target'] : '_self';
					?>
					<a class="button blue-button" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><span class="button-text"><?php echo esc_html($link_title); ?></span><img src="/wp-content/themes/portrait-displays/assets/svg/white-link-arrow.svg"/></a>
				<?php endif; ?>
				
				<?php 
				$link = get_field('page_top_white_button');
				if( $link ): 
					$link_url = $link['url'];
					$link_title = $link['title'];
					$link_target = $link['target'] ? $link['target'] : '_self';
					?>
					<a class="button white-button" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><span class="button-text"><?php echo esc_html($link_title); ?></span><img src="/wp-content/themes/portrait-displays/assets/svg/blue-link-arrow.svg"/></a>
				<?php endif; ?>
			</div>
			
		</div>
		
		<div class="hero-content-half text-right columns small-12 medium-6 large-6">	
			<div class="hero-right-img-wrap fadeInRight">		
			<?php 
			$image = get_field('display_image_for_page_top');
			$size = 'full'; // (thumbnail, medium, large, full or custom size)
			if( $image ) {
				echo wp_get_attachment_image( $image, $size );
			}
			?>	
			</div>
		</div>
		
	</div>
	
<!-- 		<img id="header-right-fins" src="/wp-content/themes/portrait-displays/assets/svg/hero-right-fins.svg"/> -->
			
</div>
