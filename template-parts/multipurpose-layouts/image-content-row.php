<?php
// Multipurpose - Image and Content Row

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





<?php endif;?>
