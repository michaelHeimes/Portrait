<?php
// Industries - Image and Content Row

if( get_row_layout() == 'image_and_content_row' ):
		        
	$row_bg_color = get_sub_field('row_background_color'); 			    
	$image_style = get_sub_field('image_style');
	$image_alignment = get_sub_field('image_alignment');
	$content_type = get_sub_field('content_type');
	$image = get_sub_field('image');
	$size = 'flex-page-standard';
	?>

	<section class="image-content-row row-bg-<?php echo $row_bg_color ?> img-style-<?php echo $image_style ?> row-img-align-<?php echo $image_alignment ?>">
		
		<div class="row">
								
			<?php if( $image ):?>
			<div class="ic-row-img-wrap ic-row-half columns small-12 medium-12 large-6">				
				<span class="ic-row-img">
					<span class="color-bg-block"></span>
					
					<?php if($image_style == "blue-corners-grid"):?>
						<span class="image-corner-bg sky-blue-corner-bg"></span>
						<span class="image-corner-bg dark-blue-corner-bg"></span>
					<?php endif;?>
					
					
					<?php if($image_style == "white-corner-bg-grid"):?>
						<?php
							_s_get_template_part( 'template-parts/global', 'pixel-grid' );
						?>
					<?php endif;?>
					
					<?php echo wp_get_attachment_image( $image, $size );?>
					
					<?php if($image_style == "blue-corners-grid"):?>
						<?php
							_s_get_template_part( 'template-parts/global', 'pixel-grid' );
						?>
					<?php endif;?>
					
				</span>
					
			</div>
			<?php endif;
				
				
			if( $content_type == 'copy'):
			if( have_rows('copy') ):
				while ( have_rows('copy') ) : the_row();
				
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
			if( have_rows('bulleted_list') ):
				while ( have_rows('bulleted_list') ) : the_row();
				
				$link = get_sub_field('link');?>
				<div class="ic-copy-wrap ic-row-half columns small-12 medium-12 large-6">
					
					<?php if ( get_sub_field('heading')):?>
					<h2><?php the_sub_field('heading');?></h2>
					<?php endif;?>
						
					<?php if ( get_sub_field('copy')):?>
					<p><?php the_sub_field('copy');?></p>
					<?php endif;?>

	
					
					<?php if( have_rows('list') ):?>
						<ul class="ic-list fancy-bullets">
						<?php while ( have_rows('list') ) : the_row();?>	
							<li><span><?php the_sub_field('single_row');?></span></li>
						<?php endwhile;?>
						</ul>
					<?php endif;?>
					
				</div>
				<?php endwhile;
					
			endif;
			endif; ?>
			
		</div>	
			
	</section>





<?php endif;?>
