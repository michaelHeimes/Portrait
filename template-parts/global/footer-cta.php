<!-- Footer CTA -->

<?php
$show_cta = get_field('show_cta');

if( $show_cta && in_array('yes', $show_cta) ): ?>


<?php
$img_id = get_field('footer_cta_background_image');
$img_size = "footer-cta-bg";
$imgarr = wp_get_attachment_image_src( $img_id, $img_size );?>
<section id="footer-cta" style="background-image: url(<?php echo $imgarr[0]; ?> );background-repeat:no-repeat;background-size: cover;background-position: center center;">
	
		<?php if(is_page_template('page-templates/blog.php')):?>
		
		<img id="white-footer-wave" src="/wp-content/themes/portrait-displays/assets/svg/blog-footer-wave.svg"/>
		
		<?php else:?>
		
		<img id="white-footer-wave" src="/wp-content/themes/portrait-displays/assets/svg/white-footer-wave.svg"/>
		
		<?php endif;?>
	
	<div id="footer-cta-mask"></div>
	<div class="row">
		
		<div class="column small-12">
			
			<?php if( get_field('how_many_link_buttons') == 'one' ): ?>
			<div id="footer-cta-single" class="footer-cta-content-wrap row align-center text-center">
				<div class="footer-cta-half small-12 medium-8 large-4 text-center">
				<?php if( have_rows('footer_cta_with_one_button') ):?>
					<?php while ( have_rows('footer_cta_with_one_button') ) : the_row();?>	
				
						<h2 class="fadeInUp"><?php the_sub_field('text');?></h2>
					
						<?php 
						$link = get_sub_field('link_button');
						if( $link ): 
							$link_url = $link['url'];
							$link_title = $link['title'];
							$link_target = $link['target'] ? $link['target'] : '_self';
							?>
							<a class="button blue-button" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><span class="button-text"><?php echo esc_html($link_title); ?></span><img src="/wp-content/themes/portrait-displays/assets/svg/white-link-arrow.svg"/></a>
						<?php endif; ?>
				
				
					<?php endwhile;?>
				<?php endif;?>
				</div>
			</div>
			<?php endif; ?>
		
		
			<?php if( get_field('how_many_link_buttons') == 'two' ): ?>
			<div id="footer-cta-double" class="footer-cta-content-wrap row align-middle text-center">
				<?php if( have_rows('footer_cta_with_two_buttons') ):?>
					<?php while ( have_rows('footer_cta_with_two_buttons') ) : the_row();?>	
					
					
						<?php if( have_rows('left_button') ):?>
							<?php while ( have_rows('left_button') ) : the_row();?>	
				
							<div class="footer-cta-half small-12 medium-8 large-6 text-center">
								<h2 class="fadeInUp"><?php the_sub_field('text');?></h2>
							
								<?php 
								$link = get_sub_field('link_button');
								if( $link ): 
									$link_url = $link['url'];
									$link_title = $link['title'];
									$link_target = $link['target'] ? $link['target'] : '_self';
									?>
									<a class="button blue-button" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><span class="button-text"><?php echo esc_html($link_title); ?></span><img src="/wp-content/themes/portrait-displays/assets/svg/white-link-arrow.svg"/></a>
								<?php endif; ?>
							</div>
					
							<?php endwhile;?>
						<?php endif;?>
						
						<div>
							<?php
							_s_get_template_part( 'template-parts/global', 'pixel-set' );
							?>
						</div>
		
		
						<?php if( have_rows('right_button') ):?>
							<?php while ( have_rows('right_button') ) : the_row();?>	
				
							<div class="footer-cta-half small-12 medium-8 large-6 text-center">
								<h2 class="fadeInUp"><?php the_sub_field('text');?></h2>
							
								<?php 
								$link = get_sub_field('link_button');
								if( $link ): 
									$link_url = $link['url'];
									$link_title = $link['title'];
									$link_target = $link['target'] ? $link['target'] : '_self';
									?>
									<a class="button blue-button" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><span class="button-text"><?php echo esc_html($link_title); ?></span><img src="/wp-content/themes/portrait-displays/assets/svg/white-link-arrow.svg"/></a>
								<?php endif; ?>
							</div>
					
							<?php endwhile;?>
						<?php endif;?>
		
				
					<?php endwhile;?>
				<?php endif;?>
			</div>
			<?php endif; ?>

		</div>
		
	</div>
	
	
</section>

<?php endif; ?>


