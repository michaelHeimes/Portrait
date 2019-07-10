<?php
/**
 * Custom Body Class
 *
 * @param array $classes
 * @return array
 */

add_filter( 'body_class', function( $classes ) {
    unset( $classes[array_search('page-template-default', $classes )] );
    // $classes[] = '';
    return $classes;
}, 99 );

get_header(); ?>

<?php
_s_get_template_part( 'template-parts/global', 'hero' );
?>

<div class="columns row below-hero">
	<div id="primary" class="content-area">
	
		<main id="main" class="site-main" role="main">
	    
	    
		<?php 
		$images = get_field('partner_logos');
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
		
		
		<?php if( have_rows('integrated_solutions') ):?>
			<section id="integrated-solutions" class="medium-wrap">
			<?php while ( have_rows('integrated_solutions') ) : the_row();?>	
			
			<h2 class="text-center"><?php the_sub_field('heading');?></h2>
			
			<?php if( have_rows('solutions') ):?>
				<div id="solutions-wrap" class="staggerUp collapse medium-wrap row small-up-1 medium-up-2 large-up-3">
				<?php while ( have_rows('solutions') ) : the_row();
			
					if( have_rows('single_solution') ):
						while ( have_rows('single_solution') ) : the_row();
						
						$img_id = get_sub_field('image');
						$img_size = "home-solution-link";
						$imgarr = wp_get_attachment_image_src( $img_id, $img_size );
							if( !empty($image) ): ?>
							<a class="single-solution columns staggered" href="<?php the_sub_field('link');?>">
								<h3 class="text-center"><?php the_sub_field('label');?></h3>
								
								<div class="hover-text-wrap" style="background-image: url(<?php echo $imgarr[0]; ?> );background-repeat: no-repeat; background-position: center center; background-size: cover;" href="<?php the_sub_field('link');?>">
									<div class="mask"></div>
									<p class="solution-hover-text"><?php the_sub_field('hover_text');?><img src="/wp-content/themes/portrait-displays/assets/svg/small-white-right-arrow.svg"/></p>
								</div>
							</a>
							<?php endif;?>
						<?php endwhile;?>
					<?php endif;?>
			
				<?php endwhile;?>
				</section>
			<?php endif;?>
		
			<?php endwhile;?>
			</div>
		<?php endif;?>
		
</div>
		
	
		<?php if( have_rows('why_us') ):?>
			<img class="gray-wave gray-wave-top" src="/wp-content/themes/portrait-displays/assets/svg/gray-wave-top.svg"/>
			<section id="why-us" class="gray-bg">
			<?php while ( have_rows('why_us') ) : the_row();?>	
			<h2 class="text-center"><?php the_sub_field('heading');?></h2>
			
			<?php if( have_rows('answers') ):?>
				<div id="answer-wrap" class="medium-wrap row columns">
					<div class="row collapse small-up-1 medium-up-2 large-up-2">

						<?php while ( have_rows('answers') ) : the_row();
					
							if( have_rows('single_answer') ):
								while ( have_rows('single_answer') ) : the_row();?>
								
								<div class="single-answer columns collapse align-top">
									
									<div class="row collapse align-top">
										
										<div class="text-center answer-img-wrap">
											<?php
											$img_id_wuc_r = get_sub_field('image');
											$img_size_wuc_r = "why-us-circle@2x";
											$imgarr_wuc_r = wp_get_attachment_image_src( $img_id_wuc_r, $img_size_wuc_r );?>								
											<div class="retina wuc-img" style="background-image: url(<?php echo $imgarr_wuc_r[0]; ?> );background-repeat:no-repeat;background-size: contain;background-position: center center;"></div>
											
										</div>
										
										<div class="answer-copy-wrap">
											<h3><?php the_sub_field('label');?></h3>
											<p><?php the_sub_field('copy');?></p>
										</div>
										
									</div>
										
								</div>
							
								<?php endwhile;?>
							<?php endif;?>			
				<?php endwhile;?>
					</div>
				</div>
			<?php endif;?>
		
			<?php endwhile;?>
			</section>
			<img class="gray-wave gray-wave-bottom" src="/wp-content/themes/portrait-displays/assets/svg/gray-wave-bottom.svg"/>
		<?php endif;?>	
	
			
		
		<section id="below-why-us-button" class="text-center has-gray-fins gray-curve-bottom bounce-button">
			
			<img class="gray-fins" src="/wp-content/themes/portrait-displays/assets/svg/gray-section-fins.svg"/>
			<?php 
			$link = get_field('blue_see_all_products_link');
			if( $link ): 
				$link_url = $link['url'];
				$link_title = $link['title'];
				$link_target = $link['target'] ? $link['target'] : '_self';
				?>
				<a class="button blue-button" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><span class="button-text"><?php echo esc_html($link_title); ?></span><img src="/wp-content/themes/portrait-displays/assets/svg/white-link-arrow.svg"/></a>
			<?php endif; ?>
			
		</section>
		
<div class="columns row">
		
		<div class="text-center">
		<?php
		_s_get_template_part( 'template-parts/global', 'pixel-set' );
		?>
		</div>
		
		<?php if( have_rows('industries_served') ):?>
			<section id="industries-served" class="text-center medium-wrap">
			<?php while ( have_rows('industries_served') ) : the_row();?>	
			<h2><?php the_sub_field('heading');?></h2>
			<?php if( have_rows('industries') ):?>
				<div id="industries-wrap" class="row small-up-2 medium-up-3 large-up-5">
				<?php while ( have_rows('industries') ) : the_row();
			
					if( have_rows('single_industry') ):
						while ( have_rows('single_industry') ) : the_row();?>
						
						<div class="single-industry columns">
							<?php 
							$link = get_sub_field('link');
							if( $link ): 
								$link_url = $link['url'];
							?>
							<a href="<?php echo esc_url($link_url); ?>">
							<?php endif;?>
											
								<?php 
								$image = get_sub_field('icon');
								if( !empty($image) ): ?>
								<img class="fadeInLeft" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
								<?php endif; ?>
								<div class="fadeInUp">
									<h3><?php the_sub_field('label');?></h3>
						  	
								  	<?php 
									$link = get_sub_field('link');
									if( $link ): ?>
									
										<div class="plus-wrap">
								  			<span class="plus-line plus-line-h"></span>
								  			<span class="plus-line plus-line-v"></span>
								  		</div>
									<?php endif;?>
									
								</div>
								
						  	<?php 
							$link = get_sub_field('link');
							if( $link ): ?>
							</a>
							<?php endif;?>
											
						</div>
					
						<?php endwhile;?>
					<?php endif;?>
			
				<?php endwhile;?>
				</div>
			<?php endif;?>
		
			<?php endwhile;?>
			</section>
		<?php endif;?>	
	        
		</main>
	
	
	</div>
</div>
<?php
get_footer();