<?php if(is_home()):?>

	<?php
	$show_cta = get_field('show_cta', 'option');
	
	if( $show_cta && in_array('yes', $show_cta) ): ?>
	
	
	<?php
	$img_id = get_field('footer_cta_background_image', 'option');
	$img_size = "footer-cta-bg";
	$imgarr = wp_get_attachment_image_src( $img_id, $img_size );?>
	<section id="footer-cta" style="background-image: url(<?php echo $imgarr[0]; ?> );background-repeat:no-repeat;background-size: cover;background-position: center center;">
		
		<?php if(is_page_template('page-templates/blog.php')):?>
		
		<img id="white-footer-wave" src="/wp-content/themes/portrait-displays/assets/svg/blog-footer-wave.svg"/>
		
		<?php else:?>
		
		<img id="white-footer-wave" src="/wp-content/themes/portrait-displays/assets/svg/white-footer-wave.svg"/>
		
		<?php endif;?>
		
		<div id="footer-cta-mask"></div>
		<div class="row">
			
			<div class="column small-12">
				
				<?php if( get_field('how_many_link_buttons', 'option') == 'one' ): ?>
				<div id="footer-cta-single" class="footer-cta-content-wrap row align-center text-center">
					<div class="footer-cta-half small-12 medium-8 large-4 text-center">
					<?php if( have_rows('footer_cta_with_one_button', 'option') ):?>
						<?php while ( have_rows('footer_cta_with_one_button', 'option') ) : the_row();?>	
					
							<h2 class="fadeInUp"><?php the_sub_field('text', 'option');?></h2>
						
							<?php 
							$link = get_sub_field('link_button', 'option');
							if( $link ): 
								$link_url = $link['url'];
								$link_title = $link['title'];
								$link_target = $link['target'] ? $link['target'] : '_self';
								?>
								<a class="button blue-button" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><span class="button-text"><?php echo esc_html($link_title); ?></span><img src="/wp-content/themes/portrait-displays/assets/svg/white-link-arrow.svg"/></a>
							<?php endif; ?>
					
					
						<?php endwhile;?>
					<?php endif;?>
					</div>
				</div>
				<?php endif; ?>
			
			
				<?php if( get_field('how_many_link_buttons', 'option') == 'two' ): ?>
				<div id="footer-cta-double" class="footer-cta-content-wrap row align-middle text-center">
					<?php if( have_rows('footer_cta_with_two_buttons', 'option') ):?>
						<?php while ( have_rows('footer_cta_with_two_buttons', 'option') ) : the_row();?>	
						
						
							<?php if( have_rows('left_button', 'option') ):?>
								<?php while ( have_rows('left_button', 'option') ) : the_row();?>	
					
								<div class="footer-cta-half small-12 medium-8 large-6 text-center">
									<h2 class="fadeInUp"><?php the_sub_field('text', 'option');?></h2>
								
									<?php 
									$link = get_sub_field('link_button', 'option');
									if( $link ): 
										$link_url = $link['url'];
										$link_title = $link['title'];
										$link_target = $link['target'] ? $link['target'] : '_self';
										?>
										<a class="button blue-button" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><span class="button-text"><?php echo esc_html($link_title); ?></span><img src="/wp-content/themes/portrait-displays/assets/svg/white-link-arrow.svg"/></a>
									<?php endif; ?>
								</div>
						
								<?php endwhile;?>
							<?php endif;?>
							
							<div>
								<?php
								_s_get_template_part( 'template-parts/global', 'pixel-set' );
								?>
							</div>
			
			
							<?php if( have_rows('right_button', 'option') ):?>
								<?php while ( have_rows('right_button', 'option') ) : the_row();?>	
					
								<div class="footer-cta-half small-12 medium-8 large-6 text-center">
									<h2 class="fadeInUp"><?php the_sub_field('text', 'option');?></h2>
								
									<?php 
									$link = get_sub_field('link_button', 'option');
									if( $link ): 
										$link_url = $link['url'];
										$link_title = $link['title'];
										$link_target = $link['target'] ? $link['target'] : '_self';
										?>
										<a class="button blue-button" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><span class="button-text"><?php echo esc_html($link_title); ?></span><img src="/wp-content/themes/portrait-displays/assets/svg/white-link-arrow.svg"/></a>
									<?php endif; ?>
								</div>
						
								<?php endwhile;?>
							<?php endif;?>
			
					
						<?php endwhile;?>
					<?php endif;?>
				</div>
				<?php endif; ?>
	
			</div>
			
		</div>
		
		
	</section>
	
	<?php endif; ?>

<?php endif; ?>

